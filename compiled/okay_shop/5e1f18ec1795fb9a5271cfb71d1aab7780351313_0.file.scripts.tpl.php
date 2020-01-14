<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 19:57:20
  from '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e01002fb479_06240944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1f18ec1795fb9a5271cfb71d1aab7780351313' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/design/okay_shop/html/scripts.tpl',
      1 => 1579022995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e01002fb479_06240944 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['dynamic_js']['js_vars'], 'value', false, 'var');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        okay.<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
 = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    okay.max_order_amount = <?php echo $_smarty_tpl->tpl_vars['settings']->value->max_order_amount;?>
;

    /*Сброс фильтра*/
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductsController' || $_smarty_tpl->tpl_vars['controller']->value == 'BrandController' || $_smarty_tpl->tpl_vars['controller']->value == 'CategoryController') {?>
        $(document).on('click', '.fn_filter_reset', function () {
            var date = new Date(0);
            document.cookie = "price_filter=; path=/; expires=" + date.toUTCString();
        });
    <?php }?>

    /* Mobile menu */
    $(function(){
        var $main_nav = $('.fn_mobile_menu');
        var $toggle = $('.fn_menu_switch');
        var defaultData = {
            maxWidth: false,
            navClass: 'mobile_nav',
            customToggle: $toggle,
            levelTitles: true,
            insertClose: -1,
            labelBack: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_prev, ENT_QUOTES, 'UTF-8', true);?>
',
            labelClose: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_close, ENT_QUOTES, 'UTF-8', true);?>
',
            closeLevels: false
        };
        $main_nav.hcOffcanvasNav(defaultData);
    });

    /* Показать все в фильтрах по свойствам и в футере категории */
    $( document ).on( 'click', '.fn_view_all', function(e) {
        $(this).closest('.fn_view_content').toggleClass('opened');
        $('.fn_view_all').not($(this)).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        $('.fn_view_all').not($(this)).closest('.fn_view_content').removeClass('opened');
        if ($(this).closest('.fn_view_content').hasClass('opened')) {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_hide, ENT_QUOTES, 'UTF-8', true);?>
');
        } else {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        }
        return false;
    });

    /* Предзаказ */
    okay.is_preorder = <?php echo $_smarty_tpl->tpl_vars['settings']->value->is_preorder;?>
