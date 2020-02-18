<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:00
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/browsed_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e37109fa736_91673915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b29dc013f64dd30806e26b0ff08e523589d705a' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/browsed_products.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_5e1e37109fa736_91673915 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0], array( array('var'=>'browsed_products','limit'=>6),$_smarty_tpl ) );?>


<?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
    <div class="sidebar__boxed browsed">
        <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
            <span data-language="features_browsed"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_browsed;?>
</span>
            <span class="d-flex align-items-center filter__name_arrow icon fa fa-chevron-down"></span>
        </div>

        <div class="browsed__content f_row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['browsed_products']->value, 'browsed_product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->value) {
?>
                <div class="browsed__item f_col-4">
                    <a class="d-flex align-items-center justify-content-center browsed__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['browsed_product']->value->url),$_smarty_tpl ) );?>
">
                        <?php if ($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename) {?>
                            <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,70,70 ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php } else { ?>
                            <div class="browsed__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                            </div>
                        <?php }?>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
