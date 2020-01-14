<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:46
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e011a356b68_73212070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85eda7146a497f1aa28b6634cb45e8db3fadd5b4' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/breadcrumb.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_5e1e011a356b68_73212070 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['controller']->value != "MainController") {?>
    <ol class="breadcrumbs d-flex flex-wrap align-items-center">
                <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'main'),$_smarty_tpl ) );?>
" >
                <span itemprop="title" data-language="breadcrumb_home" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"home_icon"), 0, false);
?>
                </span>
            </a>
        </li>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value == "CategoryController") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->path, 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_0_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a itemprop="url" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['cat']->value->url),$_smarty_tpl ) );?>
">
                                    <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "ProductsController") {?>
            <?php if (!empty($_smarty_tpl->tpl_vars['keyword']->value)) {?>
                <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="general_search"><?php echo $_smarty_tpl->tpl_vars['lang']->value->general_search;?>
</li>
            <?php } else { ?>
                <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
            
                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BrandController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a itemprop="url" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brands'),$_smarty_tpl ) );?>
" data-language="breadcrumb_brands">
                    <span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                </a>
            </li>
            <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BrandsController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "ProductController") {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->path, 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_1_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                    <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['cat']->value->url),$_smarty_tpl ) );?>
">
                            <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "FeedbackController" || $_smarty_tpl->tpl_vars['controller']->value == "PageController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "CartController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumb_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "OrderController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumb_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "LoginController" && $_GET['action'] == "password_remind") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumbs_password_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "LoginController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumbs_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "RegisterController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumbs_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "UserController") {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumbs_user"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>
            <?php if ($_smarty_tpl->tpl_vars['post']->value) {?>
                <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">

                    <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == "news") {?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('prev_url', $_prefixVariable2);?>
                    <?php } else { ?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('prev_url', $_prefixVariable3);?>
                    <?php }?>
                    
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">
                        <span itemprop="title">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == "news") {?>
                                <span data-language="main_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>
</span>
                            <?php } else { ?>
                                <span data-language="breadcrumbs_blog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>
</span>
                            <?php }?>
                        </span>
                    </a>
                </li>
                <li class="d-inline-flex align-items-center breadcrumbs__item">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                </li>
            <?php } else { ?>
                <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumbs_blog">
                    <?php if ($_smarty_tpl->tpl_vars['typePost']->value == "news") {?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                    <?php }?>
                </li>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'ComparisonController') {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumb_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</li>
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'WishListController') {?>
            <li class="d-inline-flex align-items-center breadcrumbs__item" data-language="breadcrumb_wishlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</li>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value) && is_array($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'name', true, 'url');
$_smarty_tpl->tpl_vars['name']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->iteration++;
$_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
$__foreach_name_2_saved = $_smarty_tpl->tpl_vars['name'];
?>
                <?php if (!$_smarty_tpl->tpl_vars['name']->last) {?>
                    <li class="d-inline-flex align-items-center breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="d-inline-flex align-items-center breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </ol>
<?php }
}
}
