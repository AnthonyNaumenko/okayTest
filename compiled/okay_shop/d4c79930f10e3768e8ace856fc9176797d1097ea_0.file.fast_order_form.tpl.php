<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff423019_23257859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4c79930f10e3768e8ace856fc9176797d1097ea' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_form.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e00ff423019_23257859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hidden">
    <form id="fn_fast_order" class="form form--boxed popup fn_validate_fast_order" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"OkayCMS.FastOrder.CreateOrder",'absolute'=>1),$_smarty_tpl ) );?>
">
                <div class="form__header">
            <div class="form__title">
                <span data-language="fast_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
</span>
            </div>
        </div>

        <div class="form__body">
            <input id="fast_order_variant_id" value="" name="variant_id" type="hidden"/>
            <input value="" name="amount" type="hidden"/>
            <input type="hidden" name="IsFastOrder" value="true">

            <h6 id="fast_order_product_name"></h6>

            <div class="form__group">
                <input class="fn_validate_fast_name form__input form__placeholder--focus" type="text" name="name" value="" />
                <span class="form__placeholder" data-language="form_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                            </div>

            <div class="form__group">
                <input  class="fn_validate_fast_phone form__input form__placeholder--focus" type="text" name="phone" value="" />
                <span class="form__placeholder" data-language="form_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*</span>
                            </div>
         </div>

        <div class="form__footer">
            <input class="form__button button--blick fn_fast_order_submit" type="submit" name="checkout" data-language="callback_order" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
"/>
        </div>
     </form>
</div><?php }
}
