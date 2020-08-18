<div class="divHeader"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" height="80px" style="border-radius: 15px; text-align: center;">
</div>
<?php if ($print_type == "Invoice") {
    ?>
    <div id="invoice">
            <?php echo form_open_multipart('Edit/print_field_invoice/' . $invoice_no); ?>
            <div class="row" style="padding-top: 10px;" id="no_print1">
                <div class="form-group col-sm-4 col-xs-6" style="display: none;">
                    <input type="text" class="form-control" value="<?php echo $invoice_no; ?>"
                           placeholder="Reference" name="reference_invoice" id="reference_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" value="<?= $address ?>" class="form-control" id="address_invoice" 
                           placeholder="Address" name="address_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="project_name_invoice" 
                           placeholder="Project Name" value="<?= $project_name ?>" name="project_name_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="po_no_invoice" 
                           placeholder="Indent/Requisition/PO" value="<?= $indent_no ?>" name="po_no_invoice">
                </div>
                <div class="form-group col-sm-3 col-xs-6">
                    <input type="text" class="form-control" id="mpr_invoice" 
                           placeholder="Machine Category/Model" value="<?= $mpr_no ?>" name="mpr_invoice">
                </div>
                <div class="form-group col-sm-3 col-xs-6">
                <select name="currency" required id="currency" class="form-control">
                    <option value="">--Currency Select--</option>
                    <option <?php if($currency=="TK") echo "selected" ?> value="TK">TK</option>
                    <option <?php if($currency=="USD") echo "selected" ?> value="USD">USD</option>
                </select>
                    <!-- <input type="text" class="form-control" id="currency" 
                           placeholder="BDT/USD" name="currency"> -->
                </div>
                <div class="form-group col-sm-3 col-xs-6">
                <select name="extra_charge_type"  id="extra_charge_type" class="form-control">
                    <option value="">--Select--</option>
                    <option <?php if($extra_charge_type=="Transport") echo "selected" ?> value="Transport">Transport</option>
                    <option <?php if($extra_charge_type=="Courier ") echo "selected" ?> value="Courier ">Courier </option>
                </select>
                    <!-- <input type="text" class="form-control" id="currency" 
                           placeholder="BDT/USD" name="currency"> -->
                </div>
                <div class="form-group col-sm-3 col-xs-6">
                    <input type="text" onclick="this.select()" class="form-control" id="extra_charge" 
                           placeholder="Cost" value="<?= $extra_charge ?>" name="extra_charge">
                    <input type="hidden"  id="extra_charge_hidden"  value="<?= $extra_charge ?>" name="extra_charge_hidden">
                </div>
                <div class="col-sm-3 box-footer clearfix">
                    <button type="submit" class="pull-left btn btn-success">Confirm <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </form>
        <br>
    <div class="box-body" style="width: 90%; color: black; padding-left: 30px">
        <p style="margin-left: 15px;">
            <a class="btn btn-flat btn-warning fa fa-print" href="<?php echo site_url("show_form/generate_invoice_pdf/".$invoice_no) ?>" target="_blank" ></a>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 14px; font-family: 'Lucida Grande'">
            <?php echo date("d-M-Y", strtotime($date)); ?>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 14px; font-family: 'Lucida Grande'">
           Reference: <span id="show_reference_invoice"><small><?php echo $invoice_no; ?><small></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 14px; font-family: 'Lucida Grande'">
            To
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 14px; font-family: 'Lucida Grande'">
            <?php echo $customer_name; ?>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 14px; font-family: 'Lucida Grande'">
            <b>Address:</b> <span id="show_address_invoice"><?php echo $address; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande'; ">
            Project Name: <span id="show_project_name_invoice"><?php echo $project_name; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
            Indent No/Requisition No/PO No: <span id="show_po_no_invoice"><?php echo $indent_no; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
        Machine Category/Model: <span id="show_mpr_invoice"><?php echo $mpr_no; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande'; font-weight:bold;">
          Status: <?php echo $sales_type; ?>
        </p>
        <p style="text-align:center; color: black; font-size: 25px; font-family: 'Lucida Grande'; font-weight: bold;">
            <u>Invoice</u>
        </p>
        <table class="table table-bordered table-hover" style="margin: 20px;  font-size:12px;">
            <thead>
                <tr>
                    <th style="text-align: center;">SL</th>
                    <th style="text-align: center;">Part Name</th>
                    <th style="text-align: center;">Part No.</th>
                    <th style="text-align: center;">Alt Part No.</th>
                    <!--<th style="text-align: center;">Section</th>-->
                    <th style="text-align: center;">Unit</th>
                    <th style="text-align: center;">P.Type</th>
                    <th style="text-align: center;">Qty</th>
                    <th style="text-align: center;">Unit Price</th>
                    <th style="text-align: center;">Total Price</th>
                    <th style="text-align: center;">Discount(%)</th>
                    <th style="text-align: center;">After Discount T.Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                $count = 0;
                foreach ($all_sales as $all_info) {
                   // $count++;
                    if($all_info[4]>0){
                          $count++;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $count; ?></td>
                        <!-- parts name -->
                        <td style="text-align: center;"><?php echo $all_info[0]; ?></td>
                        <!-- Part No.	 -->
                        <td style="text-align: center;"><?php echo $all_info[1]; ?></td>
                        <!-- Alt Part No. -->
                        <td style="text-align: center;"><?php echo $all_info[11]; ?></td>
                        <!-- Unit -->
                        <td style="text-align: center;"><?php echo $all_info[2]; ?></td>
                        <!-- P.Type	 -->
                        <td style="text-align: center;"><?php echo $payment_type; ?></td>
                        <!-- Qty -->
                        <td style="text-align: center;"><?php echo $all_info[4]; ?></td>
                        <!-- Unit Price -->
                        <td style="text-align: center;"><?php echo $all_info[5]; ?></td>
                        <!-- Total Price -->
                        <td style="text-align: center;"><?php echo $all_info[6]; ?></td>
                        <!-- Discount -->
                        <td style="text-align: center;"><?php echo $all_info[7]; ?></td>
                        <!-- After Discount T.Price -->
                        <td style="text-align: center;"><?php echo ($all_info[4]*$all_info[5])-($all_info[4]*$all_info[5]*$all_info[7])/100; ?></td>
                    </tr>
                <?php } } ?>
                <tr>
                    <td style="text-align: right;" colspan="4"><b>Invoice Total:</b> <?php echo $invoice_total; ?></td>
                    <td style="text-align: right;" colspan="3"><b>Discount:</b> <?php echo $discount; ?></td>
                    <td style="text-align: center; font-weight: bolder;" colspan="2"><span id="extra_charge_type_text"><?php echo $extra_charge_type; ?></span> Charge: <span id="extra_charge_text"><?php echo $extra_charge; ?></span></td>
                    <td style="text-align: center; font-weight: bolder;" colspan="2">Sub Total: <span id="sub_total_text"><?php echo $sub_total+$extra_charge; ?></span></td>
                </tr>
                <tr>
                    <td style="text-align: center;  font-size: 14px;" colspan="11"><b>In Word:</b> <?php echo $this->numbertowords->convert_number($sub_total+$extra_charge); ?> <span id="show_currency"><?php echo $currency; ?></span> Only</td>

                </tr>
            </tbody>
        </table>

        <p style="margin-left: 15px; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande'; font-weight: bold;">
            Thanking You
        </p>
        <div class="row" style="margin-top: 50px; margin-left: 15px;">
            <div class="col-xs-4">
                <p style="font-weight:bold; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
                    Prepared By<br>
                </p>
                <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br>
                </p>
            </div>
            <div class="col-xs-4">
                <p style="font-weight:bold; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
                    Verified By<br>
                </p>
                <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br>
                </p>
            </div>
            <div class="col-xs-4">
                <p style="font-weight:bold; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
                    Approved By<br>
                </p>
                <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br>
                </p>
            </div>

            <div class="col-xs-4">
                <p style="font-weight:bold; text-align:left; color: black; font-size: 15px; font-family: 'Lucida Grande';">
                    Received By<br>
                </p>
                <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br><br><br><br>
                </p>
            </div>
        </div>
    </div>

    </div>
<?php } elseif ($print_type == "Challan") { ?>
    <div id="challan">
            <?php echo form_open_multipart('Edit/print_field_challan/' . $invoice_no); ?>
            <div class="row" style="margin-top: 10px;" id="no_print2">
                <div class="form-group col-sm-4 col-xs-6" style="display: none;">
                    <input type="text" class="form-control" value="<?php echo $invoice_no; ?>"
                           placeholder="Reference" name="reference_challan" id="reference_challan">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="address_challan" 
                           placeholder="Address" value="<?= $address ?>" name="address_challan">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="project_name_challan" 
                           placeholder="Project Name" value="<?= $project_name ?>" name="project_name_challan">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="po_no_challan" 
                           placeholder="Indent/Requisition/PO" value="<?= $indent_no ?>" name="po_no_challan">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="mpr_challan" 
                           placeholder="Machine Category/Model" value="<?= $mpr_no ?>" name="mpr_challan">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <button type="submit" class="pull-left btn btn-success">Confirm <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </form>
<br>
    <div class="box-body" style="width: 90%; color: black;padding-left: 30px;">
        <p style="margin-left: 15px;">
            <a class="btn btn-flat btn-warning fa fa-print" href="<?php echo site_url("show_form/generate_challan_pdf/".$invoice_no) ?>" target="_blank" ></a>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande';">
            <?php echo date("d-M-Y", strtotime($date)); ?>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            Reference: <span id="show_reference_challan"><small><?php echo $invoice_no; ?></small></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            To
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            <?php echo $customer_name; ?>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            <b>Address:</b> <span id="show_address_challan"><?php echo $address; ?></span>
        </p>

        <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
            Project Name: <span id="show_project_name_challan"><?php echo $project_name; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; ">
            Indent No/Requisition No/PO No: <span id="show_po_no_challan"><?php echo $indent_no; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
            Machine Category/Model: <span id="show_mpr_challan"><?php echo $mpr_no; ?></span>
        </p>
        <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
           <b> Status: <?php echo $sales_type; ?></b>
        </p>
        <p style="text-align:center; color: black; font-size: 30px; font-family: 'Lucida Grande'; font-weight: bold;">
            <u>Challan</u>
        </p>
        <table class="table table-bordered table-hover" style="margin: 20px; width: 100%;">
            <thead>
                <tr>
                    <th style="text-align: center;">SL</th>
                    <th style="text-align: center;">Part Name</th>
                    <th style="text-align: center;">Part No.</th>
                    <th style="text-align: center;">Alt Parts No.</th>
                    <th style="text-align: center;">Unit</th>
                    <th style="text-align: center;">Qty</th>
                    <!--<th style="text-align: center;">Remarks</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                $total_qty = 0;
                $count = 0;
                foreach ($all_sales as $all_info) {
                    $total_qty += $all_info[4];
                   
                    if($all_info[4]>0){
                         $count++;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $count; ?></td>
                        <td style="text-align: center;"><?php echo $all_info[0]; ?></td>

                        <td style="text-align: center;"><?php echo $all_info[1]; ?></td>
                        <td style="text-align: center;"><?php echo $all_info[11]; ?></td>

                        <td style="text-align: center;"><?php echo $all_info[2]; ?></td>
                        <td style="text-align: center;"><?php echo $all_info[4]; ?></td>
                        <!--<td style="text-align: center;"><?php echo $all_info[12]; ?></td>-->
                    </tr>
                <?php } } ?>
                <tr>
                    <td style="text-align: right; font-weight: bolder;" colspan="5">Grand Total</td>
                    <td style="text-align: center; font-weight: bolder;"><?php echo $total_qty; ?></td>
                </tr>
            </tbody>
        </table>

        <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
            Thanking You
        </p>
        <div class="row" style="margin-top: 50px; margin-left: 15px;">
            <div class="col-xs-4">
                <p style=" font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                    Prepared By<br>
                </p>
                <p style=" font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br><br><br><br>
                </p>
            </div>
            <div class="col-xs-4">
                <p style="  font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                    Verified By<br>
                </p>
                <p style="text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br><br><br><br>
                </p>
            </div>
            <div class="col-xs-4">
                <p style=" font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                    Approved By<br>
                </p>
                <p style=" font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br><br><br><br>
                </p>
            </div>

            <div class="col-xs-4">
                <p style=" font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                    Received By<br>
                </p>
                <p style="text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                    <br><br><br><br><br>
                </p>
            </div>
        </div>
    </div>
    </div>
<?php
} else {
    echo "<p style='color: red; font-weight: bold; font-size: 20px; text-align: center; margin: 50px 0px 100px 0px;'>No Invoice, Only Challan</p>";
}
?>
<div class="divFooter"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
         alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
