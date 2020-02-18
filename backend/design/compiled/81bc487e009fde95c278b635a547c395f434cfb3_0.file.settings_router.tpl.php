<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 14:47:51
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/settings_router.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e244ff7e3b2c9_63194024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81bc487e009fde95c278b635a547c395f434cfb3' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/settings_router.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_5e244ff7e3b2c9_63194024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->left_setting_router_title ,false ,32);?>

<div class="row">
    <div class="col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->left_setting_router_title, ENT_QUOTES, 'UTF-8', true);?>

            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_title_chpu, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
            </i>
            </div>
            <div class="boxes_inline">

            </div>
        </div>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_settings, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="permission_block">
                    <div class="permission_boxes">
                        <div class="activity_of_switch activity_of_switch--left">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->global_url_label, ENT_QUOTES, 'UTF-8', true);?>

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_router_statuses, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="global_unique_url" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->global_unique_url) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_switth_checkboxes"),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_270px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_routing, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_type_radio_wrap">
                        <input id="category_routes_default" class="hidden_check" name="category_routes_template" type="radio" value="default" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value->category_routes_template) || $_smarty_tpl->tpl_vars['settings']->value->category_routes_template == 'default') {?> checked="" <?php }?> />
                        <label for="category_routes_default" class="okay_type_radio">
                            <span>
                                <?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/
                                <input name="category_routes_template__default" placeholder="catalog" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->category_routes_template__default) {
echo $_smarty_tpl->tpl_vars['settings']->value->category_routes_template__default;
} else { ?>catalog<?php }?>" />
                                /category
                            </span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="category_routes_no_prefix" class="hidden_check" name="category_routes_template" type="radio" value="no_prefix" <?php if ($_smarty_tpl->tpl_vars['settings']->value->category_routes_template == 'no_prefix') {?> checked="" <?php }?> />
                        <label for="category_routes_no_prefix" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/category</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="category_routes_prefix_and_path" class="hidden_check" name="category_routes_template" type="radio" value="prefix_and_path" <?php if ($_smarty_tpl->tpl_vars['settings']->value->category_routes_template == 'prefix_and_path') {?> checked="" <?php }?> />
                        <label for="category_routes_prefix_and_path" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="category_routes_template__prefix_and_path" placeholder="catalog" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->category_routes_template__prefix_and_path) {
echo $_smarty_tpl->tpl_vars['settings']->value->category_routes_template__prefix_and_path;
} else { ?>catalog<?php }?>" />/category-level-1/.../category</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="category_routes_no_prefix_and_path" class="hidden_check" name="category_routes_template" type="radio" value="no_prefix_and_path" <?php if ($_smarty_tpl->tpl_vars['settings']->value->category_routes_template == 'no_prefix_and_path') {?> checked="" <?php }?> />
                        <label for="category_routes_no_prefix_and_path" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/category-level-1/.../category</span>
                        </label>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_category"),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_270px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_routing, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_type_radio_wrap">
                        <input id="product_routes_default" class="hidden_check" name="product_routes_template" type="radio" value="default" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value->product_routes_template) || $_smarty_tpl->tpl_vars['settings']->value->product_routes_template == 'default') {?> checked="" <?php }?> />
                        <label for="product_routes_default" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="product_routes_template__default" placeholder="products" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template__default) {
echo $_smarty_tpl->tpl_vars['settings']->value->product_routes_template__default;
} else { ?>products<?php }?>" />/product-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="product_routes_prefix_and_all_categories" class="hidden_check" name="product_routes_template" type="radio" value="prefix_and_path" <?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template == 'prefix_and_path') {?> checked="" <?php }?> />
                        <label for="product_routes_prefix_and_all_categories" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="product_routes_template__prefix_and_path" placeholder="catalog" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template__prefix_and_path) {
echo $_smarty_tpl->tpl_vars['settings']->value->product_routes_template__prefix_and_path;
} else { ?>catalog<?php }?>" />/category-level-1/.../category/product-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="product_routes_no_prefix_and_path" class="hidden_check" name="product_routes_template" type="radio" value="no_prefix_and_path" <?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template == 'no_prefix_and_path') {?> checked="" <?php }?> />
                        <label for="product_routes_no_prefix_and_path" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/category-level-1/.../category/product-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="product_routes_no_prefix_and_category" class="hidden_check" name="product_routes_template" type="radio" value="no_prefix_and_category" <?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template == 'no_prefix_and_category') {?> checked="" <?php }?> />
                        <label for="product_routes_no_prefix_and_category" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/category/product-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="product_routes_no_prefix" class="hidden_check" name="product_routes_template" type="radio" value="no_prefix" <?php if ($_smarty_tpl->tpl_vars['settings']->value->product_routes_template == 'no_prefix') {?> checked="" <?php }?> />
                        <label for="product_routes_no_prefix" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/product-name</span>
                        </label>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_product"),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_routing, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_type_radio_wrap">
                        <input id="brand_routes_default" class="hidden_check" name="brand_routes_template" type="radio" value="default" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value->brand_routes_template) || $_smarty_tpl->tpl_vars['settings']->value->brand_routes_template == 'default') {?> checked="" <?php }?> />
                        <label for="brand_routes_default" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="brand_routes_template__default" placeholder="brand" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->brand_routes_template__default) {
echo $_smarty_tpl->tpl_vars['settings']->value->brand_routes_template__default;
} else { ?>brand<?php }?>" />/brand-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="brand_routes_no_prefix" class="hidden_check" name="brand_routes_template" type="radio" value="no_prefix" <?php if ($_smarty_tpl->tpl_vars['settings']->value->brand_routes_template == 'no_prefix') {?> checked="" <?php }?> />
                        <label for="brand_routes_no_prefix" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/brand-name</span>
                        </label>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_brand"),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_routing, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_type_radio_wrap">
                        <input id="blog_item_routes_default" class="hidden_check" name="blog_item_routes_template" type="radio" value="default" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value->blog_item_routes_template) || $_smarty_tpl->tpl_vars['settings']->value->blog_item_routes_template == 'default') {?> checked="" <?php }?> />
                        <label for="blog_item_routes_default" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="blog_item_routes_template__default" placeholder="blog" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->blog_item_routes_template__default) {
echo $_smarty_tpl->tpl_vars['settings']->value->blog_item_routes_template__default;
} else { ?>blog<?php }?>" />/post-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="blog_item_routes_no_prefix" class="hidden_check" name="blog_item_routes_template" type="radio" value="no_prefix" <?php if ($_smarty_tpl->tpl_vars['settings']->value->blog_item_routes_template == 'no_prefix') {?> checked="" <?php }?> />
                        <label for="blog_item_routes_no_prefix" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/post-name</span>
                        </label>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_blog"),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->news_routing, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_type_radio_wrap">
                        <input id="news_item_routes_default" class="hidden_check" name="news_item_routes_template" type="radio" value="default" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value->news_item_routes_template) || $_smarty_tpl->tpl_vars['settings']->value->news_item_routes_template == 'default') {?> checked="" <?php }?> />
                        <label for="news_item_routes_default" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<input name="news_item_routes_template__default" placeholder="news" class="form-control prefix-url-input" type="text" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value->news_item_routes_template__default) {
echo $_smarty_tpl->tpl_vars['settings']->value->news_item_routes_template__default;
} else { ?>news<?php }?>" />/news-name</span>
                        </label>
                    </div>

                    <div class="okay_type_radio_wrap">
                        <input id="news_item_routes_no_prefix" class="hidden_check" name="news_item_routes_template" type="radio" value="no_prefix" <?php if ($_smarty_tpl->tpl_vars['settings']->value->news_item_routes_template == 'no_prefix') {?> checked="" <?php }?> />
                        <label for="news_item_routes_no_prefix" class="okay_type_radio">
                            <span><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/news-name</span>
                        </label>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_news"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_router_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="fn_toggle_wrap custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<?php }
}
