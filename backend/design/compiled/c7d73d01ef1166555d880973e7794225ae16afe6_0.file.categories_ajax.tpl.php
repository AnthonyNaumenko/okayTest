<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 04:51:40
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/categories_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e23c43c12d0b4_44079075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d73d01ef1166555d880973e7794225ae16afe6' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/categories_ajax.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
  ),
),false)) {
function content_5e23c43c12d0b4_44079075 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories_ajax']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_ajax']->value, 'ajax_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ajax_category']->value) {
?>
        <div class="fn_row">
            <div class="okay_list_row fn_sort_item">
                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->position;?>
" />

                <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->subcategories) {?>
                    <div class="okay_list_heading okay_list_subicon">
                        <a href="javascript:;" class="fn_ajax_toggle" data-toggle="0" data-category_id="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" >
                            <i class="fa fa-plus-square"></i>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="okay_list_heading okay_list_subicon"></div>
                <?php }?>

                <div class="okay_list_boding okay_list_drag move_zone">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                </div>

                <div class="okay_list_boding okay_list_check">
                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" />
                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
"></label>
                </div>

                <div class="okay_list_boding okay_list_photo hidden-sm-down">
                    <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->image) {?>
                        <a href="index.php?controller=CategoryAdmin&id=<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_category']->value->image,55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="" />
                        </a>
                    <?php } else { ?>
                        <img height="55" width="55" src="design/images/no_image.png"/>
                    <?php }?>
                </div>

                <div class="okay_list_boding okay_list_categories_name">
                    <a href="index.php?controller=CategoryAdmin&id=<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"categories_list_name"),$_smarty_tpl ) );?>

                </div>


                <div class="okay_list_boding okay_list_status">
                                        <div>
                        <label class="switch switch-default">
                            <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->visible) {?>fn_active_class<?php }?>" data-controller="category" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->visible) {?>checked=""<?php }?>/>
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <div class="okay_list_setting">
                                        <a href="../<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['ajax_category']->value->url),$_smarty_tpl ) );?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, true);
?>
                    </a>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"categories_actions"),$_smarty_tpl ) );?>

                </div>
                <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                    </button>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->subcategories) {?>
                <div class="fn_ajax_categories categories_sub_block sortable subcategories_level_2"></div>
            <?php }?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
