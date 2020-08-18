<div class="divHeader"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" height="80px" style="border-radius: 15px; text-align: center;">
</div>
<div id="invoice">
    <?php if($referance_info['confirmed']=="no"): ?>
        <?php echo form_open('Edit/print_field_invoice/'.$invoice_id); ?>
            <div class="row" style="padding-top: 10px;" id="no_print1">
                <div class="form-group col-sm-4 col-xs-6" style="display: none;">
                    <input type="text" class="form-control" value=""
                            placeholder="Reference" name="reference_invoice" id="reference_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="address_invoice" 
                            placeholder="Address" name="address_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="project_name_invoice" 
                            placeholder="Project Name" name="project_name_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="po_no_invoice" 
                            placeholder="Indent/Requisition/PO" name="po_no_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="mpr_invoice" 
                            placeholder="Machine Category/Model" name="mpr_invoice">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="customer_name" 
                            placeholder="Customer Name" name="customer_name">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="sales_type" 
                            placeholder="Sales Type" name="sales_type">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                <select name="currency" required id="currency" class="form-control">
                    <option value="">--Currency Select--</option>
                    <option value="TK">TK</option>
                    <option value="Dollar">Dollar</option>
                </select>
                    <!-- <input type="text" class="form-control" id="currency" 
                            placeholder="BDT/USD" name="currency"> -->
                </div>
                <div class="col-sm-3 box-footer clearfix">
                    <button type="submit" class="pull-left btn btn-success">Confirm <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </form>
    <?php endif; ?>
    <br>
    <div id="print_div">
        <div class="box-body" style="width: 90%; color: black; padding-left: 30px">
            <p style="margin-left: 15px;">
                <button id="print_button" title="Click to Print" type="button" style="text-align: left;"
                        onClick="window.print();" class="btn btn-flat btn-warning fa fa-print"></button>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            Reference: <span id="show_reference_invoice"><small><?= @$referance_info['invoice_id'] ?><small></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
                To
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
            <span id="show_customer_name"><?= @$referance_info['cuatomer_name'] ?></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
                <b>Address:</b> <span id="show_address_invoice">   <?= @$referance_info['address'] ?></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; ">
                Project Name: <span id="show_project_name_invoice"> <?= @$referance_info['project_name'] ?></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                Indent No/Requisition No/PO No: <span id="show_po_no_invoice">   <?= @$referance_info['indent_no'] ?></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
            Machine Category/Model: <span id="show_mpr_invoice">   <?= @$referance_info['mrp_no'] ?></span>
            </p>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight:bold;">
            Status: 
            <span id="show_sales_type"><?= @$referance_info['status'] ?></span>
            </p>
            <p style="text-align:center; color: black; font-size: 30px; font-family: 'Lucida Grande'; font-weight: bold;">
                <u>Invoice</u>
            </p>
            <table class="table table-bordered table-hover" style="margin: 20px; width: 100%; font-size:14px;">
                <thead>
                    <tr>
                        <th style="text-align: center;">SL</th>
                        <th style="text-align: center;">Part Name</th>
                        <th style="text-align: center;">Part No.</th>
                        <th style="text-align: center;">Alt Part No.</th>
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
                <?php $i=1; ?>
                    <?php if(isset($product)): ?>
                        <?php foreach($product as $key=>$value): ?>
                            <?php foreach($value['invoice_no'] as $svalue): ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $svalue['product_name'] ?></td>
                                    <td><?= $svalue['parts_no'] ?></td>
                                    <td><?= $svalue['alt_parts_no'] ?></td>
                                    <td><?= $svalue['unit'] ?></td>
                                    <td><?= $svalue['payment_type'] ?></td>
                                    <td><?= $svalue['product_qty'] ?></td>
                                    <td><?= $svalue['price_per_unit'] ?></td>
                                    <td><?= $svalue['first_total'] ?></td>
                                    <td><?= $svalue['ind_discount'] ?></td>
                                    <td><?= $svalue['total'] ?></td>
                                </tr>
                            <?php endforeach;?>
                        <?php endforeach;?>
                    <?php endif;?>
                    <tr>
                        <td style="text-align: right;" colspan="4"><b>Invoice Total: <?= @$invoice_total;?></b></td>
                        <td style="text-align: right;" colspan="3"><b>Discount: <?= @$total_discount;?></b></td>
                        <td style="text-align: right; font-weight: bolder;" colspan="4">Sub Total: <?= @$sub_total;?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;  font-size: 17px;" colspan="11"><b>In Word: </b><?php echo $this->numbertowords->convert_number($sub_total); ?> <span id="show_currency"><?php echo @$referance_info['currency']; ?></span> Only</td>

                    </tr>
                </tbody>
            </table>
        
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
                Thanking You
            </p>
            <div class="row" style="margin-top: 50px; margin-left: 15px;">
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Prepared By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Verified By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Approved By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>

                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Received By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
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
            margin:0!important;
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
    $("#reference_invoice, #address_invoice, #project_name_invoice, #po_no_invoice, #mpr_invoice,#currency,#customer_name,#sales_type").on("change paste keyup", function () {
        var reference_invoice = $('#reference_invoice').val();
        var address_invoice = $('#address_invoice').val();
        var project_name_invoice = $('#project_name_invoice').val();
        var po_no_invoice = $('#po_no_invoice').val();
        var mpr_invoice = $('#mpr_invoice').val();
        var currency = $('#currency').val();
        var customer_name = $('#customer_name').val();
        var sales_type = $('#sales_type').val();
        $('#show_reference_invoice').text(reference_invoice);
        $('#show_address_invoice').text(address_invoice);
        $('#show_project_name_invoice').text(project_name_invoice);
        $('#show_po_no_invoice').text(po_no_invoice);
        $('#show_mpr_invoice').text(mpr_invoice);
        $('#show_currency').text(currency);
        $('#show_customer_name').text(customer_name);
        $('#show_sales_type').text(sales_type);
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