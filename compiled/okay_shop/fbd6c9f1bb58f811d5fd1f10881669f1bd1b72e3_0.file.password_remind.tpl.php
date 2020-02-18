<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-15 22:19:23
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/password_remind.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1f73cbb0ec49_93331258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd6c9f1bb58f811d5fd1f10881669f1bd1b72e3' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/password_remind.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1f73cbb0ec49_93331258 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"password_remind",'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->password_remind_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading"><span data-language="password_remind_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_header;?>
</span></h1>
    </div>

    <div class="block block--boxed block--border">
        <?php if ($_smarty_tpl->tpl_vars['email_sent']->value) {?>
            <div>
                <span data-language="password_remind_on"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_on;?>
</span> <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
</b> <span data-language="password_remind_letter_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_letter_sent;?>
.</span>
            </div>
        <?php } else { ?>
        <div class="f_row flex-lg-row align-items-md-start">

        </div>
            <div class="form_wrap f_col-lg-6">
                <form method="post" class="form form--boxed">
                    <div class="form__header">
                        <div class="form__title">
                            <span class="label_block" data-language="password_remind_enter_your_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_enter_your_email;?>
</span>
                        </div>
                    </div>
                    <div class="form__body">
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                            <div class="message_error">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'user_not_found') {?>
                                    <span data-language="password_remind_user_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_user_not_found;?>
</span>
                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

                                <?php }?>
                            </div>
                        <?php }?>
                        <div class="form__group">
                            <input id="password_remind" class="form__input form__placeholder--focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" required>
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                        </div>
                    </div>
                    <div class="form__footer">
                                                <button type="submit" class="form__button button--blick" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_remember;?>
">
                            <span data-language="password_remind_remember"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_remember;?>
</span>
                        </button>
                    </div>
                </form>
            </div>
        <?php }?>
    </div>
</div><?php }
}
