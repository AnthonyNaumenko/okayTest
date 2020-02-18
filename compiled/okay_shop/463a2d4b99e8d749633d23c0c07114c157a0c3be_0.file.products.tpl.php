<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:00
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e371082f320_37600627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '463a2d4b99e8d749633d23c0c07114c157a0c3be' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
    'file:selected_features.tpl' => 1,
    'file:features.tpl' => 1,
    'file:browsed_products.tpl' => 1,
    'file:products_sort.tpl' => 1,
    'file:products_content.tpl' => 1,
    'file:chpu_pagination.tpl' => 1,
  ),
),false)) {
function content_5e1e371082f320_37600627 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['set_canonical']->value || $_smarty_tpl->tpl_vars['current_page_num']->value > 1 || $_smarty_tpl->tpl_vars['is_all_pages']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['category']->value->url,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brand','url'=>$_smarty_tpl->tpl_vars['brand']->value->url,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable2 ,false ,32);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['route_name']->value == 'discounted') {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'discounted','absolute'=>1),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable3 ,false ,32);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['route_name']->value == 'bestsellers') {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'bestsellers','absolute'=>1),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable4 ,false ,32);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['route_name']->value == 'search') {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'search','absolute'=>1),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable5 ,false ,32);?>
    <?php }
}?>
<div class="clearfix">
        <div class="fn_mobile_toogle sidebar d-lg-flex flex-lg-column">
        <div class="fn_mobile_toogle sidebar__header sidebar__boxed hidden-lg-up">
            <div class="fn_switch_mobile_filter sidebar__header--close">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, false);
?>
                <span data-language="mobile_filter_close"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_close;?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"reset_icon"), 0, true);
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_reset;?>
</span>
                        </button>
                    </form>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"reset_icon"), 0, true);
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_reset;?>
</span>
                        </button>
                    </form>
                </div>
            <?php }?>
        </div>

        <div class="fn_selected_features">
            <?php $_smarty_tpl->_subTemplateRender('file:selected_features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="fn_features">
            <?php $_smarty_tpl->_subTemplateRender('file:features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

                <div class="browsed products">
            <?php $_smarty_tpl->_subTemplateRender('file:browsed_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

    <div class="products_container d-flex flex-column">
        <div class="products_container__boxed">
            <h1 class="h1"<?php if ($_smarty_tpl->tpl_vars['category']->value) {?> data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"<?php }
if ($_smarty_tpl->tpl_vars['brand']->value) {?> data-brand="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>

            <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 1 && (!empty($_smarty_tpl->tpl_vars['category']->value->annotation) || !empty($_smarty_tpl->tpl_vars['brand']->value->annotation)) && !$_smarty_tpl->tpl_vars['is_filter_page']->value && !$_GET['page'] && !$_GET['sort']) {?>
                <div class="boxed boxed--big">
                    <div class="">
                        <div class="fn_readmore">
                            <div class="block__description">
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['category']->value->annotation)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['category']->value->annotation;?>

                                <?php }?>

                                                                <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value->annotation)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['brand']->value->annotation;?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <div class="products_container__sort d-flex align-items-center justify-content-between">
                                        <div class="fn_products_sort">
                        <?php $_smarty_tpl->_subTemplateRender("file:products_sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                                        <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"filter_icon"), 0, true);
?>
                        <span data-language="filters"><?php echo $_smarty_tpl->tpl_vars['lang']->value->filters;?>
</span>
                    </div>
                </div>
            <?php }?>

                        <div id="fn_products_content" class="fn_categories products_list row">
                <?php $_smarty_tpl->_subTemplateRender("file:products_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                                <div class="fn_pagination products_pagination">
                    <?php $_smarty_tpl->_subTemplateRender('file:chpu_pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <div class="boxed boxed--big">
                    <div class="">
                        <div class="fn_readmore">
                            <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
