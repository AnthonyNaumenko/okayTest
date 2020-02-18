<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-16 00:22:11
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/settings_counter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1f909327e255_71744254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d820a5c3d35b67d809ffb3b46243cace450848' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/settings_counter.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 6,
  ),
),false)) {
function content_5e1f909327e255_71744254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->counters_title ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_title, ENT_QUOTES, 'UTF-8', true);?>

            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_counters_title, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
            </i>
        </div>
    </div>
    <div class="col-lg-5 col-md-5 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_counter_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">

                <div class="toggle_body_wrap on fn_card">

                    <div class="boxed boxed_attention">
                        <div class="text_box mt-0">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_info, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                    </div>

                    <div class="fn_counters_list">
                        <?php if ($_smarty_tpl->tpl_vars['counters']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                <div class="boxed fn_row">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="mb-1">
                                                        <input name="counters[name][]" class="form-control mb-h" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_position, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="mb-1">
                                                        <select name="counters[position][]" class="selectpicker">
                                                            <option value="head"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'head') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_head, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                            <option value="body_top"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'body_top') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_body_top, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                            <option value="body_bottom"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'body_bottom') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_body_bottom, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_code, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="mb-1">
                                                        <textarea name="counters[code][]" class="form-control okay_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_counter_item",'vars'=>array('c'=>$_smarty_tpl->tpl_vars['c']->value)),$_smarty_tpl ) );?>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 ">
                                            <button type="button" class="btn btn_mini btn-danger float-md-right fn_delete_counter">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </div>

                    <div class="fn_new_counter boxed hidden fn_row">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <div class="mb-1">
                                            <input name="counters[name][]" class="form-control mb-h" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_position, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <div class="mb-1">
                                            <select name="counters[position][]" class="selectpicker">
                                                <option value="head"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'head') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_head, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <option value="body_top"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'body_top') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_body_top, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <option value="body_bottom"<?php if ($_smarty_tpl->tpl_vars['c']->value->position == 'body_bottom') {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_position_body_bottom, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_counter_code, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <div class="mb-1">
                                            <textarea name="counters[code][]" class="form-control okay_textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 ">
                                <button type="button" class="btn btn_mini btn-danger float-md-right fn_delete_counter">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="button" class="btn btn_small btn-info mt-h fn_add_counter">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->counters_add_counter, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                            <button type="submit" class="btn btn_small btn_blue mt-h float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>


<?php echo '<script'; ?>
>

    $(document).on( "click", ".fn_delete_counter", function() {
        $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
        return false;
    });

    $(window).on("load", function() {
        var counter = $(".fn_new_counter").clone(false);
        $(".fn_new_counter").remove();
        counter.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
        $(document).on("click", ".fn_add_counter", function () {
            var counter_clone = counter.clone(true);
            counter_clone.find("select").selectpicker();
            counter_clone.removeClass("hidden").removeClass("fn_new_counter");
            $(".fn_counters_list").append(counter_clone);
            return false;
        });
    });

<?php echo '</script'; ?>
>

<?php }
}
