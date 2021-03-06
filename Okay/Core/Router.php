<?php


namespace Okay\Core;

use Okay\Core\Entity\Entity;
use Bramus\Router\Router as BRouter;
use Okay\Core\Routes\RouteFactory;
use Okay\Entities\LanguagesEntity;
use OkayLicense\License;
use Okay\Entities\PagesEntity;

class Router {

    const DEFAULT_CONTROLLER_NAMESPACE = '\\Okay\\Controllers\\';

    private static $currentRouteName;
    private $routeParams;
    private $routeRequiredParams;
    
    private static $routes;

    /** @var BRouter */
    private $router;

    /** @var Request */
    private $request;

    /** @var Response */
    private $response;

    /** @var License */
    private $license;

    /** @var EntityFactory */
    private $entityFactory;

    /** @var ServiceLocator */
    private $serviceLocator;

    /** @var Settings */
    private $settings;

    /** @var Languages */
    private static $languages;

    /** @var Languages */
    private static $routeFactory;

    public function __construct(
        BRouter $router,
        Request $request,
        Response $response,
        License $license,
        EntityFactory $entityFactory,
        Languages $languages,
        Settings $settings,
        RouteFactory $routeFactory
    ) {
        
        // SL будем использовать только для получения сервисов, которые запросили для контроллера
        $this->serviceLocator = ServiceLocator::getInstance();
        
        $this->router        = $router;
        $this->request       = $request;
        $this->response      = $response;
        $this->license       = $license;
        $this->entityFactory = $entityFactory;
        $this->settings      = $settings;
        self::$routeFactory  = $routeFactory;
        self::$languages     = $languages;
    }

    public static function getFrontRoutes()
    {
        self::initializeRoutes();
        $result = [];
        foreach (self::$routes as $name=>$route) {
            if (isset($route['to_front']) && $route['to_front'] === true) {
                $result[$name] = $route;
            }
        }
        
        return $result;
    }
    
    public static function getRouteByName($name)
    {
        self::initializeRoutes();
        return isset(self::$routes[$name]) ? self::$routes[$name] : false;
    }

    private function getFullControllerClassName($controllerName)
    {
        if ($this->classNameHasNoNamespace($controllerName)) {
            return self::DEFAULT_CONTROLLER_NAMESPACE.$controllerName;
        }

        return $controllerName;
    }

    private function methodExists($className, $methodName)
    {
        $allClassMethods = get_class_methods($className);
        return in_array($methodName, $allClassMethods);
    }

    /**
     * Запуск роутера. Здесь происходит регистрация всех роутов и последующее определение текущего роута.
     * Текущий роут определяется по полю slug из роута
     * @throws \Exception
     */
    public function run()
    {
        self::initializeRoutes();
        $router = $this->router;
        $routes = self::$routes;
        $request = $this->request;
        $settings = $this->settings;
        
        /** @var LanguagesEntity $languagesEntity */
        $languagesEntity = $this->entityFactory->get(LanguagesEntity::class);
        
        $language = $languagesEntity->get(self::$languages->getLangId());
        
        $baseRoute = '';
        $label = self::$languages->getLangLink($language->id);

        if (!empty(trim($label, '/'))) {
            $baseRoute = '/' . trim($label, '/');
        }

        foreach ($routes as $routeName => $route) {
            if (empty($route['params']['controller']) || empty($route['params']['method'])) {
                throw new \Exception('Route "'.$routeName.'" must contain two arguments named "controller" and "method" in "params" block');
            }

            $controllerClassName = $this->getFullControllerClassName($route['params']['controller']);
            if (!class_exists($controllerClassName)) {
                throw new \Exception('Class "'.$controllerClassName.'" uses in route "'.$routeName.'" is not exists');
            }

            if (!$this->methodExists($controllerClassName, $route['params']['method'])) {
                throw new \Exception('Method "'.$route['params']['method'].'" of "'.$controllerClassName.'" class uses in route "'.$routeName.'" is not exists');
            }

            if (!empty($route['mock'])) {
                continue;
            }
            
            $pattern = $baseRoute . $this->getPattern($route);
            
            $router->all($pattern, function(...$params) use ($router, $route, $request, $settings, $language, $baseRoute, $routeName) {
                self::$currentRouteName = $routeName;
                $request->setBasePath($router->getBasePath());

                $request->setPageUrl($this->getCurrentUri(
                    $router->getCurrentUri(),
                    $baseRoute
                ));
                
                $routeVars = [];
                $controllerName = $route['params']['controller'];

                if ($this->classNameHasNoNamespace($controllerName)) {
                    $controllerName = self::DEFAULT_CONTROLLER_NAMESPACE . $controllerName;
                }
                $method = $route['params']['method'];

                $this->license->registerSmartyPlugins();
                $this->license->check();

                // Если язык выключен, отдадим 404
                if (!$language->enabled && empty($_SESSION['admin'])) {
                    $controllerName = self::DEFAULT_CONTROLLER_NAMESPACE . 'ErrorController';
                    $method = 'pageNotFound';
                }

                /** @var PagesEntity $pagesEntity */
                $pagesEntity = $this->entityFactory->get(PagesEntity::class);
                $page = $pagesEntity->get((string) $this->request->getPageUrl());
                if (!empty($page) && empty($page->visible)) {
                    $controllerName = self::DEFAULT_CONTROLLER_NAMESPACE . 'ErrorController';
                    $method = 'pageNotFound';
                }
                
                $defaults = isset($route['defaults']) ? $route['defaults'] : [];

                preg_match_all('~{\$(.+?)}~', $route['slug'], $matches);
                $routeVars = array_merge($routeVars, $matches[1]);

                $settings = $this->serviceLocator->getService(Settings::class);
                $siteDisabled = $settings->get('site_work') === 'off' && empty($_SESSION['admin']) ? true : false;
                if ($siteDisabled) {
                    $controllerName = self::DEFAULT_CONTROLLER_NAMESPACE . 'ErrorController';
                    $method = 'siteDisabled';
                }
                
                include_once 'Okay/Core/SmartyPlugins/SmartyPlugins.php';

                // Если контроллер вернул false, кидаем 404
                if ($this->createControllerInstance($controllerName, $method, $params, $routeVars, $defaults) === false) {
                    $this->createControllerInstance(self::DEFAULT_CONTROLLER_NAMESPACE . 'ErrorController', 'pageNotFound', $params, $routeVars, $defaults);
                }
            });
        }

        $response = $this->response;
        
        $router->run(function() use ($response) {
            $response->sendContent();
        });
    }

