<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff027c47_61162490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb07188bd5c7fcca3160978f8afb1e2e1cd4392' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff027c47_61162490 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="fn_fast_order_button fast_order_button fa fa-rocket <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1 && !$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>hidden<?php }?>" href="#fast_order"
   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
" data-language="fast_order" data-name="<?php echo $_smarty_tpl->tpl_vars['fast_order_product_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
</a><?php }
}
