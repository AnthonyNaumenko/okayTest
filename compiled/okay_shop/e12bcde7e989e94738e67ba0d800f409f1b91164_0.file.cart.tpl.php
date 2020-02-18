<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 15:38:12
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e245bc495ed92_59653223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e12bcde7e989e94738e67ba0d800f409f1b91164' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/cart.tpl',
      1 => 1579441007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cart_purchases.tpl' => 1,
    'file:cart_coupon.tpl' => 1,
    'file:svg.tpl' => 1,
    'file:cart_deliveries.tpl' => 1,
  ),
),false)) {
function content_5e245bc495ed92_59653223 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <div class="block">
        <div class="block__header block__header--boxed block__header--border">
            <h1 class="block__heading">
                <span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span>
            </h1>
        </div>

        <div class="block__body">
            <form id="captcha_id" method="post" name="cart" class="fn_validate_cart">

                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
                    <input type="hidden" class="fn_recaptcha_token fn_recaptchav3" name="recaptcha_token" />
                <?php }?>

                <div class="f_row flex-column flex-lg-row" data-sticky-container>
                    <div class="sticky f_col f_col-lg-6 f_col-xl-5">

                                                <div class="fn_cart_sticky block--cart_purchases block--boxed block--border" data-margin-top="75" data-sticky-for="1024" data-sticky-class="is-sticky">
                            <div class="block__inner">
                                <div class="h6" data-language="cart_purchase_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchase_title;?>
</div>

                                <div id="fn_purchases" class="purchase">
                                    <?php $_smarty_tpl->_subTemplateRender('file:cart_purchases.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </div>

                                <div class="purchase_detail">

                                    <div id="fn_cart_coupon">
                                        <?php $_smarty_tpl->_subTemplateRender("file:cart_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </div>

                                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->discount) {?>
                                        <div class="purchase_detail__item">
                                            <div class="purchase_detail__column_name">
                                                <div class="purchase_detail__name" data-language="cart_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
:</div>
                                            </div>
                                            <div class="purchase_detail__column_value">
                                                <div class="purchase_detail__price"><?php echo $_smarty_tpl->tpl_vars['user']->value->discount;?>
%</div>
                                            </div>
                                        </div>
                                    <?php }?>

                                                                        <div class="purchase_detail__item">
                                        <div class="purchase_detail__column_name">
                                            <div class="purchase_detail__name" data-language="cart_order_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_price;?>
:</div>
                                        </div>
                                        <div class="purchase_detail__column_value">
                                            <div id="fn_total_purchases_price" class="purchase_detail__price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->total_price ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        </div>
                                    </div>

                                    <div id="fn_total_delivery_price_block" class="purchase_detail__item">
                                        <div class="purchase_detail__column_name">
                                            <div class="purchase_detail__name" data-language="cart_discount">
                                                <span data-language="cart_delivery_order_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_delivery_order_price;?>
</span>
                                                <span id="fn_total_separate_delivery"<?php if (!$_smarty_tpl->tpl_vars['active_delivery']->value->separate_payment || $_smarty_tpl->tpl_vars['active_delivery']->value->is_free_delivery === true) {?> style="display: none;" <?php }?>> (<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_paid_separate;?>
)</span>:
                                            </div>
                                        </div>
                                        <div class="purchase_detail__column_value">
                                            <div id="fn_total_delivery_price" class="purchase_detail__price"<?php if ($_smarty_tpl->tpl_vars['active_delivery']->value->is_free_delivery === true) {?> style="display: none;"<?php }?>>
                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['active_delivery']->value->price ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                            </div>
                                            <div id="fn_total_free_delivery" class="purchase_detail__price" data-language="cart_free"<?php if ($_smarty_tpl->tpl_vars['active_delivery']->value->is_free_delivery === false) {?> style="display: none;"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_free;?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="purchase_detail__item">
                                        <div class="purchase_detail__column_name">
                                            <div class="purchase_detail__name purchase_detail__name--total" data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</div>
                                        </div>
                                        <div class="purchase_detail__column_value">
                                            <div class="purchase_detail__price purchase_detail__price--total">
                                                                                                <span><span id="fn_cart_total_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['active_delivery']->value->total_price_with_delivery ));?>
</span> <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="sticky f_col f_col-lg-6 f_col-xl-7 flex-lg-first">
                        <div class="fn_cart_sticky block--boxed block--border d-flex justify-content-center" data-margin-top="75" data-sticky-for="1024" data-sticky-class="is-sticky">
                            <div class="block__inner">
                                <div class="h6" data-language="cart_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_title;?>
</div>

                                <div class="block form form_cart form--boxed">
                                    <div class="form__header">
                                                                                <div class="form__title">
                                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, false);
?>
                                            <span data-language="cart_form_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</span>
                                        </div>
                                    </div>

                                    <div class="form__body">
                                                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                            <div class="message_error">
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                                    <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                                    <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                                    <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_phone') {?>
                                                    <span data-language="form_error_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_phone;?>
</span>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                        <div class="f_row">
                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group ">
                                                    <input class="form__input form__placeholder--focus" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-xl-12">
                                                <div class="form__group form__group--last">
                                                    <textarea class="form__textarea form__placeholder--focus" rows="3" name="comment" data-language="cart_order_comment"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_comment;?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                                                <div id="fn_ajax_deliveries">
                                    <?php $_smarty_tpl->_subTemplateRender('file:cart_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </div>
								
                                                         
                                <div id="min_cost">
                                               
                                   <?php $_smarty_tpl->_assignInScope('minCost', 10000);?>
                                   <?php if ($_smarty_tpl->tpl_vars['active_delivery']->value->total_price_with_delivery > $_smarty_tpl->tpl_vars['minCost']->value) {?>                            
                                                            
                                <div class="block form form_cart form--boxed">
                                    <div class="form__footer">
                                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                                <div class="captcha">
                                                    <div id="recaptcha1"></div>
                                                </div>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_cart"),$_smarty_tpl ) );?>

                                                <div class="captcha">
                                                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="form__captcha">
                                                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" />
                                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        <?php }?>
                                        <input type="hidden" name="checkout" value="1">
                                                                                <button class="form__button button--blick g-recaptcha" type="submit" name="checkout" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
">
                                            <span data-language="cart_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_button;?>
</span>
                                        </button>
                                    </div>
                                </div>
                              
                                <?php } else { ?>
                                    <div class="message_error">
                                        <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->min_order_amount;?>
 </span>
                                        <span class="fn_payment_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['minCost']->value ));?>
</span><span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                               		 </div>
                                <?php }?>
                                </div>
                                                                                          
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } else { ?>
    <div class="block">
                <h1 class="h1"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        <p class="block padding" data-language="cart_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</p>
    </div>
<?php }?>
                                                           
                                                           
                                                           
                                                           
                                           
                                                  <?php }
}
