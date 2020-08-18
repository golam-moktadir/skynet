<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
}
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $one_date = $one_info->date;
    $one_product_type = $one_info->product_type;
    $one_sub_category = $one_info->sub_category;
    $one_product_model = $one_info->product_model;
    $one_brand_name = $one_info->brand_name;
    $one_product_name = $one_info->product_name;
    $one_manufacture_company = $one_info->manufacture_company;
    $one_unit_type = $one_info->unit_type;
    $one_product_indication = $one_info->product_indication;
    $one_reminder_level = $one_info->reminder_level;
    $one_purchase_price = $one_info->purchase_price;
    $one_selling_price = $one_info->selling_price;
    $one_wholesale_price = $one_info->wholesale_price;
    $one_retail_price = $one_info->retail_price;
    $shelf_details = $one_info->shelf_details;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/insert_product_info/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Product Info.</p>
                        <p style="font-size: 20px; color: #044;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="manufacture_company">Vendor</label>
                                <select name="manufacture_company" id="manufacture_company"
                                        class="form-control selectpicker" data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    foreach ($manufacture_company as $info) {
                                        if ($info->manufacture_company == $one_manufacture_company) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                        <option value="<?php echo $info->manufacture_company; ?>" <?php echo $selected; ?>>
                                            <?php echo $info->manufacture_company; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_type">Product Category</label>
                                <select name="product_type" id="product_type"
                                        class="form-control selectpicker" data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    foreach ($product_type as $info) {
                                        if ($info->product_type == $one_product_type) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                        <option value="<?php echo $info->product_type; ?>" <?php echo $selected; ?>>
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="sub_category">Product Sub-category</label>
                                <select name="sub_category" id="sub_category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    foreach ($sub_category as $info) {
                                        if ($info->sub_category == $one_sub_category) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                        <option value="<?php echo $info->sub_category; ?>" <?php echo $selected; ?>>
                                            <?php echo $info->sub_category; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_name">Product Name</label>
                                <select name="product_name" id="product_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    foreach ($product_name as $info) {
                                        if ($info->product_name == $one_product_name) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                        <option value="<?php echo $info->product_name; ?>" <?php echo $selected; ?>>
                                            <?php echo $info->product_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="unit">Unit</label>
                                <select name="unit" id="unit" class="form-control selectpicker">
                                    <option value="<?php echo $one_unit_type; ?>"><?php echo $one_unit_type; ?></option>
                                    <option value="Piece (Pcs)">Piece (Pcs)</option>
                                    <option value="Inch">Inch</option>
                                    <option value="Kilogram (kg)">Kilogram (KG)</option>
                                    <option value="Milli Gram (mg)">Milli Gram (mg)</option>
                                    <option value="Milli Liter (ml)">Milli Liter (ml)</option>
                                    <option value="Gram (g)">Gram (g)</option>
                                    <option value="meter (m)">Milli Meter (mm)</option>
                                    <option value="meter (m)">Meter (m)</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_indication">Description</label>
                                <textarea type="text" class="form-control" id="product_indication" rows="1"
                                          placeholder=""
                                          name="product_indication"><?php echo $one_product_indication; ?></textarea>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="brand_name">Brand Name</label>
                                <select name="brand_name" id="brand_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php
                                    foreach ($brand as $info) {
                                        if ($info->brand_name == $one_brand_name) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                        <option value="<?php echo $info->brand_name; ?>" <?php echo $selected; ?>>
                                            <?php echo $info->brand_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="product_model">Product Model</label>
                                <input type="text" class="form-control" value="<?php echo $one_product_model; ?>"
                                       id="product_model" placeholder="" name="product_model">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="purchase_price">Purchase Price</label>
                                <input type="text" class="form-control" id="purchase_price"
                                       value="<?php echo $one_purchase_price; ?>" placeholder=""
                                       name="purchase_price">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="selling_price">Selling Price</label>
                                <input type="text" class="form-control" id="selling_price"
                                       value="<?php echo $one_selling_price; ?>" placeholder=""
                                       name="selling_price">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="wholesale_price">Wholesale U.Price</label>
                                <input type="text" class="form-control" id="wholesale_price"
                                       value="<?php echo $one_wholesale_price; ?>" placeholder=""
                                       name="wholesale_price">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="retail_price">Retail U.Price</label>
                                <input type="text" class="form-control" id="retail_price"
                                       value="<?php echo $one_retail_price; ?>" placeholder=""
                                       name="retail_price">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" placeholder="" name="image">
                            </div>

                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="reminder_level">Reminder Level</label>
                                <input type="text" class="form-control" id="reminder_level"
                                       value="<?php echo $one_reminder_level; ?>" placeholder="" name="reminder_level">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="shelf_details">Shelf Details</label>
                                <textarea type="text" class="form-control" id="shelf_details" rows="1"
                                          placeholder="" name="shelf_details"><?php echo $shelf_details; ?></textarea>
                            </div>
                            <div class="col-sm-3 box-footer clearfix">
                                <button style="margin-top: 16px" type="submit" class="pull-left btn btn-success">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>
 $("#pack_size").on("change paste keyup", function () {
        var pack_size = $('#pack_size').val();
        if (pack_size == "Liquid") {
            $("#powder_form").hide();
            $("#liquid_form").show();
        } else if (pack_size == "Powder") {
            $("#liquid_form").hide();
            $("#powder_form").show();
        } else if (pack_size == "") {
            $("#powder_form").hide();
            $("#liquid_form").hide();
        }
    });
</script>