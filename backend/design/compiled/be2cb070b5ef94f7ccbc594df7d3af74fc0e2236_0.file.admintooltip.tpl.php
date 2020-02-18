<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:18
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/admintooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00fed23fa5_64638059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be2cb070b5ef94f7ccbc594df7d3af74fc0e2236' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/admintooltip.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00fed23fa5_64638059 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="backend/design/js/admintooltip/styles/admin.css" type="text/css" rel="stylesheet">

<div class="admTools">
    <a href="javascript:void(0);" class="openTools"></a>
    <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_title_1;?>
</p>
    <p class="tool-descr"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_descr;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="admin_bookmark"></a>
    <p class="tool-title"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_fast_edit;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_enable;?>
" href="javascript:void(0);" class="changeTools"><span></span></a>
</div>

<div class="fn_tooltip tooltip"></div>

<a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="top_admin_bookmark"></a>

<?php echo '<script'; ?>
 src="backend/design/js/admintooltip/admintooltip.js"<?php if ($_smarty_tpl->tpl_vars['scripts_defer']->value == true) {?> defer<?php }?>><?php echo '</script'; ?>
>
<?php }
}