    /**
     * Метод определяет текущий язык и устанавливает его в класс Languages
     */
    public function resolveCurrentLanguage()
    {
        $languages = self::$languages->getAllLanguages();
        $request = $this->request;

        $languages = array_reverse($languages);
        $router = clone $this->router;
        foreach ($languages as $language) {
            $label = self::$languages->getLangLink($language->id);
            if (!empty(trim($label, '/'))) {
                $pattern = '/' . trim($label, '/') . '(\/.*)?';
            } else {
                $pattern = '/.*';
            }

            $router->all($pattern, function() use ($language, $request) {
                self::$languages->setLangId((int)$language->id);
            });
        }
        $router->run();
    }
    
    private function classNameHasNoNamespace($className)
    {
        return strpos($className, '\\') === false;
    }

    private function createControllerInstance($controllerName, $methodName, $params = [], $routeVars = [], $defaults = [])
    {
        
        $controller = new $controllerName();

        $requiredParametersNames = [];
        $reflectionMethod = new \ReflectionMethod($controller, $methodName);
        foreach ($reflectionMethod->getParameters() as $parameter) {
            if ($parameter->isDefaultValueAvailable() === false) {
                $requiredParametersNames[] = $parameter->name;
            }
        }

        foreach ($this->getMethodParams($controller, $methodName, $params, $routeVars, $defaults, true) as $name=>$paramValue) {
            if (in_array($name, $requiredParametersNames)) {
                $this->routeRequiredParams[$name] = $paramValue;
            }
            $this->routeParams[$name] = $paramValue;
        }

        // Передаем контроллеру, все, что запросили
        call_user_func_array([$controller, 'onInit'], $this->getMethodParams($controller, 'onInit', $params, $routeVars, $defaults));
        // На 404 не вызываем afterController
        if (($controllerResult = call_user_func_array([$controller, $methodName], $this->getMethodParams($controller, $methodName, $params, $routeVars, $defaults))) !== false){
            call_user_func_array([$controller, 'afterController'], $this->getMethodParams($controller, 'afterController', $params, $routeVars, $defaults));
        }
        return $controllerResult;
    }
    
    /**
     * @return array
     * Метод возвращает все параметры, для которых не задан type hint (текстовые)
     * в виде ассоциативного массива, которые указаны в поле slug роута
     */
    public function getCurrentRouteParams()
    {
        return $this->routeParams;
    }
    
    /**
     * @return array
     * Метод возвращает все обязательные параметры, для которых не задан type hint (текстовые)
     * в виде ассоциативного массива, которые указаны в поле slug роута
     */
    public function getCurrentRouteRequiredParams()
    {
        return $this->routeRequiredParams;
    }
    
    public static function generateUrl($routeName, $params = [], $isAbsolute = false, $langId = null) // todo наблюдать, нормально ли будет работать статически
    {
        $route = self::$routeFactory->create($routeName);
        if ($route !== false) {
            $params['url'] = $route->generateSlugUrl($params['url']);
        }

        if (empty($routeName)) {
            throw new \Exception('Empty param "route"');
        }

        if (!$route = self::getRouteByName($routeName)) {
            throw new \Exception("Route \"{$routeName}\" not found");
        }

        unset($params['route']);

        // Перебираем переданные параметры, чтобы подставить их как элементы роута
        $urlData = [];
        if (!empty($params)) {
            foreach ($params as $var=>$param) {
                $urlData['{$' . $var . '}'] = $param;
            }
        }

        $slug = $route['slug'];
        
        $result = trim(strtr($slug, $urlData), '/');

        // Если это не внешний урл, добавим языковой префикс
        if (!preg_match('~^https?://~', $result)) {
            $result = self::$languages->getLangLink($langId) . $result;
        }

        $result = preg_replace('~{\$[^$]*}~', '', $result);
        $result = trim($result, '/');
        
        if ($isAbsolute === true) {
            $result = Request::getRootUrl() . '/' . $result;
        }

        return $result;
    }
    
