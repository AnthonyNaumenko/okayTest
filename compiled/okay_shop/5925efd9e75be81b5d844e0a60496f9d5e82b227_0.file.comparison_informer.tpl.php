<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/comparison_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff387854_45885866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5925efd9e75be81b5d844e0a60496f9d5e82b227' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/comparison_informer.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff387854_45885866 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"comparison"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
                <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
            </div>
<?php }
}
}
