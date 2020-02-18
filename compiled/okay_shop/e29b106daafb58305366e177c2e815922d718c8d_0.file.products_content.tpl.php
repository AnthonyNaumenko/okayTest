<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:00
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e3710a2b604_40441020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e29b106daafb58305366e177c2e815922d718c8d' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products_content.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_5e1e3710a2b604_40441020 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="product_item col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="col-xs-12">
        <div class="boxed boxed--big boxed--notify ">
            <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
        </div>
    </div>
<?php }
}
}
