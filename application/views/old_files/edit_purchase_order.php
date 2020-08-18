<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $machine_category = $one_info->machine_category;
    $section = $one_info->section;
    $machine_model = $one_info->machine_model;
    $chassis = $one_info->chassis;
    $parts_name = $one_info->parts_name;
    $parts_no = $one_info->parts_no;
    $alternative_parts_no = $one_info->alternative_parts_no;
    $chinese_name = $one_info->chinese_name;
    $unit = $one_info->unit;
    $unit_price = $one_info->unit_price;
    $quantity = $one_info->quantity;
    $payment_type = $one_info->payment_type;
    $reminder_level = $one_info->reminder_level;
    $description = $one_info->description;
    $shelf_details = $one_info->shelf_details;
    $selling_price = $one_info->selling_price;
    $serial = $one_info->serial;
    $paid = $one_info->paid;
    $due = $one_info->due;
    $po_hidden = $one_info->po_no;
    $misc_cost = $one_info->misc_cost;
    $transport_cost = $one_info->transport_cost;
    $custom_cost = $one_info->custom_cost;
    $shiping_cost = $one_info->shiping_cost;
    $shipping_type = $one_info->shipping_type;
    $supplier = $one_info->supplier;     
}
?>
<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 0px; padding-left: 5px; padding-right: 5px;}
</style>
<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable"> 
                <?php echo form_open_multipart('Edit/purchase_order/' . $record_id); ?>
                <div style="color: black;">
                    <div class="box-body" style="margin-bottom: 10px;">
                        <p style="font-size: 20px;">Edit Product Info.</p>
                        <div class="row">
                            <div class="form-group col-sm-2 col-xs-12">
                            <input type="hidden" class="form-control" id="po_hidden" placeholder="" name="po_hidden" value="<?php echo $po_hidden; ?>">
                                <label for="machine_category">Machine Category</label>
                                <select name="machine_category" id="machine_category" class="form-control">
                                    <option value="<?php echo $machine_category; ?>"><?php echo $machine_category; ?></option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>">
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="section">Section</label>
                                <select name="section" id="section" class="form-control">
                                    <option value="<?php echo $section; ?>"><?php echo $section; ?></option>
                                    <option value="">-- Select --</option>
                                    <?php foreach ($section as $info) { ?>
                                        <option value="<?php echo $info->section; ?>">
                                            <?php echo $info->section; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="machine_model">Machine Model</label>
                                <input type="text" class="form-control" id="machine_model" placeholder=""
                                       value="<?php echo $machine_model; ?>" name="machine_model">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chassis">Chassis No.</label>
                                <input type="text" class="form-control" id="chassis" 
                                       value="<?php echo $chassis; ?>" placeholder="" name="chassis">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="parts_name">Parts Name</label>
                                <select name="parts_name" id="parts_name" class="form-control">
                                    <option  value="<?php echo $parts_name; ?>"><?php echo $parts_name; ?></option>
                                    <?php foreach ($product_name as $info) { ?>
                                        <option value="<?php echo $info->product_name; ?>">
                                            <?php echo $info->product_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="parts_no">Parts No.</label>
                                <input type="text" class="form-control" id="parts_no" 
                                       value="<?php echo $parts_no; ?>" placeholder="" name="parts_no">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="alternative_parts_no">Alternative Parts No.</label>
                                <input type="text" class="form-control" id="alternative_parts_no"
                                       value="<?php echo $alternative_parts_no; ?>" placeholder="" name="alternative_parts_no">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chinese_name">Chinese Name</label>
                                <input type="text" class="form-control" id="chinese_name" 
                                       value="<?php echo $chinese_name; ?>" placeholder="" name="chinese_name">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit">Unit</label>
                                <select name="unit" id="unit" class="form-control">
                                    <option value="<?php echo $unit; ?>"><?php echo $unit; ?></option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Set">Set</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="payment_type">Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-control">
                                    <option value="<?php echo $payment_type; ?>"><?php echo $payment_type; ?></option>
                                    <option value="USD">USD</option>
                                    <option value="BDT">BDT</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit_price">Unit Price</label>
                                <input type="text" class="form-control" id="unit_price" placeholder="" value="<?php echo $unit_price; ?>" name="unit_price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" value="<?php echo $quantity; ?>" placeholder="" name="quantity">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="reminder_level">Reminder Level</label>
                                <input type="text" class="form-control" id="reminder_level" 
                                       value="<?php echo $reminder_level; ?>" placeholder="" name="reminder_level">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" rows="1"
                                          value="<?php echo $description; ?>" placeholder="" name="description"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="shelf_details">Shelf Details</label>
                                <textarea type="text" class="form-control" id="shelf_details" rows="1"
                                          value="<?php echo $shelf_details; ?>" placeholder="" name="shelf_details"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="selling_price">Selling U.Price</label>
                                <input type="text" class="form-control" id="selling_price"
                                       value="<?php echo $selling_price; ?>" placeholder="" name="selling_price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button style="margin-top: 27px" name="single_product" type="submit" class="pull-left btn btn-success"
                                        id="save_btn">Edit <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="margin-top:10px;">
                            <?php if(isset($po_no)): ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="po_editable">Po No.</label>
                                    <input type="text" class="form-control" id="po_editable" placeholder="" name="po_editable" value="<?php echo $po_no; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="supplier">Supplier</label>
                                    <select name="supplier" id="supplier" class="form-control" name="supplier">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($manufacture_company as $info):?>
                                            <option <?php if($supplier==$info->manufacture_company) echo "selected" ?> value="<?php echo $info->manufacture_company; ?>">
                                                <?php echo $info->manufacture_company; ?>
                                            </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="shipping_type">Shipping Type</label>
                                    <select name="shipping_type" id="shipping_type" class="form-control">
                                        <option value="">-- Select --</option>
                                        <option <?php if($shipping_type=="Ship") echo "selected" ?> value="Ship">Ship</option>
                                        <option <?php if($shipping_type=="DHL") echo "selected" ?> value="DHL">DHL</option>
                                        <option <?php if($shipping_type=="Air") echo "selected" ?> value="Air">Air</option>
                                        <option <?php if($shipping_type=="By Hand") echo "selected" ?> value="By Hand">By Hand</option>
                                        <option <?php if($shipping_type=="Local") echo "selected" ?> value="Local">Local</option>
                                        <option <?php if($shipping_type=="Others") echo "selected" ?> value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="serial">Serial No.</label>
                                <input type="text" class="form-control" id="serial" placeholder="" value="<?php echo $serial; ?>" name="serial">
                                <input type="hidden" class="form-control" id="amount" placeholder="" value="<?php echo $total; ?>" name="amount">
                                <input type="hidden" class="form-control" id="po_no" placeholder="" name="po_no" value="<?php echo $po_no; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="shiping_cost">Shipping Cost</label>
                                    <input type="text" class="form-control" id="shiping_cost" placeholder="" value="<?php echo $shiping_cost; ?>" name="shiping_cost">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="custom_cost">Custom Cost</label>
                                    <input type="text" class="form-control" id="custom_cost" placeholder=""  value="<?php echo $custom_cost ?>" name="custom_cost">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="transport_cost">Transport Cost</label>
                                    <input type="text" class="form-control" id="transport_cost" value="<?php echo $transport_cost ?>" placeholder="" name="transport_cost">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="misc_cost">Mixed Cost</label>
                                    <input type="text" class="form-control" id="misc_cost" value="<?php echo $misc_cost ?>" placeholder="" name="misc_cost">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="total_cost">Total Price</label>
                                    <input type="text" class="form-control total_cost" id="total_cost" value="<?php echo $total; ?>" placeholder="" name="total_cost" readonly>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="discount">Discount</label>
                                    <select name="discount" id="discount" class="form-control">
                                        <option value="">-- Select --</option>
                                        <?php for ($i = 0; $i <= 30; $i++):?>
                                            <option <?php if($discount==$i) echo "selected" ?> value="<?php echo $i; ?>"><?php echo $i; ?>%</option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="net_payable">Net Payable</label>
                                    <input type="text" value="<?php echo $net_pay; ?>" class="form-control" id="net_payable" 
                                                    readonly placeholder="" name="net_payable">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="paid">Payment</label>
                                    <input type="text" value="<?php echo $paid; ?>" class="form-control" id="paid" 
                                                placeholder="" name="paid">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="due">Due</label>
                                    <input type="text" class="form-control" id="due" 
                                            readonly placeholder="" value="<?php echo $due; ?>" name="due">
                                </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success"
                                        id="save_btn">Edit <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                </form>
            </section>
        </div>
    </section>
</aside>

<?php if(isset($po_no)): ?>
<script type="text/javascript">
$(document).ready(function(){
    $("#shiping_cost, #custom_cost, #transport_cost, #misc_cost, #discount").on("change paste keyup", function () {
        calculate_value();
    });

    $('#paid').on('change paste keyup', function () {
        var paid = $('#paid').val();
        var net_payable = $('#net_payable').val();
        if (net_payable === "") {
            net_payable = 0;
        }
        $('#due').val((net_payable - paid).toFixed(2));
    });
    var shiping=0;
    var custom=0;
    var transport=0;
    var misc=0;
    function calculate_value() {
        var old_shiping_cost="<?php echo $shiping_cost;?>";
        var old_custom_cost="<?php echo $custom_cost;?>";
        var old_transport_cost="<?php echo $transport_cost;?>";
        var old_misc_cost="<?php echo $misc_cost;?>";
        var amount = $('#amount').val();
        var shiping_cost = $('#shiping_cost').val();
        var custom_cost = $('#custom_cost').val();
        var transport_cost = $('#transport_cost').val();
        var misc_cost = $('#misc_cost').val();
        var discount = $('#discount').val();
        if (amount === "") {
            amount = 0;
        }
        if (shiping_cost === "") {
            shiping_cost = 0;
        }
        if (custom_cost === "") {
            custom_cost = 0;
        }
        if (transport_cost === "") {
            transport_cost = 0;
        }
        if (misc_cost === "") {
            misc_cost = 0;
        }
        if (discount === "") {
            discount = 0;
        }
       // var total_ship_cost=0;
       if(shiping==0)
       {
            var cost= $('#total_cost').val();
            amount=cost-old_shiping_cost-old_custom_cost-old_transport_cost-old_misc_cost;
            $('#amount').val(amount);
            shiping=1;
       }
       if(custom==0)
       {
            var cost= $('#total_cost').val();
            amount=cost-old_shiping_cost-old_custom_cost-old_transport_cost-old_misc_cost;
            $('#amount').val(amount);
            custom=1;
       }
       if(transport==0)
       {
            var cost= $('#total_cost').val();
            amount=cost-old_shiping_cost-old_custom_cost-old_transport_cost-old_misc_cost;
            $('#amount').val(amount);
            transport=1;
       }
       if(misc==0)
       {
            var cost= $('#total_cost').val();
            amount=cost-old_shiping_cost-old_custom_cost-old_transport_cost-old_misc_cost;
            $('#amount').val(amount);
            misc=1;
       }
        var total_cost = parseFloat(amount) + parseFloat(shiping_cost) + parseFloat(custom_cost) +
                parseFloat(transport_cost) + parseFloat(misc_cost);
        var net_payable = total_cost - parseFloat(total_cost * (discount / 100));
        $('#total_cost').val((total_cost).toFixed(2));
        $('#net_payable').val((net_payable).toFixed(2));
        $('#paid').val("");
        $('#due').val("");
    }
});
</script>
<?php endif; ?>
<script type="text/javascript">
    $("#unit_price, #quantity").on("change paste keyup", function () {
        var unit_price = $('#unit_price').val();
        var quantity = $('#quantity').val();
        if (unit_price === "") {
            unit_price = 0;
        }
        if (quantity === "") {
            quantity = 0;
        }
        $('#total_price').val((unit_price * quantity).toFixed(2));
    });
    $('#product_type').on('change paste keyup', function () {
        var product_type = $('#product_type').val();
        var post_data = {
            'product_type': product_type,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_section",
            data: post_data,
            success: function (data) {
                $('#section').html(data);
                $('#section').selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_model",
            data: post_data,
            success: function (data) {
                $('#product_model_old').html(data);
                $('#product_model_old').selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_chassis",
            data: post_data,
            success: function (data) {
                $('#chassis_old').html(data);
                $('#chassis_old').selectpicker('refresh');
            }
        });


        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_alt_parts_no",
            data: post_data,
            success: function (data) {
                $('#alternative_parts_no_old').html(data);
                $('#alternative_parts_no_old').selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_chinese_name",
            data: post_data,
            success: function (data) {
                $('#chinese_name_old').html(data);
                $('#chinese_name_old').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_section",
            data: post_data,
            success: function (data) {
                $('#section').html(data);
                $('#section').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_name2",
            data: post_data,
            success: function (data) {
                $('#product_name_old').html(data);
                $('#product_name_old').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_brand_name",
            data: post_data,
            dataType:"json",
            success: function (data) {
                $('#brand').empty();
                if(data!=''){
                    $('#brand').append($('<option>').text(data).attr('value', data));
                }else{
                    $('#brand').append($('<option>').text("-- Select--").attr('value',""));
                    $('#brand').append($('<option>').text("XCMG").attr('value',"XCMG"));
                    $('#brand').append($('<option>').text("Sinotrck").attr('value', "Sinotrck"));
                }
            }
        });
    });
</script>