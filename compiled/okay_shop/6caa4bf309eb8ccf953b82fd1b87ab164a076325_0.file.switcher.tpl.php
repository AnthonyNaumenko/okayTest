<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff378180_81576841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6caa4bf309eb8ccf953b82fd1b87ab164a076325' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/switcher.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff378180_81576841 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<?php $_smarty_tpl->_assignInScope('cnt', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'ln');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
			<?php $_smarty_tpl->_assignInScope('cnt', $_smarty_tpl->tpl_vars['cnt']->value+1);?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if ($_smarty_tpl->tpl_vars['cnt']->value > 1) {?>
		<div class="switcher__item d-flex align-items-center switcher__language">
			<div class="switcher__visible d-flex align-items-center">
				<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['language']->value->label).".png")) {?>
					<img alt="<?php echo $_smarty_tpl->tpl_vars['language']->value->current_name;?>
" width="20px" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['language']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
				<?php }?>
				<span class="switcher__name hidden-xs-up"><?php echo $_smarty_tpl->tpl_vars['language']->value->name;?>
</span>
				<span class="switcher__name"><?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
</span>
			</div>
			<div class="switcher__hidden">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
						<a class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['language']->value->id == $_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
							<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['l']->value->label).".png")) {?>
								<img alt="<?php echo $_smarty_tpl->tpl_vars['l']->value->current_name;?>
" width="20px" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['l']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
							<?php }?>
							<span class="switcher__name"><?php echo $_smarty_tpl->tpl_vars['l']->value->name;?>
</span>
							<span class="switcher__name hidden-xl-up"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</span>
						</a>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }
}?>

<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<div class="switcher__item d-flex align-items-center switcher__currencies">
		<div class="switcher__visible">
			<span class="switcher__name hidden-lg-down"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
</span>
			<span class="switcher__name hidden-xl-up"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
		</div>
		<div class="switcher__hidden">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
					<form method="POST">
						<button type="submit" name="prg_seo_hide" class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['currency']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
">
							<span class="switcher__name hidden-lg-down"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</span>
							<span class="switcher__name hidden-xl-up"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</span>
						</button>
					</form>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }
}
}
