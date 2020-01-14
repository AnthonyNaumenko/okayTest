<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:19
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/post_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e00ff1bf7b0_25532068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e36c715329ac30f89ce2399467446642f490de' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/post_list.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_5e1e00ff1bf7b0_25532068 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="article__preview">
    <div class="article__body">
        <div class="article__image">
            <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == 'blog') {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_item','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('url', $_prefixVariable3);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->type_post == 'news') {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news_item','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('url', $_prefixVariable4);?>
            <?php }?>
            <a class="" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                    <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,420,220,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                <?php } else { ?>
                    <div class="article__no_image d-flex align-items-start">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, false);
?>
                    </div>
                <?php }?>
            </a>
        </div>

        <a class="article__title theme_link--color" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>

        <?php if ($_smarty_tpl->tpl_vars['post']->value->annotation) {?>
            <div class="article__annotation"><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</div>
        <?php }?>
    </div>
    <div class="article__footer d-flex justify-content-between align-items-center">
        <a class="article__button" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-language="main_article_read">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_article_read;?>
 <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
        </a>
        <div class="article__date"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date,"d cFR Y, cD" ));?>
</div>
    </div>
</div><?php }
}
