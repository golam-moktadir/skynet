
<style>
    .content {
        padding-top: 0px;
        margin-top: 0px;
    }

    .form-group {
        margin-bottom: 5px;
    }

    .col-sm-2 {
        padding: 0px 2px 0px 2px;
    }
</style>
<aside>
    <section class="content">
        <?php echo form_open('Edit/sell_product/'.@$inovice_no); ?>
        <section class="col-xs-12" id="full_page">
        <?php if(count($invoice)>0): ?>
            <?php foreach($invoice as $key=>$in_value): ?>
                <div class="row">
                    <div>
                    <p  id="" style="text-align: center;"><span id="" style="margin-right:15px">Available Qty: <span id="avail_qty-<?php echo $in_value['record_id'] ?>"></span></span><span id="" style="margin-left:15px" class="">Pending Qty: <span id="pending_qty-<?php echo $in_value['record_id'] ?>"></span></span><span id="" style="margin-left:15px" class="">Average Price: <span id="average_price-<?php echo $in_value['record_id'] ?>"></span></span> </p>
                                <input type="hidden" class="form-control" id="record_id"
                                    value="<?php echo $in_value['record_id']; ?>" name="record_id[]">
                            <?php if($key==0): ?>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="date">Date</label>
                                <input type="text" class="form-control new_datepicker" id="date"
                                    value="<?php echo $in_value['date']; ?>" placeholder="Date" name="date">
                            </div>
                            <?php endif; ?>
                            
                            <div class="form-group col-sm-2 col-xs-12">
                                <input type="hidden" name="brand[<?php echo @$in_value['record_id']; ?>]" value="<?php echo $in_value['brand']; ?>" class="brand" id="brand-<?php echo $in_value['record_id'] ?>" >
                                <label for="parts_name">Parts Name</label>
                                <select name="parts_name[<?php echo $in_value['record_id']; ?>]" id="parts_name-<?php echo $in_value['record_id'] ?>" class="parts_name form-control selectpicker"
                                        data-live-search="true">
                                    <?php if(isset($parts_name)): ?>
                                        <?php foreach($parts_name as $value): ?>
                                             <option <?php if($in_value['product_name']==$value->product_name) echo "selected"; ?> value="<?php echo $value->product_name; ?>"><?php echo $value->product_name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?> 
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="parts_no">Part No.</label>
                                <select name="parts_no[<?php echo $in_value['record_id']; ?>]" id="parts_no-<?php echo $in_value['record_id']; ?>" class="parts_no form-control selectpicker"
                                        data-live-search="true">
                                        <option value="<?php echo $in_value['parts_no'] ?>"><?php echo $in_value['parts_no']; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="alt_parts_no">Alt Part No.</label>
                                <select name="alt_parts_no[<?php echo $in_value['record_id']; ?>]" id="alt_parts_no-<?php echo $in_value['record_id'] ?>" class="alt_parts_no form-control selectpicker"
                                        data-live-search="true">
                                        <option value="<?php echo $in_value['alt_parts_no'] ?>"><?php echo $in_value['alt_parts_no']; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit">Unit</label>
                                <input type="text" value="<?php echo $in_value['unit'] ?>" class="unit form-control" id="unit-<?php echo $in_value['record_id']; ?>" placeholder=""
                                    name="unit[<?php echo $in_value['record_id']; ?>]" readonly>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="product_qty">Product Quantity </label>
                                <input type="text" value="<?php echo $in_value['product_qty'] ?>" class="product_qty form-control" id="product_qty-<?php echo $in_value['record_id'] ?>" placeholder="Product Qty"
                                    value="1" name="product_qty[<?php echo $in_value['record_id']; ?>]">
                            </div>
                           
                                <?php if($in_value['sales_type']=="Bill" || $in_value['sales_type']=="Service Bill" || $in_value['sales_type']=="Loan Return"): ?> 
                                    <div id="only_bill">
                                        <div class="form-group col-sm-2 col-xs-12">
                                            <label for="selling_price">Unit Price</label>
                                            <input value="<?php echo $in_value['price_per_unit'] ?>" type="text" class="selling_price form-control" id="selling_price-<?php echo $in_value['record_id'] ?>" placeholder="Unit Price"
                                                name="selling_price[<?php echo $in_value['record_id']; ?>]">
                                        </div>
                                        <div class="form-group col-sm-2 col-xs-12">
                                            <label for="total_price">Amount</label>
                                            <input value="<?php echo $in_value['price_per_unit']*$in_value['product_qty'] ?>" type="text" class="total_price form-control" id="total_price-<?php echo $in_value['record_id'] ?>" placeholder=""
                                                value="0" name="total_price[<?php echo $in_value['record_id']; ?>]" readonly>
                                        </div>
                                        <div class="form-group col-sm-2 col-xs-12">
                                            <label for="ind_discount">Discount</label>
                                            <input value="<?php echo $in_value['ind_discount']; ?>" type="text" class="ind_discount form-control" id="ind_discount-<?php echo $in_value['record_id']; ?>" placeholder=""
                                                name="ind_discount[<?php echo $in_value['record_id']; ?>]" >
                                        </div>
                                        <div class="form-group col-sm-2 col-xs-12">
                                            <label for="sub_total">Total Price</label>
                                            <input value="<?php echo $in_value['total']; ?>" type="text" class="sub_total form-control" id="sub_total-<?php echo $in_value['record_id']; ?>" placeholder=""
                                                name="sub_total[<?php echo $in_value['record_id']; ?>]" readonly>
                                        </div>

                                    </div>
                                    <?php endif; ?>
                                <?php if($key==0): ?> 
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="remarks">Remarks</label>
                                    <input value="<?php echo $in_value['remarks'] ?>" type="text" class="form-control" id="remarks" placeholder=""
                                        name="remarks">
                                </div>
                            <?php endif; ?>

                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
            <div>
                <div class="box-body table-responsive" style="width: 98%; color: black;">
                    <table id="salesList" class="table table-bordered table-hover">
                        <tr id="">
                            <td colspan="2">
                            <input type="hidden" class="form-control" id="previous_due"value="0" name="previous_due" readonly="">
                                Sub Total<input type="text" class="form-control" id="complete_total"
                                                value="<?php echo @$invoice[0]['sub_total'] ?>" style="color: black; border: black 2px solid;"
                                                name="complete_total" readonly>
                            </td>
                            <td colspan="4">
                                S.Total Discount<input type="text" class="form-control" id="discount"
                                                       style="color: black; border: black 2px solid;"
                                                       value="<?php echo @$invoice[0]['discount'] ?>" placeholder="Discount" name="discount">
                            </td>
                            <td colspan="2">
                                Pay<input type="text" class="form-control" id="pay"
                                          value="<?php echo @$invoice[0]['paid'] ?>" style="color: black; border: black 2px solid;" name="pay">
                            </td>
                            <td colspan="2">
                                Due<input type="text" class="form-control" id="due"
                                          value="<?php echo @$invoice[0]['due'] ?>" style="color: black; border: black 2px solid;" name="due"
                                          readonly>
                            </td>
                            <td colspan="3">
                                P.Type
                                <select id="payment_type" name="payment_type" class="form-control"
                                        style="color: black; border: black 2px solid;">
                                    <option <?php if($invoice[0]['payment_type']== "N/A" ) echo "selected"?> value="N/A">--Select--</option>
                                    <option <?php if($invoice[0]['payment_type']== "Cash" ) echo "selected"?> value="Cash">Cash</option>
                                    <option <?php if($invoice[0]['payment_type']== "Bank" ) echo "selected"?> value="Bank">Bank</option>
                                    <option <?php if($invoice[0]['payment_type']== "Cheque" ) echo "selected"?> value="Cheque">Cheque</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="cheque" style="display: none;">
                            <td colspan="2">
                                Bank Name<input type="text" class="form-control" id="bank_name"
                                                value="" style="color: black; border: black 2px solid;"
                                                name="bank_name">
                            </td>
                            <td colspan="4">
                                Account No.<input type="text" class="form-control" id="account_no"
                                                  value="" style="color: black; border: black 2px solid;"
                                                  name="account_no">
                            </td>
                            <td colspan="3">
                                Cheque No.<input type="text" class="form-control" id="cheque_no"
                                                 value="" style="color: black; border: black 2px solid;"
                                                 name="cheque_no">
                            </td>
                        </tr>
                    </table>
                    <div class="box-footer clearfix">
                        <button style="margin-top: -10px;" type="submit" class="pull-right btn btn-success"
                                id="sell_btn">Update <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        </form>
    </section>
