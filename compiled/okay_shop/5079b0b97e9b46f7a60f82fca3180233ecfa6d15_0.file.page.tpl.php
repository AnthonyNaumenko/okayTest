<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:58:26
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e0142debc52_38834183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5079b0b97e9b46f7a60f82fca3180233ecfa6d15' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/page.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_404.tpl' => 1,
  ),
),false)) {
function content_5e1e0142debc52_38834183 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"page",'url'=>$_smarty_tpl->tpl_vars['page']->value->url,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url == '404') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
	<div class="block">
				<div class="block__header block__header--boxed block__header--border">
			<h1 class="block__heading">
				<span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span>
			</h1>
		</div>

				<div class="block block--boxed block--border">
			<div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
		</div>
    </div>
<?php }
}
}
