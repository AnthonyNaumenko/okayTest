<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:45
  from '/home/anthony/Workspace/OkayCMS/backend/design/html/email/email_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e373db59896_92786804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88605b143e500ed28ec72cba485fc1e268092c4e' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/backend/design/html/email/email_footer.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e373db59896_92786804 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="es-footer" cellspacing="0" cellpadding="0" align="center">
    <tbody>
    <tr> </tr>
    <tr>
        <td align="center">
            <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr>
                    <td class="es-m-p0r es-p20t es-p10b es-p10r es-p10l" width="100%" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td align="center">
                                    <p>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_details, ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                                        <a target="_blank" href="https://okay-cms.com">okay-cms.com</a>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table><?php }
}
