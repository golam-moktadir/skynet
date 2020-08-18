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
<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
        cursor: pointer;
    }
    #img{
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        }
    #img img{
        height:64px;
        width:64px;
    }

</style>
<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <div id="overlay">
                <div id="img">
                    <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="">
                </div>
            </div>
            <section class="col-xs-12 connectedSortable"> 

                <div class="box-body table-responsive" style="width: 98%; color: black;">
                    <table id="purchaseList" class="table table-bordered table-hover">
                        <tr>

                            <td colspan="2">
                                PO No.<select id="po_no" name="po_no" class="form-control">
                                    <option value="">--Select--</option>
                                    <?php foreach ($inserted_po as $info) { ?>
                                        <option value="<?php echo $info->po_no; ?>">
                                            <?php echo $info->po_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td colspan="2">
                                Amount<input type="text" class="form-control" id="amount" placeholder="" name="amount" readonly>
                            </td>
                            <td colspan="2">
                                Supplier<select name="supplier" id="supplier" class="form-control" name="supplier">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($manufacture_company as $info) { ?>
                                        <option value="<?php echo $info->manufacture_company; ?>">
                                            <?php echo $info->manufacture_company; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td colspan="2">
                                Shipping Type<select name="shipping_type" id="shipping_type" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Ship">Ship</option>
                                    <option value="DHL">DHL</option>
                                    <option value="Air">Air</option>
                                    <option value="By Hand">By Hand</option>
                                    <option value="Local">Local</option>
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
                        </tr>
                        <tr>
                            <td colspan="2">
                                Mixed Cost<input type="text" class="form-control" id="misc_cost" placeholder="" name="misc_cost">
                            </td>
                            <td colspan="2">
                                Total Price<input type="text" class="form-control" id="total_cost" placeholder="" name="total_cost" readonly>
                            </td>
                            <td colspan="2">
                                Discount<select name="discount" id="discount" class="form-control">
                                    <option value="">-- Select --</option>
                                    <?php for ($i = 0; $i <= 30; $i++) { ?>
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
                            <td colspan="2"></td>
                        </tr>
                    </table>
                </div>
                <div id="show_all_purchase" style="overflow-x: scroll;">

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
                                 alt="Logo"  height="85px" style="border-radius: 10px;">
                        </div>
                        <p style="color: #066; font-size: 20px; text-align: center;">All Purchase Details</p>
                        <?php echo $this->session->flashdata("msg"); ?>
<!--                        <input type="text" name="our_search" id="our_search"
                               class="form-control" style="float: right; width: 150px;">-->
                        <div class="form-group col-sm-3 col-xs-12" style="margin: 20px;">
                            <label for="search_po_no">Select PO No.</label>
                            <select id="search_po_no" name="search_po_no" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">--Select--</option>
                                <?php foreach ($all_po as $info) { ?>
                                    <option value="<?php echo $info->po_no; ?>">
                                        <?php echo $info->po_no; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3 col-xs-12"  style="margin: 20px;">
                            <label for="search_brand">Brand</label>
                            <select name="search_brand" id="search_brand" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">-- Select --</option>
                                <option value="XCMG">XCMG</option>
                                <option value="Sinotruk">Sinotruk</option>
                            </select>
                        </div>
                        <button type="button" class="pull-left btn btn-info" style="margin-top: 48px;"
                                id="search_now">Search <i class="fa fa-arrow-circle-right"></i></button>
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
                                    <th style="text-align: center;">Part No.</th>
                                    <th style="text-align: center;">Image</th>
                                    <th style="text-align: center;">Chinese Name</th>
                                    <th style="text-align: center;">Unit</th>
                                    <th style="text-align: center;">U.Price</th>
                                    <th style="text-align: center;">Discount</th>
                                    <th style="text-align: center;">After Discount U.P</th>
                                    <th style="text-align: center;">P.Type</th>
                                    <th style="text-align: center;">Qty</th>
                                    <th style="text-align: center;">Total Price</th>
                                    <th style="text-align: center;">R.Level</th>
                                    <th style="text-align: center;">Description</th>
                                    <th style="text-align: center;">Shelf Details</th>
                                    <th style="text-align: center;">Selling U.Price</th>
                                    <th style="text-align: center;">Supplier</th>
                                    <th style="text-align: center;">Shipping Type</th>
                                    <th style="text-align: center;">Serial</th>
                                    <th style="text-align: center;">Others Cost</th>
                                    <th style="text-align: center;">Total Cost</th>

                                </tr>
                            </thead>
                            <tbody>
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
        padding:2px;
        border: grey 0.1px solid;
        font-size:12px;
    }
    .list_table.table-bordered > tbody > tr > td{
        padding:2px;
        font-size:12px; 
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
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script type="text/javascript">
    $('.confirmation').on('click', function () {
            return confirm('Are you sure?');
        });
    $('#po_no').on('change paste keyup', function () {
        var po_no = $('#po_no').val();
        var post_data = {
            'po_no': po_no,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_all_by_po",
            data: post_data,
            success: function (data) {
                $('#show_all_purchase').html(data);
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_all_by_po_total",
            data: post_data,
            success: function (data) {
                $('#amount').val(data);
                $('#total_cost').val(data);
            }
        });
    });
    $("#shiping_cost, #custom_cost, #transport_cost, #misc_cost, #discount").on("change paste keyup", function () {
        calculate_value();
    });

    $("#confirm_btn").click(function () {
        var post_data = {
            'total_without_extra': $('#amount').val(), 'po_no': $('#po_no').val(),
            'supplier': $('#supplier').val(), 'shipping_type': $('#shipping_type').val(), 'shiping_cost': $('#shiping_cost').val(),
            'custom_cost': $('#custom_cost').val(), 'transport_cost': $('#transport_cost').val(),
            'misc_cost': $('#misc_cost').val(), 'total_with_extra': $('#total_cost').val(),
            'discount': $('#discount').val(), 'net_payable': $('#net_payable').val(),
            'paid': $('#paid').val(), 'due': $('#due').val(), 'serial': $('#serial').val(),
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/confirm_machine_purchase",
            data: post_data,
            success: function (data) {
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

    $('#search_now').on('click', function () {
        
        var search_po_no = $('#search_po_no').val();
        var search_brand = $('#search_brand').val();
        var post_data = {
            'search_po_no': search_po_no, 'brand': search_brand,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/search_purchase_product",
            data: post_data,
            beforeSend:function(){
                 $("#overlay").show();
            },
            success: function (data) {
                var option=$(".selectpicker");
                option.selectpicker("val","");
                option.selectpicker("refresh");
                $('#pagination_search').html(data);
                $("#overlay").hide();
            },
            complete:function(){
                $("#overlay").hide();
            }
        });
    });

    function calculate_value() {
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

        var total_cost = parseFloat(amount) + parseFloat(shiping_cost) + parseFloat(custom_cost) +
                parseFloat(transport_cost) + parseFloat(misc_cost);
        var net_payable = total_cost - parseFloat(total_cost * (discount / 100));
        $('#total_cost').val((total_cost).toFixed(2));
        $('#net_payable').val((net_payable).toFixed(2));
        $('#paid').val("");
        $('#due').val("");
    }
</script>
