<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff297269_58156562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd90f41dcb70f673b974f446aa3183a8fd092b207' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/index.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:user_informer.tpl' => 1,
    'file:svg.tpl' => 15,
    'file:switcher.tpl' => 1,
    'file:wishlist_informer.tpl' => 1,
    'file:comparison_informer.tpl' => 1,
    'file:cart_informer.tpl' => 1,
    'file:desktop_categories.tpl' => 1,
    'file:breadcrumb.tpl' => 1,
    'file:advantages.tpl' => 1,
    'file:mobile_menu.tpl' => 1,
    'file:callback.tpl' => 1,
  ),
),false)) {
function content_5e1e00ff297269_58156562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/anthony/Workspace/OkayCMS/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
        <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body class="d-flex flex-column <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>main_page<?php } else { ?>other_page<?php }?>">

    <?php if (!empty($_smarty_tpl->tpl_vars['counters']->value['body_top'])) {?>
        <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_top:counters');<?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value['body_top'], 'counter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_top:counters');<?php echo '</script'; ?>
>
    <?php }?>

    <header class="header">
        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false || $_smarty_tpl->tpl_vars['is_tablet']->value == true) {?>
        <div class="header__top hidden-md-down">
            <div class="container">
                <div class="f_row align-items-center flex-nowrap justify-content-between">
                                        <div id="account" class="d-flex align-items-center f_col">
                        <?php $_smarty_tpl->_subTemplateRender("file:user_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="d-flex align-items-center f_col justify-content-end">
                                                <a class="fn_callback callback d-inline-flex align-items-center" href="#fn_callback" data-language="index_back_call">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"support_icon"), 0, false);
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span>
                        </a>
                                                <div class="switcher d-flex align-items-center">
                            <?php $_smarty_tpl->_subTemplateRender("file:switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__center hidden-md-down" >
            <div class="container">
                <div class="f_row no_gutters flex-nowrap align-items-center justify-content-between">
                                        <div class="fn_menu_switch menu_switcher"></div>
                                        <div class="header__logo logo">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;
$_prefixVariable5 = ob_get_clean();
if (!empty($_prefixVariable5)) {?>
                        <a class="logo__link " href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>javascript:;<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'main'),$_smarty_tpl ) );
}?>">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
?v=<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo_version;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </a>
                        <?php }?>
                    </div>
                                        <div class="header__menu d-flex flex-wrap">
                        <?php echo $_smarty_tpl->tpl_vars['menu_header']->value;?>

                    </div>
                                        <div class="header-contact">
                        <div class="header-contact__inner">
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_phones) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_phones, 'phone');
$_smarty_tpl->tpl_vars['phone']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->index++;
$_smarty_tpl->tpl_vars['phone']->first = !$_smarty_tpl->tpl_vars['phone']->index;
$__foreach_phone_10_saved = $_smarty_tpl->tpl_vars['phone'];
?>
                                    <div class="header-contact__item header-contact--phone<?php if ($_smarty_tpl->tpl_vars['phone']->first) {?> header-contact__item--visible<?php }?>">
                                        <a class="d-flex align-items-center header-contact__section" href="tel:<?php echo preg_replace('~[^0-9]~','',$_smarty_tpl->tpl_vars['phone']->value);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"phone_icon"), 0, true);
?>
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['phone'] = $__foreach_phone_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_email) {?>
                                <div class="header-contact__item header-contact--email">
                                    <a class="d-flex align-items-center header-contact__section" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
" >
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_working_hours) {?>
                                <div class="header-contact__item header-contact--time">
                                    <div class="d-flex align-items-center header-contact__section">
                                        <div class="header-contact__title-s"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_working_hours;?>
</div>
                                    </div>
                                </div>
                            <?php }?>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="header__bottom">
            <div class="<?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController') {?>fn_header__sticky <?php }?>" data-margin-top="0" data-sticky-for="1024" data-sticky-class="is-sticky">
                <div class="container">
                    <div class="header__bottom_panel f_row no_gutters flex-nowrap align-content-stretch justify-content-between">
                                                <div class="fn_menu_switch menu_switcher hidden-lg-up">
                            <div class="menu_switcher__heading d-flex align-items-center">
                                <i class="fa fa-bars catalog_icon"></i>
                                <span class="" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_mobile_menu;?>