;

    /* Ошибка при отправке комментария в посте */
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'BlogController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        /* Переход по якорю к форме */
        $( window ).on( 'load', function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value) {?>
        $(function() {
            $.fancybox.open({
                src: '#fn_callback',
                type : 'inline'
            });
        });
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        $( window ).on( 'load', function() {
            $( '.tab_navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
        } );
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController') {?>
        $( window ).on( 'load', function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tab_navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_subscribe_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
        $( window ).on( 'load', function() {
            location.href = location.href + '#subscribe_error';
            $.fancybox.open( {
                src: '#subscribe_error',
                type : 'inline',
            } );
        } );
    <?php }?>

    var form_enter_name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_name, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_phone = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_phone, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_error_captcha = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_error_captcha, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_email = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_email, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_password = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_password, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_message = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_message, ENT_QUOTES, 'UTF-8', true);?>
";

    if($(".fn_validate_product").length>0) {
        $(".fn_validate_product").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }
    if($(".fn_validate_callback").length>0) {
        $(".fn_validate_callback").validate({
            rules: {
                name: "required",
                phone: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                phone: form_enter_phone,
                captcha_code: form_error_captcha
            }

        });
    }
    if($(".fn_validate_subscribe").length>0) {
        $(".fn_validate_subscribe").validate({
            rules: {
                subscribe_email: "required",
            },
            messages: {
                subscribe_email: form_enter_email
            }
        });
    }
    if($(".fn_validate_post").length>0) {
        $(".fn_validate_post").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_feedback").length>0) {
        $(".fn_validate_feedback").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                message: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                message: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_cart").length>0) {
        $(".fn_validate_cart").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha
            }
        });
		
		var submitted_cart = false;
        $('.fn_validate_cart').on('submit', function () {
            if ($('.fn_validate_cart').valid() === true) {
                if (submitted_cart === true) {
                    return false;
                } else {
                    submitted_cart = true;
                }
            }
        });
    }

    if($(".fn_validate_login").length>0) {
        $(".fn_validate_login").validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: form_enter_email,
                password: form_enter_password
            }
        });
    }

    if($(".fn_validate_register").length>0) {
        $(".fn_validate_register").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha,
                password: form_enter_password
            }
        });
    }

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->sj_shares) {?>
         if($(".fn_share").length>0) {
        <?php if ($_smarty_tpl->tpl_vars['js_custom_socials']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_custom_socials']->value, 'params', false, 'social');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social']->value => $_smarty_tpl->tpl_vars['params']->value) {
?>
        jsSocials.shares.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php echo json_encode($_smarty_tpl->tpl_vars['params']->value);?>
;
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
                $(".fn_share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value->sj_shares);?>

            });
        }
    <?php }?>

    /* Звёздный рейтинг товаров */
    if($(".product__rating").length>0) {
        $(function() {
            $('.product__rating').rater({ postHref: okay.router['ajax_product_rating'] });
        });
        $.fn.rater = function (options) {
            var opts = $.extend({}, $.fn.rater.defaults, options);
            return this.each(function () {
                var $this = $(this);
                var $on = $this.find('.rating_starOn');
                var $off = $this.find('.rating_starOff');
                opts.size = $on.height();
                if (opts.rating == undefined) opts.rating = $on.width() / opts.size;

                $off.mousemove(function (e) {
                    var left = e.clientX - $off.offset().left;
                    var width = $off.width() - ($off.width() - left);
                    width = Math.ceil(width / (opts.size / opts.step)) * opts.size / opts.step;
                    $on.width(width);
                }).hover(function (e) { $on.addClass('rating_starHover'); }, function (e) {
                    $on.removeClass('rating_starHover'); $on.width(opts.rating * opts.size);
                }).click(function (e) {
                    var r = Math.round($on.width() / $off.width() * (opts.units * opts.step)) / opts.step;
                    $off.unbind('click').unbind('mousemove').unbind('mouseenter').unbind('mouseleave');
                    $off.css('cursor', 'default'); $on.css('cursor', 'default');
                    opts.id = $this.attr('id');
                    $.fn.rater.rate($this, opts, r);
                }).css('cursor', 'pointer'); $on.css('cursor', 'pointer');
            });
        };

        $.fn.rater.defaults = {
            postHref: location.href,
            units: 5,
            step: 1
        };

        $.fn.rater.rate = function ($this, opts, rating) {
            var $on = $this.find('.rating_starOn');
            var $off = $this.find('.rating_starOff');
            $off.fadeTo(600, 0.4, function () {
                $.ajax({
                    url: opts.postHref,
                    type: "POST",
                    data: 'id=' + opts.id + '&rating=' + rating,
                    complete: function (req) {
                        if (req.status == 200) { /* success */
                            opts.rating = parseFloat(req.responseText);

                            if (opts.rating > 0) {
                                opts.rating = parseFloat(req.responseText);
                                $off.fadeTo(200, 0.1, function () {
                                    $on.removeClass('rating_starHover').width(opts.rating * opts.size);
                                    var $count = $this.find('.rating_count');
                                    $count.text(parseInt($count.text()) + 1);
                                    $this.find('.rating_value').text(opts.rating.toFixed(1));
                                    $off.fadeTo(200, 1);
                                });
                            }
                            else
                            if (opts.rating == -1) {
                                $off.fadeTo(200, 0.6, function () {
                                    $this.find('.rating_text').text('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->rating_error, ENT_QUOTES, 'UTF-8', true);?>
');
                                });
                            }
                            else {
                                $off.fadeTo(200, 0.6, function () {
                                    $this.find('.rating_text').text('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->rating_voted, ENT_QUOTES, 'UTF-8', true);?>
');
                                });
                            }
                        } else { /* failure */
                            alert(req.responseText);
                            $on.removeClass('rating_starHover').width(opts.rating * opts.size);
                            $this.rater(opts);
                            $off.fadeTo(2200, 1);
                        }
                    }
                });
            });
        };
    }

<?php echo '</script'; ?>
>
<?php }
}
