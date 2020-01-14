<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/wishlist_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff380838_92342916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd72ad6ac1b7909220d9255a87a058d72634c2f4' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/wishlist_informer.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff380838_92342916 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['wishlist']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"wishlist"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
                <span class="wishlist_counter"><?php echo count($_smarty_tpl->tpl_vars['wishlist']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <span class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
            </span>
<?php }
}
}