</span>
                            </div>
                        </div>
                                                <div class="<?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController' || empty($_smarty_tpl->tpl_vars['global_banners']->value)) {?>fn_catalog_switch button--blick<?php }?> catalog_button d-lg-flex hidden-md-down ">
                            <div class="catalog_button__heading d-flex align-items-center ">
                                <i class="fa fa-bars catalog_icon"></i>
                                <span class="" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController' || empty($_smarty_tpl->tpl_vars['global_banners']->value)) {?>
                                    <span class="catalog_button__arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                                <?php }?>
                            </div>
                         </div>
                                                <form id="fn_search" class="fn_search_mob search d-md-flex" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'search'),$_smarty_tpl ) );?>
">
                            <input class="fn_search search__input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" aria-label="search" data-language="index_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
                            <button class="search__button d-flex align-items-center justify-content-center" aria-label="search" type="submit"></button>
                        </form>
                        <div class="header_informers d-flex align-items-center">
                                                        <div class="fn_search_toggle header_informers__item d-flex align-items-center justify-content-center hidden-md-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"search_icon"), 0, true);
?></div>
                                                        <div id="wishlist" class="header_informers__item d-flex align-items-center justify-content-center"><?php $_smarty_tpl->_subTemplateRender("file:wishlist_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
                                                        <div id="comparison" class="header_informers__item d-flex align-items-center justify-content-center"><?php $_smarty_tpl->_subTemplateRender("file:comparison_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
                                                        <div id="cart_informer" class="header_informers__item d-flex align-items-center justify-content-center"><?php $_smarty_tpl->_subTemplateRender('file:cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false && $_smarty_tpl->tpl_vars['is_tablet']->value == false) {?>
                            <nav class="fn_catalog_menu categories_nav hidden-md-down <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController' && !empty($_smarty_tpl->tpl_vars['global_banners']->value)) {?>categories_nav--show<?php }?>">
                                <?php $_smarty_tpl->_subTemplateRender("file:desktop_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </nav>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <div id="fn_content" class="main">
                <?php if (!empty($_smarty_tpl->tpl_vars['global_banners']->value)) {?>
            <div class="container">
                <div class="<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>d-flex main_banner<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['global_banners']->value;?>

                </div>
            </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value == "MainController" || (!empty($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value->url == '404')) {?>
            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php } else { ?>
            <div class="container">
                <?php $_smarty_tpl->_subTemplateRender('file:breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="fn_ajax_content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


                                        <?php $_smarty_tpl->_subTemplateRender('file:advantages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        <?php }?>
    </div>

        <div class="fn_to_top to_top"></div>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_before_footer_content"),$_smarty_tpl ) );?>

    </div>

        <footer class="footer">
        <div class="container">
            <div class="f_row flex-column flex-md-row justify-content-md-between align-items-start">
                                <div class="f_col-lg">
                    <div class="footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_contacts"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="footer__content footer__hidden">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_phones) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_phones, 'phone');
$_smarty_tpl->tpl_vars['phone']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->index++;
$_smarty_tpl->tpl_vars['phone']->first = !$_smarty_tpl->tpl_vars['phone']->index;
$__foreach_phone_11_saved = $_smarty_tpl->tpl_vars['phone'];
?>
                                <div class="footer__contact_item">
                                    <a class="d-flex align-items-start phone" href="tel:<?php echo preg_replace('~[^0-9]~','',$_smarty_tpl->tpl_vars['phone']->value);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"phone_icon"), 0, true);
?>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['phone'] = $__foreach_phone_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_email) {?>
                            <div class="footer__contact_item">
                                <a class="d-flex align-items-start email " href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"email_icon"), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_working_hours) {?>
                            <div class="footer__contact_item">
                                <span class="d-flex align-items-start open_hours">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"time_icon"), 0, true);
?>
                                    <?php echo $_smarty_tpl->tpl_vars['settings']->value->site_working_hours;?>

                                </span>
                            </div>
                        <?php }?>
                        <div class="footer__contact_item">
                            <a class="fn_callback callback d-inline-flex align-items-center" href="#fn_callback" data-language="index_back_call">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"support_icon"), 0, true);
