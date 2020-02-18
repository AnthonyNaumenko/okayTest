<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-16 00:21:17
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1f905dac5535_78553240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7133736b2388b9779433c62fec8893626ee69b' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/modules.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_5e1f905dac5535_78553240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->modules_list_title ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->modules_list_title, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['modules']->value) {?>
    <form class="fn_form_list" method="post">
        <div class="okay_list products_list fn_sort_list">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                        <div class="okay_list_head">
                <div class="okay_list_boding okay_list_drag"></div>
                <div class="okay_list_heading okay_list_check">
                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                </div>
                <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_module_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_module_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->module_type, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_setting okay_list_products_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->modules_files, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_close"></div>
            </div>

                        <div class="deliveries_wrap okay_list_body sortable">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                <div class="fn_row okay_list_body_item fn_sort_item">
                    <div class="okay_list_row">
                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->position;?>
">

                        <div class="okay_list_boding okay_list_drag move_zone">
                            <?php if ($_smarty_tpl->tpl_vars['module']->value->status !== 'Not Installed') {
$_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
}?>
                        </div>

                        <div class="okay_list_boding okay_list_check">
                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
"/>
                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
"></label>
                        </div>

                        <div class="okay_list_boding okay_list_photo">
                            <?php if ($_smarty_tpl->tpl_vars['module']->value->preview) {?>
                                <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->vendor;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->module_name;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->backend_main_controller;
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable1,$_prefixVariable2,$_prefixVariable3),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->preview;?>
"/>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->preview;?>
"/>
                                <?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->vendor;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->module_name;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->backend_main_controller;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable4,$_prefixVariable5,$_prefixVariable6),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <img height="55" width="55" src="design/images/no_image.png"/>
                                    </a>
                                <?php } else { ?>
                                    <img height="55" width="55" src="design/images/no_image.png"/>
                                <?php }?>
                            <?php }?>
                        </div>

                        <div class="okay_list_boding okay_list_module_name">
                            <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                                <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->vendor;
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->module_name;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['module']->value->backend_main_controller;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable7,$_prefixVariable8,$_prefixVariable9),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                        </div>

                        <div class="okay_list_boding okay_list_module_type"><?php if ($_smarty_tpl->tpl_vars['module']->value->type) {
echo $_smarty_tpl->tpl_vars['module']->value->type;
} else {
echo $_smarty_tpl->tpl_vars['btr']->value->not_used_module_type;
}?></div>

                        <div class="okay_list_boding okay_list_status">
                                                        <?php if ($_smarty_tpl->tpl_vars['module']->value->status === 'Not Installed') {?>
                                <button class="btn" name="install_module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->vendor;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->module_name;?>
"><?php echo $_smarty_tpl->tpl_vars['btr']->value->install_module;?>
</button>
                            <?php } else { ?>
                            <label class="switch switch-default">
                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['module']->value->enabled) {?>fn_active_class<?php }?>" data-controller="module" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['module']->value->enabled) {?>checked=""<?php }?>/>
                                <span class="switch-label"></span>
                                <span class="switch-handle"></span>
                            </label>
                            <?php }?>
                        </div>

                        <div class="okay_list_setting okay_list_products_setting">
                            <a data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->files_list_module, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ModuleDesignAdmin','vendor'=>$_smarty_tpl->tpl_vars['module']->value->vendor,'module_name'=>$_smarty_tpl->tpl_vars['module']->value->module_name),$_smarty_tpl ) );?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_copy'), 0, true);
?>
                            </a>
                        </div>

                        <div class="okay_list_boding okay_list_close">
                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

                        <div class="okay_list_footer fn_action_block">
                <div class="okay_list_foot_left">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_2"></label>
                    </div>
                    <div class="okay_list_option">
                        <select name="action" class="selectpicker">
                            <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn_small btn_blue">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>
    </form>
    <?php } else { ?>
    <div class="heading_box mt-1">
        <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->no_modules, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <?php }?>
</div>
<?php }
}
