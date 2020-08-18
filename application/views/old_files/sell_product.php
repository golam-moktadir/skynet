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
}

?>
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
        <section class="col-xs-12 connectedSortable" id="full_page">
            <div class="row">
                <div style="color: black; margin-bottom: 5px;">
                    <?php echo form_open_multipart('Insert/sell_product'); ?>
                    <div class="box-body">
                        <p id="empty_msg" style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <p  id="" style="text-align: center;"><span id="" style="margin-right:15px">Available Qty: <span id="avail_qty"></span></span><span id="" style="margin-left:15px" class="">Pending Qty: <span id="pending_qty"></span></span> <span id="" style="margin-left:15px" class="">Average Price: <span id="average_price"></span></span></p>
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="date">Date</label>
                            <input type="text" class="form-control new_datepicker" id="date"
                                   value="<?php echo date('Y-m-d'); ?>" placeholder="Date" name="date">
                        </div>
                        
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="parts_name">Parts Name</label>
                            <select name="parts_name" id="parts_name" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">-- Select --</option>
                                <?php if(isset($parts_name)): ?>
                                        <?php foreach($parts_name as $value): ?>
                                             <option value="<?php echo htmlentities($value->product_name); ?>"><?php echo $value->product_name; ?></option>
                                        <?php endforeach; ?>
                                <?php endif; ?> 
                            </select>
                        </div>
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="parts_no">Part No.</label>
                            <select name="parts_no" id="parts_no" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">-- Select --</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="alt_parts_no">Alt Part No.</label>
                            <select name="alt_parts_no" id="alt_parts_no" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">-- Select --</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="unit">Unit</label>
                            <input type="text" class="form-control" id="unit" placeholder=""
                                   name="unit" readonly>
                        </div>
                        <?php if(isset($invoice_info)): ?>
                            <input type="hidden" value="<?= $invoice_info['sales_type'] ?>" class="form-control" id="sales_type" placeholder=""
                                   name="sales_type" readonly>
                        <?php else:?>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="sales_type">Sales Type</label>
                                <select id="sales_type" name="sales_type" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Bill">Bill</option>
                                    <option value="Under Warranty">Under Warranty</option>
                                    <option value="Policy Support">Policy Support</option>
                                    <option value="Goodwill">Goodwill</option>
                                    <option value="Along With Machine">Along With Machine</option>
                                    <option value="Service Bill">Service Bill</option>
                                    <option value="Replacement">Replacement</option>
                                    <option value="Wrong Parts Exchange">Wrong Parts Exchange</option>
                                    <option value="Wrong Parts Exchange Bill">Wrong Parts Exchange Bill</option>
                                    <option value="LC">LC</option>
                                    <option value="Loan Return">Loan Return</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        <?php endif;?>

                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="product_qty">Product Quantity </label>
                            <input type="text" class="form-control" id="product_qty" placeholder="Product Qty"
                                   value="1" name="product_qty">
                        </div>
                        <?php if(isset($invoice_info)): ?>
                            <?php if($invoice_info['sales_type']=="Bill" || $invoice_info['sales_type']=="LC" || $invoice_info['sales_type']=="Service Bill" || $invoice_info['sales_type']=="Wrong Parts Exchange Bill"): ?>
                                <div style="display: block;" id="only_bill">
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="selling_price">Unit Price</label>
                                        <input type="text" class="form-control" id="selling_price" placeholder="Unit Price"
                                            name="selling_price">
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="total_price">Amount</label>
                                        <input type="text" class="form-control" id="total_price" placeholder=""
                                            value="0" name="total_price" readonly>
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="ind_discount">Discount(%)</label>
                                        <input type="text" class="form-control" id="ind_discount" placeholder=""
                                             name="ind_discount" >
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="sub_total">Total Price</label>
                                        <input type="text" class="form-control" id="sub_total" placeholder=""
                                            value="0" name="sub_total" readonly>
                                    </div>

                                </div>
                            <?php endif; ?>
                        <?php else:?>
                                <div style="display: none;" id="only_bill">
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="selling_price">Unit Price</label>
                                        <input type="text" class="form-control" id="selling_price" placeholder="Unit Price"
                                            name="selling_price">
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="total_price">Amount</label>
                                        <input type="text" class="form-control" id="total_price" placeholder=""
                                            value="0" name="total_price" readonly>
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="ind_discount">Discount(%)</label>
                                        <input type="text" class="form-control" id="ind_discount" placeholder=""
                                             name="ind_discount" >
                                    </div>
                                    <div class="form-group col-sm-2 col-xs-12">
                                        <label for="sub_total">Total Price</label>
                                        <input type="text" class="form-control" id="sub_total" placeholder=""
                                            value="0" name="sub_total" readonly>
                                    </div>

                                </div>
                        <?php endif; ?>
                        <?php if(isset($invoice_no) && $invoice_no!='' ): ?>
                        <input type="hidden" value="<?= $invoice_no ?>" id="invoice_no" name="invoice_no">
                        <?php else:?>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="client">Client</label>
                                <div class="input-group">
                                    <select name="client" id="client" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">--Select--</option>
                                        <?php foreach ($all_client as $info) { ?>
                                            <option value="<?php echo $info->name . "#" . $info->record_id; ?>">
                                                <?php echo "$info->name [ID: $info->record_id]"; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" class="form-control" id="new_customer"
                                        placeholder="New Client Name"
                                        name="new_customer" style="display: none">
                                    <span class="input-group-addon">
                                        <button type="button" id="c_plus" style="height: 20px;"
                                                class="btn btn-success fa fa-plus-square btn-sm"></button>
                                        <button type="button" id="c_back" style="height: 20px; display:none;"
                                                class="btn btn-info fa fa-backward btn-sm"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="reference">Reference No.</label>
                                <select name="reference" id="reference" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <option value="EMSL_XCMG_<?php echo date("Y"); ?>">EMSL_XCMG_<?php echo date("Y"); ?></option>
                                    <option value="EMSL_ST_<?php echo date("Y"); ?>">EMSL_ST_<?php echo date("Y"); ?></option>
                                    <option value="ATL_<?php echo date("Y"); ?>">ATL_<?php echo date("Y"); ?></option>
                                </select>
                            </div>
                        <?php endif;?>
                        <div class="form-group col-sm-2 col-xs-12">
                            <label for="remarks">Remarks</label>
                            <input type="text" class="form-control" id="remarks" placeholder=""
                                   name="remarks">
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="margin-top: 27px; text-align: left;" type="button"
                                class="pull-right btn btn-success" id="save_btn">
                            Add <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>

            <div>
                <div class="box-body table-responsive" style="width: 98%; color: black;">
                    <table id="salesList" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Action</th>
                                <th style="text-align: center;">Parts Name</th>
                                <th style="text-align: center;">Part No.</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Sales Type</th>
                                <th style="text-align: center;">Product Quantity </th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Amount</th>
                                <th style="text-align: center;">Discount</th>
                                <th style="text-align: center;">Total Price</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Remarks</th>
                                <th style="text-align: center;">Alt Part No.</th>
                                <th style="text-align: center;">Brand</th>
                            </tr>
                        </thead>
                        <tbody id="show_all_sales">

                        </tbody>
                        <tr <?php if(isset($invoice_info) && ($invoice_info['sales_type']=="Bill" || $invoice_info['sales_type']=="LC" || $invoice_info['sales_type']=="Service Bill" || $invoice_info['sales_type']=="Wrong Parts Exchange Bill")) echo ''; else echo 'style="display:none"' ?>  id="only_bill_table">
                            <td colspan="2">
                            <input type="hidden" class="form-control" id="previous_due"value="0" name="previous_due" readonly="">
                                Sub Total<input type="text" class="form-control" id="complete_total"
                                                value="0" style="color: black; border: black 2px solid;"
                                                name="complete_total" readonly>
                            </td>
                            <td colspan="4">
                                S.Total Discount<input type="text" class="form-control" id="discount"
                                                       style="color: black; border: black 2px solid;"
                                                       value="0" placeholder="Discount" name="discount">
                            </td>
                            <td colspan="2">
                                Pay<input type="text" class="form-control" id="pay"
                                          value="0" style="color: black; border: black 2px solid;" name="pay">
                            </td>
                            <td colspan="2">
                                Due<input type="text" class="form-control" id="due"
                                          value="0" style="color: black; border: black 2px solid;" name="due"
                                          readonly>
                            </td>
                            <td colspan="3">
                                P.Type
                                <select id="payment_type" name="payment_type" class="form-control"
                                        style="color: black; border: black 2px solid;">
                                    <option value="N/A">--Select--</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Cheque">Cheque</option>
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
                        <button style="margin-top: -10px;" type="button" class="pull-right btn btn-success"
                                id="sell_btn">Confirm <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>


            <div style="padding: 5px;">
                <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                    <p style="color: black; font-size: 20px; text-align: center;"><u>All Info.</u></p>
                    <div class="form-group col-sm-3 col-xs-12">
                        <label for="search_invoice">Select Reference No.</label>
                        <select id="search_invoice" name="search_invoice" class="form-control selectpicker"
                                data-live-search="true">
                            <option value="">--Select--</option>
                            <?php foreach ($invoice as $info) { ?>
                                <option value="<?php echo $info->invoice_no; ?>">
                                    <?php echo $info->invoice_no; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <table id="pagination_search" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Action</th>
                                <th style="text-align: center;">Reference No.</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Client</th>
                                <th style="text-align: center;">Product Details</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Sales Type</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Qty </th>
                                <th style="text-align: center;">Amount</th>
                                <th style="text-align: center;">Discount</th>
                                <th style="text-align: center;">Total</th>
                                <th style="text-align: center;">S.Total</th>
                                <th style="text-align: center;">Total Discount</th>
                                <th style="text-align: center;">G.Total</th>
                                <th style="text-align: center;">Paid</th>
                                <th style="text-align: center;">Due</th>
                                <th style="text-align: center;">Payment</th>

                                <th style="text-align: center;">Sold By</th>
                                <th style="text-align: center;">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($all_sales)): ?>
                                <?php foreach($all_sales as $s_key=>$s_value): ?>
                                        <?php $i=1; ?>
                                        <?php foreach($s_value['invoice_no'] as $key=>$value): ?>
                                            
                                            <tr>
                                                <?php if($i==1): ?>
                                                    <td class="text-center"  rowspan="<?php echo $s_value['total_invoice']; ?>">
                                                        <a style="margin: 5px;"  class="btn btn-success fa fa-print btn-sm" title="Print Invoice" href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $value['invoice_no']; ?>/invoice_btn"></a>
                                                        <a style="margin: 5px;"  class="btn btn-warning fa fa-print btn-sm" title="Print Challan" href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $value['invoice_no']; ?>/challan_btn"> </a>
                                                        <a style="margin: 5px;"  class="btn btn-primary fa fa-plus btn-sm" title="Add Product" href="<?php echo base_url(); ?>Show_form/sales/main/<?php echo $value['invoice_no']; ?>"> </a>
                                                            <?php if(check_exits_payment($value['invoice_no'])): ?>
                                                                <a style="margin: 5px;"  class="btn btn-info fa fa-edit btn-sm" title="Edit" href="<?php echo base_url(); ?>Show_edit_form/sell_product/<?php echo $value['invoice_no']; ?>/edit"> </a>
                                                            <?php endif; ?>
                                                        <?php  if($this->session->ses_user_type=="admin"): ?>
                                                            <a style="margin: 5px;"  onclick="return confirm('Are You Sure Delete This Referance No?')" class="btn btn-danger fa fa-trash-o btn-sm" title="Delete" href="<?php echo base_url(); ?>Delete/sell_product/<?php echo $value['invoice_no']; ?>"></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center"  rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['invoice_no']; ?> </td>
                                                    <td class="text-center"  rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo date('d/m/y', strtotime($value['date'])); ?></td>
                                                    <td class="text-center"  rowspan="<?php echo $s_value['total_invoice']; ?>">
                                                        <?php if ($value['client_id'] == "New"): ?>
                                                            <?= $value['client_name'] ?>
                                                        <?php else:?>
                                                        <?= $value['client_name'] . ' [ID: ' . $value['client_id'] . ']' ?>
                                                        <?php endif; ?>
                                                    </td>
                                                <?php endif; ?>
                                                <td style="text-align: left; white-space: nowrap;">
                                                    <b>Parts Name: </b><?php echo $value['product_name']; ?></b><br>
                                                    <b>Part No: </b><?php echo $value['parts_no']; ?></b><br />
                                                    <b>Alt.Part No: </b><?php echo $value['alt_parts_no']; ?></b>
                                                </td>
                                                <td class="text-center"><?php echo $value['unit']; ?></td>
                                                <td class="text-center"><?php echo $value['sales_type']; ?></td>
                                                <td class="text-center"><?php echo $value['price_per_unit']; ?></td>
                                                <td class="text-center"><?php echo $value['product_qty']; ?></td>
                                                <td class="text-center"><?php echo $value['first_total']; ?></td>
                                                <td class="text-center"><?php echo $value['ind_discount']; ?>%</td>
                                                <td class="text-center"><?php echo $value['total']; ?></td>
                                            <?php if($i==1): ?>  
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['sub_total']; ?></td>
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['discount']; ?></td>
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['complete_total']; ?></td>
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['paid']; ?></td>
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>"><?php echo $value['due']; ?></td>
                                                <td class="text-center" rowspan="<?php echo $s_value['total_invoice']; ?>">
                                                    <?php if ($value['payment_type'] == "Cheque"): ?>
                                                        <b>Name: </b><?php echo $value['bank_name']; ?><br>
                                                        <b>A/C NO: </b><?php echo $value['account_no']; ?><br>
                                                        <b>C. NO: </b><?php echo $value['cheque_no']; ?>
                                                    <?php else: ?>
                                                        <?= $value['payment_type']; ?> 
                                                    <?php endif; ?>
                                                </td>
                                                <td rowspan="<?php echo $s_value['total_invoice']; ?>" class="text-center"><?php echo $value['sold_by']; ?></td>
                                            <?php endif; ?>
                                                <td class="text-center"><?php echo $value['remarks']; ?></td>
                                            </tr>
                                        <?php if($i==$s_value['total_invoice']) $i=0 ?>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="20" class="text-center">
                                    <!-- pagination -->
                                        <?php echo $links ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </section>
</aside>

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
                $('#parts_name').html(data);
                $('#parts_name').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_brand_name",
            data: post_data,
            dataType:"json",
            success: function (data) {
                $('#brand').val(data);
            }
        });
    });


    $('#parts_name').on('change paste keyup', function () {
        var parts_name = $('#parts_name').val();
        var post_data = {
            'parts_name': parts_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_parts_no_by_name",
            data: post_data,
            success: function (data) {
                $('#parts_no').html(data);
                $('#parts_no').selectpicker('refresh');
            }
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_alt_parts_no_by_name",
            data: post_data,
            success: function (data) {
                $('#alt_parts_no').html(data);
                $('#alt_parts_no').selectpicker('refresh');
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_unit",
            data: post_data,
            success: function (data) {
                $('#unit').val(data);
            }
        });


        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_avail_qty",
            data: post_data,
            datatype:"json",
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
                $('#avail_qty').text(jsonData.present_qty);
                $('#pending_qty').text(jsonData.pending_qty);
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
                    $('#average_price').text(data);
                }
                else{
                    $('#average_price').text(0.00);
                }
            }
        });
    });
    $("#parts_no").on('change pase keyup',function(){
        var parts_name = $("#parts_name").val();
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
                $('#avail_qty').text(jsonData.present_qty);
                $('#pending_qty').text(jsonData.pending_qty);
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
                    $('#average_price').text(data);
                }
                else{
                    $('#average_price').text(0.00);
                }
            }
        });
    });

    $('#sales_type').on('change paste keyup', function () {
        var sales_type = $('#sales_type').val();
        if (sales_type == "Bill" || sales_type == "Service Bill" || sales_type == "Wrong Parts Exchange Bill" || sales_type == "LC") {
            $('#only_bill').show();
            $('#only_bill_table').show();
        } else {
            $('#only_bill').hide();
            $('#only_bill_table').hide();
        }
    });
    var c_f = 0;

    $('#c_plus').on('click', function () {
        $('#client').selectpicker('hide');
        $('#new_customer').show();
        $('#c_back').show();
        $('#c_plus').hide();
        $('#client').val('');
        $('#client').selectpicker('refresh');
        $('#point').text(0);
        $('#previous_due').val(0);
        $('#complete_total').val(0);
        $('#due').val(0);
        c_f = 1;
    });

    $('#c_back').on('click', function () {
        $('#new_customer').hide();
        $('#c_back').hide();
        $('#client').selectpicker('show');
        $('#c_plus').show();
        $('#new_customer').val('');
        c_f = 0;
    });

    var temp_total = 0;
    var all_sales = new Array();
    var product_count = 0;

    $("#selling_price, #product_qty, #ind_discount").on("change paste keyup", function () {
        var selling_price = $('#selling_price').val();
        if (selling_price == "") {
            selling_price = 0;
        }
        var product_qty = $('#product_qty').val();
        if (product_qty == "") {
            product_qty = 1;
        }

        var total = parseFloat(selling_price) * parseFloat(product_qty);
        $('#total_price').val(total);

        var ind_discount = $('#ind_discount').val();
        if (ind_discount == "") {
            ind_discount = 0;
        }

        var sub_total = parseFloat(total) - parseFloat(total * (ind_discount / 100));
        $('#sub_total').val(sub_total);
        $('#complete_total').val(sub_total);
    });

    $("#payment_type").on("change paste keyup", function () {
        var payment_type = $('#payment_type').val();
        if (payment_type == "Cheque") {
            $("#cheque").show();
        } else {
            $("#cheque").hide();
        }
    });

    $("#save_btn").click(function () {
        var previous_due = $('#previous_due').val();
        var parts_name = $('#parts_name').val();
        var parts_no = $('#parts_no').val();
        var alt_parts_no = $('#alt_parts_no').val();
        var unit = $('#unit').val();
        var sales_type = $('#sales_type').val();
        var product_qty = $('#product_qty').val();
        var avail_qty = $('#avail_qty').text();
        var pending_qty = $('#pending_qty').text();
        if(product_qty>(avail_qty-pending_qty))
        {
            alert("No Available  qty");
            return;
        }
        var selling_price = $('#selling_price').val();
        var total_price = $('#total_price').val();
        var ind_discount = $('#ind_discount').val();
        var sub_total = $('#sub_total').val();
        var brand = $('#brand').val();
        var date = $('#date').val();
//        var client_type = $('#client_type').text();
        var remarks = $('#remarks').val();

        all_sales[product_count] = new Array(parts_name, parts_no, unit,
                sales_type, product_qty, selling_price, total_price, ind_discount, sub_total, date, remarks, alt_parts_no,brand);
        var complete_total = 0;
        var full_table = "";
        for (var i = 0; i < all_sales.length; i++) {
            complete_total += parseFloat(all_sales[i][8]);
            full_table += "<tr><td style='text-align: center;'><button class='btn btn-danger fa fa-trash-o' onclick='delete_data(" + i + ")'></button></td>";
            for (var j = 0; j < all_sales[i].length; j++) {
                full_table += "<td style='text-align: center;'>" + all_sales[i][j] + "</td>";
            }
            full_table += "</tr>";
        }

        $('#show_all_sales').html(full_table);
        temp_total = complete_total;
        $('#complete_total').val(parseFloat(temp_total));
        $('#discount').val(0);
        $('#pay').val(0);
        $('#due').val(parseFloat(temp_total));

        product_count++;
    });

    function delete_data(arr_no) {
        var previous_due = $('#previous_due').val();
        all_sales.splice(arr_no, 1);
        var complete_total = 0;
        var full_table = "";
        for (var i = 0; i < all_sales.length; i++) {
            complete_total += parseFloat(all_sales[i][8]);
            full_table += "<tr><td style='text-align: center;'><button class='btn btn-danger fa fa-trash-o' onclick='delete_data(" + i + ")'></button></td>";
            for (var j = 0; j < all_sales[i].length; j++) {
                full_table += "<td style='text-align: center;'>" + all_sales[i][j] + "</td>";
            }
            full_table += "</tr>";
        }

        $('#show_all_sales').html(full_table);
        temp_total = complete_total;
        $('#show_all_sales').html(full_table);
        $('#complete_total').val(parseFloat(temp_total));
        $('#discount').val(0);
        $('#pay').val(0);
        $('#due').val(parseFloat(temp_total));
        product_count--;
    }


    $("#discount, #pay").on("change paste keyup", function () {
        var previous_due = $('#previous_due').val();
        var temp_discount = $('#discount').val();
        var discount = parseFloat($('#discount').val());
        var pay = parseFloat($('#pay').val());
        if(temp_discount==""){
            $('#due').val($('#sub_total').val());
            // $('#complete_total').val($('#sub_total').val());
        }
        if (discount >= 0) {
            var final_total = (parseFloat(temp_total)) - discount;
            var due = final_total - pay;
            // $('#complete_total').val(final_total);
            $('#due').val(due);
        }
    });

    $("#sell_btn").click(function () {
        
        var invoice_no = $('#invoice_no').val();
        if(invoice_no==null)
        {
            var client_name = $('#new_customer').val();
            if (client_name.trim() == "" && $('#client').val() != "") {
                var client_name = "";
                var client_name_id = $('#client').val();
            } else {
                var client_name_id = "New";
            }
        }
        var previous_due = $('#previous_due').val();
        var discount = $('#discount').val();
        var complete_total = $('#complete_total').val();
        var pay = $('#pay').val();
        var due = $('#due').val();
        var payment_type = $('#payment_type').val();
        var bank_name = $('#bank_name').val();
        var account_no = $('#account_no').val();
        var cheque_no = $('#cheque_no').val();
        var reference = $('#reference').val();
        var post_data = {
            "invoice_no":invoice_no,'client_name': client_name, 'client_name_id': client_name_id, 'previous_due': previous_due,
            'discount': discount, 'complete_total': complete_total, 'invoice_total': temp_total,
            'pay': pay, 'due': due, 'all_sales': all_sales, 'payment_type': payment_type,
            'bank_name': bank_name, 'account_no': account_no, 'cheque_no': cheque_no, 'reference': reference,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/sales_success_msg2",
            data: post_data,
            success: function (data) {
                $('#full_page').html(data);
            }
        });
    });

    $('#search_invoice').on('change paste keyup', function () {
        var search_invoice = $('#search_invoice').val();
        var post_data = {
            'search_invoice': search_invoice,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/search_sales_product",
            data: post_data,
            success: function (data) {
                $('#pagination_search').html(data);
            }
        });
    });
</script>

<style>
    .zoom {
        width: 80px;
        height: 80px;
    }

    #pagination_search_paginate {
        float: left !important;
    }
</style>
<!--<script type="text/javascript">
    window.onload = function () {
        $('#pagination_search').dataTable({
            "ordering": false,
            "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
            fixedHeader: {
                header: true,
                footer: true,
                headerOffset: 40
            }
        });
    };
</script>-->