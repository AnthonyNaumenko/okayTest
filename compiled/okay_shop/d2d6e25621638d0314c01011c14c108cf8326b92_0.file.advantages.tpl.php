<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:46
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/advantages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e011a362801_35136249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d6e25621638d0314c01011c14c108cf8326b92' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/advantages.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e011a362801_35136249 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block block--boxed block--border section_advantages">
    <div class="advantages f_row no_gutters">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advantages']->value, 'advantage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['advantage']->value) {
?>
        <div class="advantages__item f_col-6 f_col-md-3">
            <div class="advantages__preview d-flex align-items-center">
                <div class="advantages__icon advantages__icon--delivery d-flex align-items-center justify-content-center">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['advantage']->value->filename,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_advantages_dir ));?>
">
                </div>
                <div class="advantages__title" data-language="advantage_1"><?php echo $_smarty_tpl->tpl_vars['advantage']->value->text;?>
</div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
