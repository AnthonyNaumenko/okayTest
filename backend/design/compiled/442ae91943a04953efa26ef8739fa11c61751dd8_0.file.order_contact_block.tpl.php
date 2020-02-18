<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-14 23:53:04
  from '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/NovaposhtaCost/Backend/design/html/order_contact_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1e3840ce7c78_61793428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442ae91943a04953efa26ef8739fa11c61751dd8' => 
    array (
      0 => '/home/anthony/Workspace/OkayCMS/Okay/Modules/OkayCMS/NovaposhtaCost/Backend/design/html/order_contact_block.tpl',
      1 => 1579022994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1e3840ce7c78_61793428 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fn_delivery_novaposhta"<?php if ($_smarty_tpl->tpl_vars['delivery']->value->module_id != $_smarty_tpl->tpl_vars['novaposhta_module_id']->value) {?> style="display: none;"<?php }?>>
    <input name="novaposhta_city_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->city_id, ENT_QUOTES, 'UTF-8', true);?>
" />
    <input name="novaposhta_warehouse_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->warehouse_id, ENT_QUOTES, 'UTF-8', true);?>
" />
    <input name="novaposhta_delivery_term" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term, ENT_QUOTES, 'UTF-8', true);?>
" />
    
    <div class="mb-1">
        <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_city;?>
</div>
        <select name="novaposhta_city" tabindex="1" class="selectpicker city_novaposhta" data-live-search="true"></select>
    </div>
    <div class="mb-1">
        <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_warehouse;?>
</div>
        <select name="novaposhta_warehouse" tabindex="1" class="selectpicker warehouses_novaposhta"></select>
    </div>
    <div class="mb-1">
        <div class="heading_label">
            <input type="checkbox" id="novaposhta_redelivery" name="novaposhta_redelivery" value="1" <?php if ($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->redelivery) {?>checked<?php }?>/>
            <label for="novaposhta_redelivery"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_redelivery;?>
</label>
        </div>
        
    </div>
    <div class="mb-1">
        <div class="heading_label">
            <span class="fn_np_term"<?php if (!$_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term) {?> style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_term;?>
: <span><?php echo $_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term;?>
</span></span>
            <a href="#" class="fn_np_recalc_price"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_calc;?>
</a>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
>

    toastr.options = {
        closeButton: true,
        newestOnTop: true,
        progressBar: true,
        positionClass: 'toast-top-right',
        preventDuplicates: false,
        onclick: null
    };
    
    $('.fn_np_recalc_price').on('click', function(e) {
        e.preventDefault();
        let selected_city = $('input[name="novaposhta_city_id"]').val();
        let warehouse_ref = $('input[name="novaposhta_warehouse_id"]').val();
        let delivery_id = $('select[name="delivery_id"]').children(':selected').val();
        let redelivery = $('input[name="novaposhta_redelivery"]').is(':checked') ? 1 : 0;
        $.ajax({
            url: okay.router['OkayCMS_NovaposhtaCost_calc'],
            data: {
                city: selected_city,
                redelivery: redelivery,
                warehouse: warehouse_ref,
                delivery_id: delivery_id,
                currency: '<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
',
                order_id: '<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
'
            },
            dataType: 'json',
            success: function(data) {
                
                if (data.price_response.success) {
                    toastr.success('', "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->toastr_success, ENT_QUOTES, 'UTF-8', true);?>
");
                    $('input[name="delivery_price"]').val(data.price_response.price);
                }

                if (data.term_response.success) {
                    $('input[name="novaposhta_delivery_term"]').val(data.term_response.term);
                    $('.fn_np_term').show().children('span').text(data.term_response.term);
                } else {
                    $('.fn_np_term').parent().hide();
                }
            }
        });
    });
    
    $('select[name="delivery_id"]').on('change', function () {
        if ($(this).children(':selected').data('module_id') == '<?php echo $_smarty_tpl->tpl_vars['novaposhta_module_id']->value;?>
') {
            $('.fn_delivery_novaposhta').show();
        } else {
            $('.fn_delivery_novaposhta').hide();
        }
    });
    
    $('select.warehouses_novaposhta').html('').hide();
    let city = $("select.city_novaposhta");
    let selected_city = $('input[name="novaposhta_city_id"]').val();
    let selected_warehouse = $('input[name="novaposhta_warehouse_id"]').val();
    $.ajax({
        url: okay.router['OkayCMS_NovaposhtaCost_get_cities'],
        data: {selected_city: selected_city},
        dataType: 'json',
        success: function(data) {
            if(data.cities_response.success == 1){
                city.html(data.cities_response.cities);
                city.selectpicker('refresh');
                if (selected_warehouse) {
                    $('select.city_novaposhta').trigger('change');
                }
            }
        }
    });

    $('select.city_novaposhta').on('change', function() {
        let city_novaposhta = $(this).children(':selected').data('city_ref');
        let selected_warehouse = $('input[name="novaposhta_warehouse_id"]').val();
        if(city_novaposhta != '') {
            $('input[name="novaposhta_city_id"]').val(city_novaposhta);
            $.ajax({
                url: okay.router['OkayCMS_NovaposhtaCost_get_warehouses'],
                data: {city: city_novaposhta, warehouse: selected_warehouse},
                dataType: 'json',
                success: function(data) {
                    if (data.warehouses_response.success) {
                        $('select.warehouses_novaposhta').html(data.warehouses_response.warehouses).show();
                        $('select.warehouses_novaposhta').selectpicker('refresh');
                    } else {
                        $('select.warehouses_novaposhta').html('').hide();
                    }
                }
            });
        }
    });

    $('select.warehouses_novaposhta').on('change', function() {
        if($(this).val() != ''){
            let city_name = $('select.city_novaposhta').children(':selected').val(),
                warehouse_name = $(this).val(),
                delivery_address = city_name + ', ' + warehouse_name;
            $('textarea[name="address"]').text(delivery_address);
            $('input[name="novaposhta_warehouse_id"]').val($(this).children(':selected').data('warehouse_ref'));
            let new_href = 'https://www.google.com/maps/search/'+ delivery_address +'?hl=ru';
            $("a#google_map").attr("href", new_href);
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
