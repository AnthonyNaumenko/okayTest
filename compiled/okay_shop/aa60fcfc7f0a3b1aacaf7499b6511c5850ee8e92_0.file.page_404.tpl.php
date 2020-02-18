<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:58:26
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e0142df3733_07265254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa60fcfc7f0a3b1aacaf7499b6511c5850ee8e92' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/page_404.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_5e1e0142df3733_07265254 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block">
    <div class="container">
        <div class="not_found">
            <div class="not_found__image">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"404_icon"), 0, false);
?>
            </div>
            <div class="not_found__description">
                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

            </div>
            <div class="not_found__menu">
                <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