</aside>
<script>
    $('.product_type').on('change paste keyup', function () {
        var product_type = $(this).val();
        var value = $(this).attr('id').split("-");
        var post_data = {
            'product_type': product_type,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_section",
            data: post_data,
            success: function (data) {
                // console.log($('#section-'+value[1]).html(data));
                $('#section-'+value[1]).html(data)
                $('#section-'+value[1]).selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_name2",
            data: post_data,
            success: function (data) {
                $('#parts_name-'+value[1]).html(data);
                $('#parts_name-'+value[1]).selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_brand_name",
            data: post_data,
            dataType:"json",
            success: function (data) {
                $('#brand-'+value[1]).val(data);
            }
        });
    });

    $('.parts_name').on('change paste keyup', function () {
        var parts_name = $(this).val();
        var value = $(this).attr('id').split("-");
        var post_data = {
            'parts_name': parts_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_no_by_name",
            data: post_data,
            success: function (data) {
                $('#parts_no-'+value[1]).html(data);
                $('#parts_no-'+value[1]).selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_alt_parts_no_by_name",
            data: post_data,
            success: function (data) {
                $('#alt_parts_no-'+value[1]).html(data);
                $('#alt_parts_no-'+value[1]).selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_unit",
            data: post_data,
            success: function (data) {
                $('#unit-'+value[1]).val(data);
            }
        });

       
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_average_unit_price_for_sale",
            data: post_data,
            dataType:"json",
            success: function (data) {
                if(data!='')
                {
                    $('#average_price-'+value[1]).text(data);
                }
                else{
                    $('#average_price-'+value[1]).text(0.00);
                }
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_avail_qty",
            data: post_data,
            success: function (data) {
                var jsonData=JSON.parse(data);
                if(jsonData.present_qty==null)
                {
                    jsonData.present_qty=0;
                }
                if(jsonData.pending_qty==null)
                {
                    jsonData.pending_qty=0;
                }
                $('#avail_qty-'+value[1]).text( jsonData.present_qty);
                $('#pending_qty-'+value[1]).text( jsonData.pending_qty);
            }
        });
    });
    $(".parts_no").on('change pase keyup',function(){
        var value = $(this).attr('id').split("-");
        var parts_name =  $('#parts_name-'+value[1]).val();
        var parts_no = $(this).val();
        var post_data = {
            'parts_no': parts_no,
            'parts_name': parts_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            datatype:"json",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_avail_part_no_qty",
            data: post_data,
            success: function (data) {
                var jsonData=JSON.parse(data);
                if(jsonData.present_qty==null)
                {
                    jsonData.present_qty=0;
                }
                if(jsonData.pending_qty==null)
                {
                    jsonData.pending_qty=0;
                }
                $('#avail_qty-'+value[1]).text( jsonData.present_qty);
                $('#pending_qty-'+value[1]).text( jsonData.pending_qty);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_average_unit_price_for_sale",
            data: post_data,
            dataType:"json",
            success: function (data) {
                if(data!='')
                {
                    $('#average_price-'+value[1]).text(data);
                }
                else{
                    $('#average_price-'+value[1]).text(0.00);
                }
            }
        });
    });
    $(".product_qty").on('change',function(){
        var value = $(this).attr('id').split("-");
        var qty = $(this).val();
        var avail_qty =  parseInt($('#avail_qty-'+value[1]).text());
        var pending_qty = parseInt($('#pending_qty-'+value[1]).text());
        if(qty>(avail_qty))
        {
            alert("No Avaiable Qty");
            $(this).val(avail_qty-pending_qty);
            return;
        }
    });

    $(".selling_price, .product_qty, .ind_discount").on("change paste keyup", function () {
        var value = $(this).attr('id').split("-");
        var selling_price = $("#selling_price-"+value[1]).val();
        if (selling_price == "") {
            selling_price = 0;
        }
        var product_qty = $('#product_qty-'+value[1]).val();
        if (product_qty == "") {
            product_qty = 1;
        }

        var total = parseFloat(selling_price) * parseFloat(product_qty);
        $('#total_price-'+value[1]).val(total);

        var ind_discount = $('#ind_discount-'+value[1]).val();
        if (ind_discount == "") {
            ind_discount = 0;
        }

        var sub_total = parseFloat(total) - parseFloat(total * (ind_discount / 100));
        $('#sub_total-'+value[1]).val(sub_total);
        var complete_total=0;
        $(".sub_total").each(function() {
            complete_total+=parseFloat($(this).val());
        });
        $('#complete_total').val(complete_total);
        var temp_discount = $('#discount').val();
        var temp_total = $('#complete_total').val();
        var discount = parseFloat($('#discount').val());
        var pay = parseFloat($('#pay').val());

        $('#due').val(temp_total-discount-pay);
    });

    $("#discount, #pay").on("change paste keyup", function () {
        var temp_discount = $('#discount').val();
        var temp_total = $('#complete_total').val();
        var discount = parseFloat($('#discount').val());
        var pay = parseFloat($('#pay').val());
        if(temp_discount==""){
            $('#due').val($('#complete_total').val());
            // $('#complete_total').val($('#sub_total').val());
        }
        if (discount >= 0) {
            var final_total = (parseFloat(temp_total)) - discount;
            var due = final_total - pay;
            // $('#complete_total').val(final_total);
            $('#due').val(due);
        }
    });
    $("#payment_type").on("change paste keyup", function () {
        var payment_type = $('#payment_type').val();
        if (payment_type == "Cheque") {
            $("#cheque").show();
        } else {
            $("#cheque").hide();
        }
    });
</script>