    /**
     * @return string
     *
     * Метод возвращает имя текущего роута
     */
    public static function getCurrentRouteName()
    {
        return self::$currentRouteName;
    }

    /**
     * Метод на основании поля slug роута генерирует регулярное выражение
     * @param $route
     * @return string pattern
     */
    public function getPattern($route)
    {
        $pattern = !empty($route['patterns']) ? strtr($route['slug'], $route['patterns']) : $route['slug'];
        $pattern = trim(preg_replace('~{\$.+?}~', '([^/]+)', $pattern), '/');
        return !empty($pattern) ? '/' . $pattern : $pattern;
    }

    /**
     * Добавляет новые маршруты в реестр класса роутера
     * @param $routes
     * @throws \Exception Route name already uses
     * @return void
     */
    public static function bindRoutes(array $routes)
    {
        self::initializeRoutes();
        foreach($routes as $routeName => $route) {
            if (array_key_exists($routeName, self::$routes)) {
                throw new \Exception('Route name "'.$routeName.'" already uses');
            }
        }

        self::$routes = array_merge($routes, self::$routes);
    }

    /**
     * @param $controller
     * @param $methodName
     * @param array $routeParams
     * @param array $routeVars
     * @param array $defaults
     * @param bool $stringOnly - возвращать все параметры или только текстовые
     * @return array ассоциативный массив, где ключ - название параметра, 
     * значение - экземпляк класса, который указали как Type hint или строка, которая соответствует части урла
     * @throws \ReflectionException
     */
    private function getMethodParams($controller, $methodName, $routeParams = [], $routeVars = [], $defaults = [], $stringOnly = false)
    {
        $methodParams = [];
        $allParams = [];
        
        // Перебираем переменные роута, чтобы заполнить их дефолтными значениями
        if (!empty($routeVars)) {
            foreach ($routeVars as $key => $routeVar) {
                $param = isset($routeParams[$key]) ? $routeParams[$key] : null;
                $allParams[$routeVar] = (empty($param) && !empty($defaults['{$' . $routeVar . '}']) ? $defaults['{$' . $routeVar . '}'] : $param);
            }
        }
        
        // Проходимся рефлексией по параметрам метода, определяем их тип, и пытаемся через DI передать нужный объект
        // Если тип не указан, тогда связываем название переменной в поле slug роута, с названием аргумента метода
        $reflectionMethod = new \ReflectionMethod($controller, $methodName);
        foreach ($reflectionMethod->getParameters() as $parameter) {
            
            if ($parameter->getClass() !== null) { // если для аргумента указан type hint, передадим экземляр соответствующего класса
                if ($stringOnly === false) {
                    // Определяем это Entity или сервис из DI
                    if (is_subclass_of($parameter->getClass()->name, Entity::class)) {
                        $methodParams[$parameter->getClass()->name] = $this->entityFactory->get($parameter->getClass()->name);
                    } else {
                        $methodParams[$parameter->getClass()->name] = $this->serviceLocator->getService($parameter->getClass()->name);
                    }
                }
            } elseif (!empty($allParams[$parameter->name]) || array_key_exists($parameter->name, $allParams)) { // если тип не указан, передаем строковую переменную как значение из поля slug (то, что попало под регулярку)
                $methodParams[$parameter->name] = $allParams[$parameter->name];
            } elseif (!empty($defaults['{$' . $parameter->name . '}'])) { // на крайний случай, может в поле defaults роута указано значение этой переменной
                $methodParams[$parameter->name] = $defaults['{$' . $parameter->name . '}'];
            } elseif ($parameter->isDefaultValueAvailable() === false) { // Если не нашли значения аргументу, и он не имеет значения по умолчанию в методе контроллера, ошибка
                $controllerName = $reflectionMethod->getDeclaringClass()->name;
                throw new \Exception("Missing argument \"\${$parameter->name}\" in \"{$controllerName}->{$methodName}()\"");
            }
        }

        return $methodParams;
    }

    private function getCurrentUri($currentUri, $baseUri)
    {
        return preg_replace('~^('.$baseUri.'/?)(.*)$~', '$2', $currentUri);
    }

    /**
     * Метод инициализирует системные роуты, вызывать можно сколько угодно, отработает только раз
     */
    private static function initializeRoutes()
    {
        if (($routes = require_once 'Okay/Core/config/routes.php') && is_array($routes)) {
            self::$routes = $routes;
        }
    }
    
}
