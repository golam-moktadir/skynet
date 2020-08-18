<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Created Successfully";
} elseif ($msg == "edit") {
    $msg = "Edited Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
} elseif ($msg == "add") {
    $msg = "Product Added Successfully";
} elseif ($msg == "approved") {
    $msg = "Approved Successfully";
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
                <div style="color: black;">
                    <?php // echo form_open_multipart('Insert/insert_product_info'); ?>
                    <div class="box-body" style="margin-bottom: 10px;">
                        <p style="font-size: 20px;">Purchase Order</p>
                        <p  style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="product_type">Machine Category</label>
                                <select name="product_type" id="product_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>">
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="section">Section</label>
                                <select name="section" id="section" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>

                                </select>
                            </div>

                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="product_model_old">Machine Model</label>
                                <div class="input-group">
                                    <select name="product_model_old" id="product_model_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                    </select>
                                    <input type="text" class="form-control" id="product_model_new" placeholder=""
                                           name="product_model_new" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="product_model_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="product_model_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chassis_old">Chassis No.</label>
                                <div class="input-group">
                                    <select name="chassis_old" id="chassis_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                    </select>
                                    <input type="text" class="form-control" id="chassis_new" placeholder=""
                                           name="chassis_new" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="chassis_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="chassis_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="brand">Brand</label>
                                <select name="brand" id="brand" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <option value="XCMG">XCMG</option>
                                    <option value="Sinotruk">Sinotruk</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="product_name_old">Parts Name</label>
                                    <select name="product_name_old" id="product_name_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>

                                    </select>
                            </div>

                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="parts_no_old">Parts No.</label>
                                <div class="input-group">
                                    <select name="parts_no_old" id="parts_no_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                    </select>
                                    <input type="text" class="form-control" id="parts_no_new" placeholder=""
                                           name="parts_no_new" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="parts_no_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="parts_no_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="alternative_parts_no_old">Alternative Parts No.</label>
                                <div class="input-group">
                                    <select name="alternative_parts_no_old" id="alternative_parts_no_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                    </select>
                                    <input type="text" class="form-control" id="alternative_parts_no_new" placeholder=""
                                           name="alternative_parts_no_new" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="alternative_parts_no_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="alternative_parts_no_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chinese_name_old">Chinese Name</label>
                                <div class="input-group">
                                    <select name="chinese_name_old" id="chinese_name_old" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                    </select>
                                    <input type="text" class="form-control" id="chinese_name_new" placeholder=""
                                           name="chinese_name_new" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="chinese_name_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="chinese_name_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit">Unit</label>
                                <select name="unit" id="unit" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
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
                                <input type="text" class="form-control" id="unit_price" placeholder="" name="unit_price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="payment_type">Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <option value="USD">USD</option>
                                    <option value="BDT">BDT</option>
                                </select>
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
                            <!--                            <div class="form-group col-sm-2 col-xs-12">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" id="image" placeholder="" name="image">
                                                        </div>-->
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="reminder_level">Reminder Level</label>
                                <input type="text" class="form-control" id="reminder_level" placeholder="" name="reminder_level">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" rows="1"
                                          placeholder="" name="description"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="shelf_details">Shelf Details</label>
                                <textarea type="text" class="form-control" id="shelf_details" rows="1"
                                          placeholder="" name="shelf_details"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="selling_price">Selling U.Price</label>
                                <input type="text" class="form-control" id="selling_price" placeholder="" name="selling_price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button style="margin-top: 27px" type="button" class="pull-left btn btn-success"
                                        id="save_btn">Add <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <!--                    </form>-->
                </div>

                <div class="box-body table-responsive" style="width: 98%; color: black; overflow-x: scroll;">
                    <table id="purchaseList" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Action</th>
                                <th style="text-align: center;">Machine Category</th>
                                <th style="text-align: center;">Section</th>
                                <th style="text-align: center;">Machine Model</th>
                                <th style="text-align: center;">Chassis No.</th>
                                <th style="text-align: center;">Brand</th>
                                <th style="text-align: center;">Parts Name</th>
                                <th style="text-align: center;">Parts No.</th>
                                <th style="text-align: center;">Alternative Parts No.</th>
                                <th style="text-align: center;">Chinese Name</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Payment Type</th>
                                <th style="text-align: center;">Quantity</th>
                                <th style="text-align: center;">Total</th>
<!--                                <th style="text-align: center;">Reminder Level</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Shelf Details</th>
                                <th style="text-align: center;">Selling U.Price</th>-->
                            </tr>
                        </thead>
                        <tbody id="show_all_purchase">

                        </tbody>
                        <tr>
                            <td colspan="2">
                                Supplier<select name="supplier" id="supplier" class="form-control selectpicker" 
                                                data-live-search="true"  name="supplier">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($manufacture_company as $info) { ?>
                                        <option value="<?php echo $info->manufacture_company; ?>">
                                            <?php echo $info->manufacture_company; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td colspan="2">
                                PO No.<input type="text" class="form-control" id="po_no" placeholder="" name="po_no">
                            </td>

                            <td colspan="2">
                                Shipping Type<select name="shipping_type" id="shipping_type" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Ship">Ship</option>
                                    <option value="DHL">DHL</option>
                                    <option value="Air">Air</option>
                                    <option value="By Hand">By Hand</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                            <td colspan="2">
                                Serial No.<input type="text" class="form-control" id="serial" placeholder="" name="serial">
                            </td>
                            <td colspan="2">
                                Shipping Cost<input type="text" class="form-control" id="shiping_cost" placeholder="" name="shiping_cost">
                            </td>
                            <td colspan="2">
                                Custom Cost<input type="text" class="form-control" id="custom_cost" placeholder="" name="custom_cost">
                            </td>
                            <td colspan="2">
                                Transport Cost<input type="text" class="form-control" id="transport_cost" placeholder="" name="transport_cost">
                            </td>
                            <td colspan="2">
                                Mixed Cost<input type="text" class="form-control" id="misc_cost" placeholder="" name="misc_cost">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Total Price<input type="text" class="form-control" id="total_cost" placeholder="" name="total_cost" readonly>
                            </td>
                            <td colspan="2">
                                Discount<select name="discount" id="discount" class="form-control">
                                    <option value="">-- Select --</option>
                                    <?php for ($i = 1; $i <= 30; $i++) { ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?>%</option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td colspan="2">
                                Net Payable<input type="text" class="form-control" id="net_payable" 
                                                  readonly placeholder="" name="net_payable">
                            </td>
                            <td colspan="2">
                                Payment<input type="text" class="form-control" id="paid" 
                                              placeholder="" name="paid">
                            </td>
                            <td colspan="2">
                                Due<input type="text" class="form-control" id="due" 
                                          readonly placeholder="" name="due">
                            </td>
                            <td colspan="2">
                                <button type="button" class="pull-left btn btn-info" style="margin-top: 20px;"
                                        id="confirm_btn">Confirm <i class="fa fa-arrow-circle-right"></i></button>
                            </td>
                            <td colspan="5"></td>
                        </tr>
                    </table>
                </div>

                <div id="all_list">
                    <div class="box-body table-responsive scroll_hide"
                         style="width: 98%; overflow-x: scroll; color: black;">
                        <div class="row" style="text-align: center;">
                            <!--                            <button id="print_button" title="Click to Print" type="button"
                                                                style="float: left; margin-left: 20px;"
                                                                onClick="window.print();" class="btn btn-flat btn-warning fa fa-print"></button>-->
                            <button onclick="scrollDown();" class="btn btn-info"
                                    style="float: right; margin-right: 20px;"
                                    id="down_btn">Down
                            </button>
                        </div>
                        <div class="row" style="text-align: center;">
                            <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                                 alt="Logo" height="85px" style="border-radius: 10px;">
                        </div>
                        <p style="color: #066; font-size: 20px; text-align: center;">Purchase Order Details</p>
<!--                        <input type="text" name="our_search" id="our_search"
                               class="form-control" style="float: right; width: 150px;">-->
                        <table id="pagination_search" class="table table-bordered table-hover list_table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">PO No.</th>
                                    <th style="text-align: center;">Action</th>
                                    <th style="text-align: center;">Machine Category</th>
                                    <th style="text-align: center;">Section</th>
                                    <th style="text-align: center;">Machine Model</th>
                                    <th style="text-align: center;">Chassis No.</th>
                                    <th style="text-align: center;">Brand</th>
                                    <th style="text-align: center;">Parts Name</th>
                                    <th style="text-align: center;">Parts No.</th>
                                    <th style="text-align: center;">Chinese Name</th>
                                    <th style="text-align: center;">Unit</th>
                                    <th style="text-align: center;">U.Price</th>
                                    <th style="text-align: center;">Payment Type</th>
                                    <th style="text-align: center;">Qty</th>
                                    <th style="text-align: center;">Total Price</th>
<!--                                    <th style="text-align: center;">R.Level</th>
                                    <th style="text-align: center;">Description</th>
                                    <th style="text-align: center;">Shelf Details</th>
                                    <th style="text-align: center;">Selling U.Price</th>-->
                                    <th style="text-align: center;">Supplier</th>
                                    <th style="text-align: center;">Shipping Type</th>
                                    <th style="text-align: center;">Serial</th>
                                    <th style="text-align: center;">Others Cost</th>
                                    <th style="text-align: center;">Total Cost</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= $count_it; $i++) {
//                                    $total_qty = 0;
//                                    $total_amount = 0;
                                    $one_time = 0;
                                    $row_span_count = 0;
                                    foreach (${'purchase_result' . $i} as $single_value) {
                                        $row_span_count++;
                                    }
                                    foreach (${'purchase_result' . $i} as $single_value) {
//                                        $total_qty += $single_value->quantity;
//                                        $total_amount += $single_value->amount;
                                        $one_time++;
                                        ?>
                                        <tr>
                                            <?php if ($one_time == 1) { ?>
                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                                                    <b style="color: #003399;"><?php echo $single_value->po_no; ?><br></b>
                                                    <?php
                                                    if ($single_value->is_approved == 0) {
                                                        echo anchor('Edit/approve_po/' . $single_value->po_no, ' ', 'style="margin: 5px;" '
                                                                . 'title="Upload" class="btn btn-success btn-flat fa fa-thumbs-o-up"');
                                                        echo anchor('Show_form/print_page_po/' . $single_value->po_no, ' ', 'style="margin: 5px;" '
                                                                . 'title="Print" class="btn btn-warning btn-flat fa fa-print"');
                                                    } else {
                                                        echo "<p style='color: green; font-size: 15px; font-weight: bold;'>Uploaded</p>";
                                                    }
                                                    
                                                    echo anchor('Show_form/download_excel/' . $single_value->po_no, ' ', 'style="margin: 5px;" '
                                                                . 'title="Export" class="btn btn-info btn-flat fa fa-arrow-circle-up"');
                                                    ?>
                                                    <?php
//                                                    echo anchor('Show_form/print_page_po/' . $single_value->po_no, ' ', 'style="margin: 5px;" '
//                                                            . 'title="Print" class="btn btn-warning btn-flat fa fa-print"');
//                                                    
                                                    ?>
                                                </td>
                                            <?php } ?>
        <!--                                                <td style="text-align: center;">
                                            <?php
                                            if ($single_value->date != "0000-00-00") {
                                                echo date('d/m/Y', strtotime($single_value->date));
                                            } else {
                                                echo "";
                                            }
                                            ?>
        </td>-->
                                            <td style="text-align: center;" id="no_print3">
                                            <?php if ($one_time == 1): ?>
                                                <?php
                                                if ($single_value->is_approved == 0) {
                                                    echo anchor('Show_edit_form/purchase_order/' . $single_value->record_id.'/'.$single_value->po_no.'/'.$single_value->total_with_extra.'/'.$single_value->discount.'/'.$single_value->net_payable, ' ', 'style="margin: 5px;" '
                                                            . 'title="Edit" class="btn btn-info fa fa-edit"') .
                                                    anchor('Delete/purchase_order/' . $single_value->po_no, ' ', 'style="margin: 5px;" '
                                                            . 'title="Delete" class="btn btn-danger fa fa-trash-o"');
                                                } else {
                                                    echo "<p style='color: green; font-size: 15px; font-weight: bold;'>N/A</p>";
                                                }
                                                ?>
                                            <?php else: ?>
                                                <?php
                                                if ($single_value->is_approved == 0) {
                                                    echo anchor('Show_edit_form/purchase_order/' . $single_value->record_id, ' ', 'style="margin: 5px;" '
                                                            . 'title="Edit" class="btn btn-info fa fa-edit"') ;
                                                } else {
                                                    echo "<p style='color: green; font-size: 15px; font-weight: bold;'>N/A</p>";
                                                }
                                                ?>
                                            <?php endif;?>
                                            </td>
                                            <td style="text-align: center;"><?php echo $single_value->machine_category; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->section; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->machine_model; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->chassis; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                                            <td style="text-align: center; white-space: nowrap;">
                                                <?php echo $single_value->parts_no; ?><br>
                                                <b>Alt.No: </b><?php echo $single_value->alternative_parts_no; ?>
                                            </td>
                                            <td style="text-align: center;"><?php echo $single_value->chinese_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->unit; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->total_price; ?></td>
        <!--                                            <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->description; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->selling_price; ?></td>-->
                                            <?php if ($one_time == 1) { ?>
                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->supplier; ?></td>
                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->shipping_type; ?></td>
                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->serial; ?></td>

                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                                                    <b style="white-space: nowrap;">Shipping: </b><?php echo $single_value->shiping_cost; ?><br>
                                                    <b style="white-space: nowrap;">Custom: </b><?php echo $single_value->custom_cost; ?><br>
                                                    <b style="white-space: nowrap;">Transport: </b><?php echo $single_value->transport_cost; ?><br>
                                                    <b style="white-space: nowrap;">Mixed: </b><?php echo $single_value->misc_cost; ?>
                                                </td>
                                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                                                    <b style="white-space: nowrap;">Total Price: </b><?php echo $single_value->total_with_extra; ?>
                                                    <b style="white-space: nowrap;">Discount: </b><?php echo $single_value->discount; ?>%
                                                    <b style="white-space: nowrap;">Net Payable: </b><?php echo $single_value->net_payable; ?>
                                                </td>
                                            <?php } ?>

                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <button onclick="scrollUp();" class="btn btn-success"
                                    style="float: right; margin: 20px;" id="up_btn">Up
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<style>
    .list_table.table-bordered{
        border: grey 0.1px solid;
    }
    .list_table.table-bordered > thead > tr > th{
        border: grey 0.1px solid;
    }
    .list_table.table-bordered > tbody > tr > td{
        border: grey 0.1px solid;
    }
</style>
<script type="text/javascript">
    function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 0);
    }
//    window.onload = function () {
//        $('#pagination_search').dataTable({
//            "ordering": false,
//            "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
//            fixedHeader: {
//                header: true,
//                footer: true,
//                headerOffset: 40
//            }
//        });
//    };
</script>

<script type="text/javascript">
    function calculate_single_total() {
        var unit_price = $('#unit_price').val();
        var quantity = $('#quantity').val();
        if (unit_price === "") {
            unit_price = 0;
        }
        if (quantity === "") {
            quantity = 0;
        }
        $('#total_price').val((unit_price * quantity).toFixed(2));
    }
    $("#product_name").on("change paste keyup", function () {
        var product_name = $('#product_name').val();
        var post_data = {
            'parts_name': product_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_average_unit_price",
            data: post_data,
            success: function (data) {
                $('#unit_price').val(data);
                calculate_single_total();
            }
        });
    });

    $("#unit_price, #quantity").on("change paste keyup select", function () {
        calculate_single_total();
    });

    var temp_total = 0;
    var all_purchase = new Array();
    var product_count = 0;

    function calculate_value() {
        var shiping_cost = $('#shiping_cost').val();
        var custom_cost = $('#custom_cost').val();
        var transport_cost = $('#transport_cost').val();
        var misc_cost = $('#misc_cost').val();
        var discount = $('#discount').val();

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

        var total_cost = parseFloat(temp_total) + parseFloat(shiping_cost) + parseFloat(custom_cost) +
                parseFloat(transport_cost) + parseFloat(misc_cost);
        var net_payable = total_cost - parseFloat(total_cost * (discount / 100));
        $('#total_cost').val((total_cost).toFixed(2));
        $('#net_payable').val((net_payable).toFixed(2));
        $('#paid').val("");
        $('#due').val("");
    }

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
                    $('#brand').append($('<option>').text("Sinotruk").attr('value', "Sinotruk"));
                }
            }
        });
    });

    $('#section').on('change paste keyup', function () {
        var section = $('#section').val();
        var post_data = {
            'section': section,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_name",
            data: post_data,
            success: function (data) {
                $('#product_name_old').html(data);
                $('#product_name_old').selectpicker('refresh');
            }
        });
    });

    $('#product_name_old').on('change paste keyup', function () {
        var product_name = $('#product_name_old').val();
        var post_data = {
            'product_name': product_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_no",
            data: post_data,
            success: function (data) {
                $('#parts_no_old').html(data);
                $('#parts_no_old').selectpicker('refresh');
            }
        });
    });

    var product_model_status = 0;

    $('#product_model_plus').on('click', function () {
        $('#product_model_old').selectpicker('hide');
        $('#product_model_new').show();
        $('#product_model_back').show();
        $('#product_model_old').hide();
        $('#product_model_plus').hide();
        product_model_status = 1;
    });


    $('#product_model_back').on('click', function () {
        $('#product_model_old').selectpicker('show');
        $('#product_model_new').hide();
        $('#product_model_back').hide();
        $('#product_model_old').show();
        $('#product_model_plus').show();
        $('#product_model_new').val('');
        product_model_status = 0;
    });

    var chassis_status = 0;

    $('#chassis_plus').on('click', function () {
        $('#chassis_old').selectpicker('hide');
        $('#chassis_new').show();
        $('#chassis_back').show();
        $('#chassis_old').hide();
        $('#chassis_plus').hide();
        chassis_status = 1;
    });


    $('#chassis_back').on('click', function () {
        $('#chassis_old').selectpicker('show');
        $('#chassis_new').hide();
        $('#chassis_back').hide();
        $('#chassis_old').show();
        $('#chassis_plus').show();
        $('#chassis_new').val('');
        chassis_status = 0;
    });


    var parts_no_status = 0;

    $('#parts_no_plus').on('click', function () {
        $('#parts_no_old').selectpicker('hide');
        $('#parts_no_new').show();
        $('#parts_no_back').show();
        $('#parts_no_old').hide();
        $('#parts_no_plus').hide();
        parts_no_status = 1;
    });


    $('#parts_no_back').on('click', function () {
        $('#parts_no_old').selectpicker('show');
        $('#parts_no_new').hide();
        $('#parts_no_back').hide();
        $('#parts_no_old').show();
        $('#parts_no_plus').show();
        $('#parts_no_new').val('');
        parts_no_status = 0;
    });


    var alternative_parts_no_status = 0;

    $('#alternative_parts_no_plus').on('click', function () {
        $('#alternative_parts_no_old').selectpicker('hide');
        $('#alternative_parts_no_new').show();
        $('#alternative_parts_no_back').show();
        $('#alternative_parts_no_old').hide();
        $('#alternative_parts_no_plus').hide();
        alternative_parts_no_status = 1;
    });


    $('#alternative_parts_no_back').on('click', function () {
        $('#alternative_parts_no_old').selectpicker('show');
        $('#alternative_parts_no_new').hide();
        $('#alternative_parts_no_back').hide();
        $('#alternative_parts_no_old').show();
        $('#alternative_parts_no_plus').show();
        $('#alternative_parts_no_new').val('');
        alternative_parts_no_status = 0;
    });

    var chinese_name_status = 0;

    $('#chinese_name_plus').on('click', function () {
        $('#chinese_name_old').selectpicker('hide');
        $('#chinese_name_new').show();
        $('#chinese_name_back').show();
        $('#chinese_name_old').hide();
        $('#chinese_name_plus').hide();
        chinese_name_status = 1;
    });


    $('#chinese_name_back').on('click', function () {
        $('#chinese_name_old').selectpicker('show');
        $('#chinese_name_new').hide();
        $('#chinese_name_back').hide();
        $('#chinese_name_old').show();
        $('#chinese_name_plus').show();
        $('#chinese_name_new').val('');
        chinese_name_status = 0;
    });

    $("#save_btn").click(function () {
        var product_type = $('#product_type').val();
        var section = $('#section').val();
        if (product_model_status == 1) {
            var product_model = $('#product_model_new').val();
        } else {
            var product_model = $('#product_model_old').val();
        }
        if (chassis_status == 1) {
            var chassis = $('#chassis_new').val();
        } else {
            var chassis = $('#chassis_old').val();
        }
        var product_name = $('#product_name_old').val();
        if (parts_no_status == 1) {
            var parts_no = $('#parts_no_new').val();
        } else {
            var parts_no = $('#parts_no_old').val();
        }
        if (alternative_parts_no_status == 1) {
            var alternative_parts_no = $('#alternative_parts_no_new').val();
        } else {
            var alternative_parts_no = $('#alternative_parts_no_old').val();
        }
        if (chinese_name_status == 1) {
            var chinese_name = $('#chinese_name_new').val();
        } else {
            var chinese_name = $('#chinese_name_old').val();
        }

        var unit = $('#unit').val();
        var unit_price = $('#unit_price').val();
        var payment_type = $('#payment_type').val();
        var quantity = $('#quantity').val();
        var total_price = $('#total_price').val();
//        var temp_image = $('#image').val();
//        var image = new FormData(temp_image);
        var reminder_level = $('#reminder_level').val();
        var description = $('#description').val();
        var shelf_details = $('#shelf_details').val();
        var selling_price = $('#selling_price').val();
        var brand = $('#brand').val();

        all_purchase[product_count] = new Array(product_type, section, product_model, chassis, brand, product_name,
                parts_no, alternative_parts_no, chinese_name, unit, unit_price, payment_type, quantity, total_price,
                reminder_level, description, shelf_details, selling_price, product_model_status, chassis_status,parts_no_status, alternative_parts_no_status, chinese_name_status);
        var complete_total = 0;
        var full_table = "";
        for (var i = 0; i < all_purchase.length; i++) {
            complete_total += parseFloat(all_purchase[i][13]);
            full_table += "<tr><td style='text-align: center;'><button class='btn btn-danger fa fa-trash-o' onclick='delete_data(" + i + ")'></button></td>";
            for (var j = 0; j < all_purchase[i].length - 10; j++) {
                full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
            }
            full_table += "</tr>";
        }

        $('#show_all_purchase').html(full_table);
        temp_total = complete_total;
        product_count++;
        calculate_value();
    });

    function delete_data(arr_no) {
        all_purchase.splice(arr_no, 1);
        var complete_total = 0;
        var full_table = "";
        for (var i = 0; i < all_purchase.length; i++) {
            complete_total += parseFloat(all_purchase[i][12]);
            full_table += "<tr><td style='text-align: center;'><button class='btn btn-danger fa fa-trash-o' onclick='delete_data(" + i + ")'></button></td>";
            for (var j = 0; j < all_purchase[i].length - 10; j++) {
                full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
            }
            full_table += "</tr>";
        }

        $('#show_all_purchase').html(full_table);
        temp_total = complete_total;
        product_count--;
        calculate_value();
    }

    $("#shiping_cost, #custom_cost, #transport_cost, #misc_cost, #discount").on("change paste keyup", function () {
        calculate_value();
    });

    $("#confirm_btn").click(function () {
        var po_no = $('#po_no').val();
        if (po_no == "") {
            alert("Please provide PO No");
        } else {
            var post_data = {
                'all_purchase': all_purchase, 'total_without_extra': temp_total, 'po_no': $('#po_no').val(),
                'supplier': $('#supplier').val(), 'shipping_type': $('#shipping_type').val(), 'shiping_cost': $('#shiping_cost').val(),
                'custom_cost': $('#custom_cost').val(), 'transport_cost': $('#transport_cost').val(),
                'misc_cost': $('#misc_cost').val(), 'total_with_extra': $('#total_cost').val(),
                'discount': $('#discount').val(), 'net_payable': $('#net_payable').val(),
                'paid': $('#paid').val(), 'due': $('#due').val(), 'serial': $('#serial').val(),
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Get_ajax_value/confirm_purchase_order",
                data: post_data,
                success: function () {
                    alert("Entry Successfully");
                    location.reload();
                }
            });
        }
    });

    $('#paid').on('change paste keyup', function () {
        var paid = $('#paid').val();
        var net_payable = $('#net_payable').val();
        if (net_payable === "") {
            net_payable = 0;
        }
        $('#due').val((net_payable - paid).toFixed(2));
    });

</script>
