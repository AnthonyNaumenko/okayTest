<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff38e171_91923504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '587e21c875722b553f5ff2bf2f67c4959c36cacb' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/cart_informer.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff38e171_91923504 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'cart'),$_smarty_tpl ) );?>
" class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </div>
<?php }
}
}
