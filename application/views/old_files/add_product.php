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
                    <div class="box-body" style="margin-bottom: 10px;">
                        <p style="font-size: 20px;">Add Product</p>
                        <p  style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="po_no">PO No.</label>
                                <input type="text" class="form-control" id="po_no" placeholder="" name="po_no">
                            </div>
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
                                <label for="product_model">Machine Model</label>
                                <input type="text" class="form-control" id="product_model" placeholder="" name="product_model">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chassis">Chassis No.</label>
                                <input type="text" class="form-control" id="chassis" placeholder="" name="chassis">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="brand">Brand</label>
                                <select name="brand" id="brand" required class="form-control">
                                    <option value="">-- Select --</option>
                                    <option  value="XCMG">XCMG</option>
                                    <option  value="Sinotruk">Sinotruk</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                            <label for="product_name">Parts Name</label>
                                <select name="product_name" id="product_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="parts_no">Part No.</label>
                                <input type="text" class="form-control" id="parts_no" placeholder="" name="parts_no">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="alternative_parts_no">Alternative Part No.</label>
                                <input type="text" class="form-control" id="alternative_parts_no" placeholder="" name="alternative_parts_no">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="chinese_name">Chinese Name</label>
                                <input type="text" class="form-control" id="chinese_name" placeholder="" name="chinese_name">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit">Unit</label>
                                <select name="unit" id="unit" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Set">Set</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit_price">Unit Price</label>
                                <input type="text" class="form-control" id="unit_price" placeholder="" name="unit_price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="payment_type">Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-control">
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
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="reminder_level">Reminder Level</label>
                                <input type="text" class="form-control" id="reminder_level" placeholder="" name="reminder_level">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" rows="1"
                                          placeholder="" name="description"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="shelf_details">Shelf Details</label>
                                <textarea type="text" class="form-control" id="shelf_details" rows="1"
                                          placeholder="" name="shelf_details"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
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
                </div>              

                <div class="box-body table-responsive" style="width: 98%; color: black; overflow-x: scroll;">
                    <table id="purchaseList" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Action</th>
                                <th style="text-align: center;">PO No.</th>
                                <th style="text-align: center;">Machine Category</th>
                                <th style="text-align: center;">Section</th>
                                <th style="text-align: center;">Machine Model</th>
                                <th style="text-align: center;">Chassis No.</th>
                                <th style="text-align: center;">Brand</th>
                                <th style="text-align: center;">Parts Name</th>
                                <th style="text-align: center;">Part No.</th>
                                <th style="text-align: center;">Alternative Part No.</th>
                                <th style="text-align: center;">Chinese Name</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Payment Type</th>
                                <th style="text-align: center;">Quantity</th>
                                <th style="text-align: center;">Total</th>
                                <th style="text-align: center;">Reminder Level</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Shelf Details</th>
                                <th style="text-align: center;">Selling U.Price</th>
                            </tr>
                        </thead>
                        <tbody id="show_all_purchase">

                        </tbody>
                        <tr>
                            <td colspan="19">
                                <button type="button" class="pull-left btn btn-info" style="margin-top: 20px;"
                                        id="confirm_btn">Confirm <i class="fa fa-arrow-circle-right"></i></button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="all_list">
                    <div class="box-body table-responsive scroll_hide"
                         style="width: 98%; overflow-x: scroll; color: black;">
                        <button onclick="scrollDown();" class="btn btn-info"
                                style="float: right; margin: 20px;"
                                id="down_btn">Down
                        </button>
                        <table id="pagination_search" class="table table-bordered table-hover list_table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Action</th>

                                    <th style="text-align: center;">PO No.</th>
                                    <th style="text-align: center;">Machine Category</th>
                                    <th style="text-align: center;">Section</th>
                                    <th style="text-align: center;">Machine Model</th>
                                    <th style="text-align: center;">Chassis No.</th>
                                    <th style="text-align: center;">Brand</th>
                                    <th style="text-align: center;">Parts Name</th>
                                    <th style="text-align: center;">Part No.</th>
                                    <th style="text-align: center;">Chinese Name</th>
                                    <th style="text-align: center;">Unit</th>
                                    <th style="text-align: center;">U.Price</th>
                                    <th style="text-align: center;">P.Type</th>
                                    <th style="text-align: center;">Qty</th>
                                    <th style="text-align: center;">Total Price</th>
                                    <th style="text-align: center;">R.Level</th>
                                    <th style="text-align: center;">Description</th>
                                    <th style="text-align: center;">Shelf Details</th>
                                    <th style="text-align: center;">Selling U.Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_value as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center; white-space: nowrap" id="no_print3" >
                                            <?php
                                            echo anchor('Delete/add_product/' . $single_value->record_id, ' ', 'style="margin: 5px;" '
                                                    . 'title="Delete" class="btn btn-danger fa fa-trash-o"').
                                                    anchor('Show_edit_form/add_product/' . $single_value->record_id, ' ', 'style="margin: 5px;" '
                                                    . 'title="Edit" class="btn btn-success fa fa-edit"');
                                            ?>
                                        </td>

                                        <td style="text-align: center;"><?php echo $single_value->po_no; ?></td>

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
                                        <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td><td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->total_price; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->description; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->selling_price; ?></td>
                                    </tr>
                                    <?php
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
    $('#product_type').on('change paste keyup', function () {
        var product_type = $('#product_type').val();
        // console.log(product_type);
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

    $("#save_btn").click(function () {
        var po_no = $('#po_no').val();
        if(po_no=="")
        {
            alert("PO No Can't be Empty!");
            return;
        }
        // if(po_no)
        var product_type = $('#product_type').val();
        var section = $('#section').val();
        var product_model = $('#product_model').val();
        var chassis = $('#chassis').val();
        var product_name = $('#product_name').val();
        var parts_no = $('#parts_no').val();
        var alternative_parts_no = $('#alternative_parts_no').val();
        var chinese_name = $('#chinese_name').val();
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
        all_purchase[product_count] = new Array(po_no, product_type, section, product_model, chassis, brand, product_name,
                parts_no, alternative_parts_no, chinese_name, unit, unit_price, payment_type, quantity, total_price,
                reminder_level, description, shelf_details, selling_price);
        var complete_total = 0;
        var full_table = "";
        for (var i = 0; i < all_purchase.length; i++) {
            complete_total += parseFloat(all_purchase[i][13]);
            full_table += "<tr><td style='text-align: center;'><button class='btn btn-danger fa fa-trash-o' onclick='delete_data(" + i + ")'></button></td>";
            for (var j = 0; j < all_purchase[i].length; j++) {
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
            for (var j = 0; j < all_purchase[i].length; j++) {
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
        var post_data = {
            'all_purchase': all_purchase,
//            'total_without_extra': temp_total, 'po_no': $('#po_no').val(),
//            'supplier': $('#supplier').val(), 'shipping_type': $('#shipping_type').val(), 'shiping_cost': $('#shiping_cost').val(),
//            'custom_cost': $('#custom_cost').val(), 'transport_cost': $('#transport_cost').val(),
//            'misc_cost': $('#misc_cost').val(), 'total_with_extra': $('#total_cost').val(),
//            'discount': $('#discount').val(), 'net_payable': $('#net_payable').val(),
//            'paid': $('#paid').val(), 'due': $('#due').val(), 'serial': $('#serial').val(),
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/confirm_machine_add",
            data: post_data,
            success: function () {
                alert("Entry Successfully");
                location.reload();
            }
        });
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