</div>


<style>
    @media print {
        :-webkit-scrollbar {
            display: none;
        }
        @page {
            size: A4 portrait; /* DIN A4 standard, Europe */
            margin:0;
        }
        div.divHeader {
            position: fixed;
            height: 80px; /* put the image height here */
            width: 97%; /* put the image width here */
            top: 0;
        }
        div.divFooter {
            position: fixed;
            height: 80px; /* put the image height here */
            width: 97%; /* put the image width here */
            bottom: 0;
        }
        a[href]:after {
            content: none !important;
        }

        #print_button {
            display: none;
        }

        #no_print1 {
            display: none;
        }

        #no_print2 {
            display: none;
        }
    }

    table.table-bordered{
        border: #222 1px solid!important;
    }
    table.table-bordered > thead > tr > th{
        border: #222 1px solid!important;
    }
    table.table-bordered > tbody > tr > td{
        border: #222 1px solid!important;
    }
</style>

<script type="text/javascript">
    $("#reference_invoice, #address_invoice, #project_name_invoice, #po_no_invoice, #mpr_invoice,#currency,#extra_charge,#extra_charge_type").on("change paste keyup", function () {
        var reference_invoice = $('#reference_invoice').val();
        var address_invoice = $('#address_invoice').val();
        var project_name_invoice = $('#project_name_invoice').val();
        var po_no_invoice = $('#po_no_invoice').val();
        var mpr_invoice = $('#mpr_invoice').val();
        var currency = $('#currency').val();
        var extra_charge_hidden = $('#extra_charge_hidden').val()||0;
        var extra_charge = $('#extra_charge').val()||0;
        var extra_charge_type = $('#extra_charge_type').val();
        var sub_total_text = $('#sub_total_text').text()||0;
        var sub_total=sub_total_text-extra_charge_hidden;
        var new_sub_total=parseFloat(sub_total)+parseFloat(extra_charge);
        $('#show_reference_invoice').text(reference_invoice);
        $('#show_address_invoice').text(address_invoice);
        $('#show_project_name_invoice').text(project_name_invoice);
        $('#show_po_no_invoice').text(po_no_invoice);
        $('#show_mpr_invoice').text(mpr_invoice);
        $('#sub_total_text').text(new_sub_total);
        $('#extra_charge_hidden').val(extra_charge);
        $('#extra_charge_type_text').text(extra_charge_type);
        $('#extra_charge_text').text(extra_charge);
    });

    $("#reference_challan, #address_challan, #project_name_challan, #po_no_challan, #mpr_challan").on("change paste keyup", function () {
        var reference_challan = $('#reference_challan').val();
        var address_challan = $('#address_challan').val();
        var project_name_challan = $('#project_name_challan').val();
        var po_no_challan = $('#po_no_challan').val();
        var mpr_challan = $('#mpr_challan').val();

        $('#show_reference_challan').text(reference_challan);
        $('#show_address_challan').text(address_challan);
        $('#show_project_name_challan').text(project_name_challan);
        $('#show_po_no_challan').text(po_no_challan);
        $('#show_mpr_challan').text(mpr_challan);
    });
</script>