<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 0px; padding-left: 5px; padding-right: 5px;}
</style>
<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable"> 
                <div style="color: black;">
                    <div class="box-body" style="margin-bottom: 10px;">
                        <p style="font-size: 20px;">Edit Product</p>
                        <?php foreach ($one_value as $single_value) { ?>
                            <?php echo form_open_multipart('Edit/add_product/' . $single_value->record_id); ?>

                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="po_no">PO No.</label>
                                    <input type="text" class="form-control" id="po_no" placeholder="" name="po_no" value="<?php echo $single_value->po_no; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="product_type">Machine Category</label>
                                    <select name="product_type" id="product_type" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option  value="">--Select--</option>
                                        <?php foreach ($product_type as $info) { ?>
                                            <option <?php if($single_value->machine_category==$info->product_type) echo "selected"; ?> value="<?php echo $info->product_type; ?>">
                                                <?php echo $info->product_type; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="section">Section</label>
                                    <select name="section" id="section" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="<?php echo $single_value->section; ?>"><?php echo $single_value->section; ?></option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="product_model">Machine Model</label>
                                    <input type="text" class="form-control" id="product_model" placeholder="" name="product_model" value="<?php echo $single_value->machine_model; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="chassis">Chassis No.</label>
                                    <input type="text" class="form-control" id="chassis" placeholder="" name="chassis" value="<?php echo $single_value->chassis; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="brand">Brand</label>
                                    <select name="brand" id="brand" class="form-control">
                                        <option value="">-- Select--</option>
                                        <option <?php if($single_value->brand=="XCMG") echo "selected"; ?> value="XCMG">XCMG</option>
                                        <option <?php if($single_value->brand=="Sinotruk") echo "selected"; ?> value="Sinotruk">Sinotruk</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="product_name">Parts Name</label>
                                    <select name="product_name" id="product_name" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="<?php echo $single_value->parts_name; ?>"><?php echo $single_value->parts_name; ?></option>
                                        <?php foreach ($product_name as $info) { ?>
                                            <option value="<?php echo $info->product_name; ?>">
                                                <?php echo $info->product_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="parts_no">Part No.</label>
                                    <input type="text" class="form-control" id="parts_no" placeholder="" name="parts_no"  value="<?php echo $single_value->parts_no; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="alternative_parts_no">Alternative Part No.</label>
                                    <input type="text" class="form-control" id="alternative_parts_no" placeholder="" name="alternative_parts_no" 
                                           value="<?php echo $single_value->alternative_parts_no; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="chinese_name">Chinese Name</label>
                                    <input type="text" class="form-control" id="chinese_name" placeholder="" name="chinese_name"  value="<?php echo $single_value->chinese_name; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="unit">Unit</label>
                                    <select name="unit" id="unit" class="form-control">
                                        <option  value="<?php echo $single_value->unit; ?>"><?php echo $single_value->unit; ?></option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Set">Set</option>
                                    </select>
                                </div>
                                <!--                            <div class="form-group col-sm-2 col-xs-12">
                                                                <label for="manufacture_company">Supplier</label>
                                                                <select name="manufacture_company" id="manufacture_company" class="form-control selectpicker"
                                                                        data-live-search="true">
                                                                    <option value="">-- Select --</option>
                                <?php foreach ($manufacture_company as $info) { ?>
                                                                                                                                                                                                                <option value="<?php echo $info->manufacture_company; ?>">
                                    <?php echo $info->manufacture_company; ?>
                                                                                                                                                                                                                </option>
                                <?php } ?>
                                                                </select>
                                                            </div>-->
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="unit_price">Unit Price</label>
                                    <input type="text" class="form-control" id="unit_price" placeholder="" name="unit_price" value="<?php echo $single_value->unit_price; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="payment_type">Payment Type</label>
                                    <select name="payment_type" id="payment_type" class="form-control">
                                        <option value="<?php echo $single_value->payment_type; ?>"><?php echo $single_value->payment_type; ?></option>
                                        <option value="USD">USD</option>
                                        <option value="BDT">BDT</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" placeholder="" name="quantity" value="<?php echo $single_value->quantity; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="total_price">Total Price</label>
                                    <input type="text" class="form-control" id="total_price"
                                           placeholder="" name="total_price" readonly="" value="<?php echo $single_value->total_price; ?>">
                                </div>
                                <!--                            <div class="form-group col-sm-2 col-xs-12">
                                                                <label for="image">Image</label>
                                                                <input type="file" class="form-control" id="image" placeholder="" name="image">
                                                            </div>-->
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="reminder_level">Reminder Level</label>
                                    <input type="text" class="form-control" id="reminder_level" placeholder="" name="reminder_level" value="<?php echo $single_value->reminder_level; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" id="description" rows="1"
                                              placeholder="" name="description"><?php echo $single_value->description; ?></textarea>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="shelf_details">Shelf Details</label>
                                    <textarea type="text" class="form-control" id="shelf_details" rows="1"
                                              placeholder="" name="shelf_details"><?php echo $single_value->shelf_details; ?></textarea>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="selling_price">Selling U.Price</label>
                                    <input type="text" class="form-control" id="selling_price" placeholder="" name="selling_price" value="<?php echo $single_value->selling_price; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success"
                                            id="save_btn">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>              
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
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
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_name2",
            data: post_data,
            success: function (data) {
                $('#product_name').html(data);
                $('#product_name').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_brand_name",
            data: post_data,
            dataType:"json",
            success: function (data) {
                $('#brand').find("option").remove();
                if(data!=''){
                    $('#brand').append($('<option>').text(data).attr('value', data));
                }else{
                    $('#brand').append($('<option>').text("-- Select--").attr('value',""));
                    $('#brand').append($('<option>').text("XCMG").attr('value',"XCMG"));
                    $('#brand').append($('<option>').text("Sinotruk").attr('value', "Sinotruk"));
                }
            }
        });
    });

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

//    $('#section').on('change paste keyup', function () {
//        var section = $('#section').val();
//        var post_data = {
//            'section': section,
//            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
//        };
//
//        $.ajax({
//            type: "POST",
//            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_name",
//            data: post_data,
//            success: function (data) {
//                $('#product_name').html(data);
//                $('#product_name').selectpicker('refresh');
//            }
//        });
//    });
</script>