?>
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span>
                            </a>
                        </div>
                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_about_store"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_about_store;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="footer__content footer__menu footer__hidden">
                        <?php echo $_smarty_tpl->tpl_vars['menu_footer']->value;?>

                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="fn_view_content footer__content footer__menu footer__hidden">
                        <?php $_smarty_tpl->_assignInScope('c_count', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('c_count', $_smarty_tpl->tpl_vars['c_count']->value+1);?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                                <div class="footer__menu_item <?php if ($_smarty_tpl->tpl_vars['c_count']->value > 5) {?>closed<?php } else { ?>opened<?php }?>">
                                    <a class="footer__menu_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['c_count']->value > 5) {?>
                            <a class="fn_view_all footer__view_all" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php }?>
                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title footer__title d-flex align-items-center justify-content-between">
                        <span data-language="subscribe_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_heading;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div id="subscribe_container" class="footer__content footer__hidden">
                        <div class="subscribe__title">
                            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
                        </div>
                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <div class="d-flex align-items-center subscribe_form__group">
                                <div class="form__group form__group--subscribe">
                                    <input type="hidden" name="subscribe" value="1"/>
                                    <input class="form__input form__input_subscribe" aria-label="subscribe" type="email" name="subscribe_email" value="" data-format="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>
                                </div>
                                <button class="form__button form__button--subscribe" type="submit"><span data-language="subscribe_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
</span></button>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['subscribe_error']->value)) {?>
                                <div id="subscribe_error" class="popup">
                                    <div class="popup__heading">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                                        <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value == 'email_exist') {?>
                                            <span data-language="subscribe_already"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_already;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value == 'empty_email') {?>
                                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['subscribe_success']->value)) {?>
                                <div id="fn_subscribe_sent" class="popup">
                                    <div class="popup__heading">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                                        <span data-language="subscribe_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_sent;?>
</span>
                                    </div>

                                </div>
                            <?php }?>
                        </form>
                    </div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_social_links) {?>
                        <div class="footer__title d-flex align-items-center justify-content-between">
                            <span data-language="index_in_networks"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
                            <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                        </div>
                        <div class="footer__content footer__social social footer__hidden">
                                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['social_aliases']) ? $_smarty_tpl->tpl_vars['social_aliases']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['ok'] = 'odnoklassniki';
$_smarty_tpl->_assignInScope('social_aliases', $_tmp_array);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_social_links, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('social_domain', preg_replace('~(https?://)?(www\.)?([^\.]+)?\..*~','$3',$_smarty_tpl->tpl_vars['social_link']->value));?>
                            <?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value]) || $_smarty_tpl->tpl_vars['social_domain']->value) {?>
                            <a class="social__link <?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value])) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>" rel="noreferrer" aria-label="<?php echo $_smarty_tpl->tpl_vars['social_domain']->value;?>
" href="<?php if (!preg_match('~^https?://.*$~',$_smarty_tpl->tpl_vars['social_link']->value)) {?>https://<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['social_domain']->value;?>
">
                                <i class="fa fa-<?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value])) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>"></i>
                            </a>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="container">
                <div class="f_row flex-column flex-md-row justify-content-center justify-content-md-between align-items-center">
                                        <div class="f_col-md footer__payments payments">
                        <ul class="payments__list d-flex justify-content-md-end align-items-center">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
?>
                                <?php if (!$_smarty_tpl->tpl_vars['payment_method']->value->image) {
continue 1;
}?>
                                <li class="d-flex justify-content-center align-items-center payments__item" title="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
">
                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
" />
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                                        <div class="f_col-md flex-md-first copyright">
                        <span>© <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
                        <a href="https://okay-cms.com" rel="noreferrer" target="_blank">
                        <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value === true || $_smarty_tpl->tpl_vars['is_tablet']->value === true) {?>
    <div class="fn_mobile_menu hidden">
        <?php $_smarty_tpl->_subTemplateRender("file:mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:callback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_bottom:scripts');<?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' || $_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0], array( array('file'=>"jssocials.min.js",'dir'=>'js_libraries/js_socials/js','defer'=>true),$_smarty_tpl ) );?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['ok_footer']->value;?>


    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' || $_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['css'][0], array( array('file'=>'jssocials.css','dir'=>'js_libraries/js_socials/css'),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme) {?>
            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->social_share_theme, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable6=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['css'][0], array( array('file'=>"jssocials-theme-".$_prefixVariable6.".css",'dir'=>'js_libraries/js_socials/css'),$_smarty_tpl ) );?>

        <?php }?>
    <?php }?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_bottom:scripts');<?php echo '</script'; ?>
>

    <?php if (!empty($_smarty_tpl->tpl_vars['counters']->value['body_bottom'])) {?>
        <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_bottom:counters');<?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value['body_bottom'], 'counter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_bottom:counters');<?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'UserController') {?>
        <?php echo '<script'; ?>
 src="//ulogin.ru/js/ulogin.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:page');<?php echo '</script'; ?>
>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_after_footer_content"),$_smarty_tpl ) );?>

    </div>
</body>
</html>
<?php }
}
