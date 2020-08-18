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
    $payment_type = $one_info->payment_type;
    $reminder_level = $one_info->reminder_level;
    $description = $one_info->description;
    $shelf_details = $one_info->shelf_details;
    $selling_price = $one_info->selling_price;
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
                            <!--                            <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="unit_price">Unit Price</label>
                                                            <input type="text" class="form-control" id="unit_price" placeholder="" name="unit_price">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="quantity">Quantity</label>
                                                            <input type="text" class="form-control" id="quantity" placeholder="" name="quantity">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="total_price">Total Price</label>
                                                            <input type="text" class="form-control" id="total_price"
                                                                   placeholder="" name="total_price" readonly="">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" id="image" placeholder="" name="image">
                                                        </div>-->
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="payment_type">Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-control">
                                    <option value="<?php echo $payment_type; ?>"><?php echo $payment_type; ?></option>
                                    <option value="USD">USD</option>
                                    <option value="BDT">BDT</option>
                                </select>
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
                            <!--                            <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="supplier">Supplier</label>
                                                            <select name="supplier" id="supplier" class="form-control selectpicker" name="supplier"
                                                                    data-live-search="true">
                                                                <option value="">-- Select --</option>
                            <?php foreach ($manufacture_company as $info) { ?>
                                                                                                <option value="<?php echo $info->manufacture_company; ?>">
                                <?php echo $info->manufacture_company; ?>
                                                                                                </option>
                            <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="po_no">PO No.</label>
                                                            <input type="text" class="form-control" id="po_no" placeholder="" name="po_no">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="shipping_type">Shipping Type</label>
                                                            <select name="shipping_type" id="shipping_type" class="form-control selectpicker"
                                                                    data-live-search="true">
                                                                <option value="">-- Select --</option>
                                                                <option value="Ship">Ship</option>
                                                                <option value="DHL">DHL</option>
                                                                <option value="Air">Air</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="shiping_cost">Shipping Cost</label>
                                                            <input type="text" class="form-control" id="shiping_cost" placeholder="" name="shiping_cost">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="custom_cost">Custom Cost</label>
                                                            <input type="text" class="form-control" id="custom_cost" placeholder="" name="custom_cost">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="transport_cost">Transport Cost</label>
                                                            <input type="text" class="form-control" id="transport_cost" placeholder="" name="transport_cost">
                                                        </div>
                                                        <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="misc_cost">Mixed Cost</label>
                                                            <input type="text" class="form-control" id="misc_cost" placeholder="" name="misc_cost">
                                                        </div>-->
                            <div class="form-group col-sm-2 col-xs-12">
                                <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success"
                                        id="save_btn">Edit <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </section>
        </div>
    </section>
</aside>


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
</script>