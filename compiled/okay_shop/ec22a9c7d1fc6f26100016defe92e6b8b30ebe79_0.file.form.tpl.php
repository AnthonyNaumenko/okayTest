<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:45
  from '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/YandexMoneyApi/design/html/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e373dd095c7_35733077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec22a9c7d1fc6f26100016defe92e6b8b30ebe79' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/YandexMoneyApi/design/html/form.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e373dd095c7_35733077 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
    .yamoney_kassa_buttons {
        display: flex;
        margin-bottom: 20px;
    }

    .ya_kassa_installments_button_container {
        margin-right: 20px;
    }

    .yamoney-pay-button {
        position: relative;
        height: 60px;
        width: 155px;
        border-radius: 4px;
        font-family: YandexSansTextApp-Regular, Arial, Helvetica, sans-serif;
        text-align: center;
    }

    .yamoney-pay-button button {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 4px;
        transition: 0.1s ease-out 0s;
        color: #000;
        box-sizing: border-box;
        outline: 0;
        border: 0;
        background: #FFDB4D;
        cursor: pointer;
        font-size: 12px;
    }

    .yamoney-pay-button button:hover, .yamoney-pay-button button:active {
        background: #f2c200;
    }

    .yamoney-pay-button button span {
        display: block;
        font-size: 20px;
        line-height: 20px;
    }

    .yamoney-pay-button_type_fly {
        box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.12), 0 5px 10px -3px rgba(0, 0, 0, 0.3);
    }

    .ya_checkout_button {
        cursor: pointer;
    }

    .ya_checkout_button:hover {
        background-color: #abff87;
    }
</style>
<div class="row">
    <form class="col-lg-7" method="POST" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"OkayCMS.YandexMoneyApi.SendPaymentRequest",'absolute'=>1),$_smarty_tpl ) );?>
">
        <input type="hidden" name="payment_submit"/>
        <input type="hidden" name="payment_type" id="pm_yandex_money_payment_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
        <input type="hidden" name="amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
        <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>

        <?php if ($_smarty_tpl->tpl_vars['payment_settings']->value->yandex_api_paymode === 'kassa') {?>
            <div class="yamoney_kassa_buttons">

                <?php if ($_smarty_tpl->tpl_vars['payment_settings']->value->yandex_show_installments_button) {?>
                    <div class="ya_kassa_installments_button_container"></div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['payment_settings']->value->yandex_show_pay_with_yandex_button) {?>
                    <div class="yamoney-pay-button <?php if (!$_smarty_tpl->tpl_vars['payment_settings']->value->yandex_show_installments_button) {?> yamoney-pay-button_type_fly<?php }?>">
                        <button type="submit"><span>Заплатить</span>через Яндекс</button>
                    </div>
                <?php } else { ?>
                    <input type="submit" name="submit-button" value="<?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
" class="btn_order">
                <?php }?>

            </div>
        <?php } else { ?>
            <input type="submit" name="submit-button" value="<?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
" class="btn_order">
        <?php }?>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['payment_settings']->value->yandex_api_paymode === 'kassa' && $_smarty_tpl->tpl_vars['settings_pay']->value->yandex_show_installments_button) {?>

    <?php echo '<script'; ?>
 src="https://static.yandex.net/kassa/pay-in-parts/ui/v1/"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        jQuery(document).ready(function () {
            const yaShopId = <?php echo $_smarty_tpl->tpl_vars['settings_pay']->value['yandex_api_shopid'];?>
 ;
            const yaAmount = <?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
;

            function createCheckoutCreditUI() {
                if (!YandexCheckoutCreditUI) {
                    setTimeout(createCheckoutCreditUI, 200);
                }
                const checkoutCreditUI = YandexCheckoutCreditUI({
                    shopId: yaShopId,
                    sum: yaAmount
                });
                const checkoutCreditButton = checkoutCreditUI({
                    type: 'button',
                    domSelector: '.ya_kassa_installments_button_container'
                });
                checkoutCreditButton.on('click', function () {
                    jQuery('#pm_yandex_money_payment_type').val('installments');
                });
            };
            setTimeout(createCheckoutCreditUI, 200);
        });
    <?php echo '</script'; ?>
>

<?php }
}
}
