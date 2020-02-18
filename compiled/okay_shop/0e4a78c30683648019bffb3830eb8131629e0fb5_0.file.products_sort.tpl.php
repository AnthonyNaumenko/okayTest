<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:48:00
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products_sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e3710a22963_68838533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e4a78c30683648019bffb3830eb8131629e0fb5' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/products_sort.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 3,
  ),
),false)) {
function content_5e1e3710a22963_68838533 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
    <div class="fn_ajax_buttons d-flex flex-wrap align-items-center products_sort">
        <span class="product_sort__title hidden-sm-down" data-language="products_sort_by"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_sort_by;?>
:</span>

        <form class="product_sort__form" method="post">
            <button type="submit" name="prg_seo_hide" class="d-inline-flex align-items-center product_sort__link<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'position') {?> active_up<?php }?> no_after" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'position','page'=>null,'absolute'=>1),$_smarty_tpl ) );?>
">
                <span data-language="products_by_default"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_default;?>
</span>
            </button>
        </form>

        <form class="product_sort__form" method="post">
            <button type="submit" name="prg_seo_hide" class="d-inline-flex align-items-center product_sort__link<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'price') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'price_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'price') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'price_desc','page'=>null,'absolute'=>1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'price','page'=>null,'absolute'=>1),$_smarty_tpl ) );
}?>">
                <span data-language="products_by_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_price;?>
</span>
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sort_icon"), 0, false);
?>
            </button>
        </form>

        <form class="product_sort__form" method="post">
            <button type="submit" name="prg_seo_hide" class="d-inline-flex align-items-center product_sort__link<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'name') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'name_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'name') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'name_desc','page'=>null,'absolute'=>1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'name','page'=>null,'absolute'=>1),$_smarty_tpl ) );
}?>">
                <span data-language="products_by_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_name;?>
</span>
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sort_icon"), 0, true);
?>
            </button>
        </form>

        <form class="product_sort__form" method="post">
            <button type="submit" name="prg_seo_hide" class="d-inline-flex align-items-center product_sort__link <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'rating') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'rating_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'rating') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'rating_desc','page'=>null,'absolute'=>1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('sort'=>'rating','page'=>null,'absolute'=>1),$_smarty_tpl ) );
}?>">
                <span data-language="products_by_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_rating;?>
</span>
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sort_icon"), 0, true);
?>
            </button>
        </form>
    </div>
<?php }
}
}
