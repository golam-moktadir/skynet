
<div class="box-body" style="width: 90%; color: black;">
    <div class="box-header" style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <br>
    <p style="margin-left: 15px;">
        <button id="print_button" title="Click to Print" type="button" style="text-align: left;"
                onClick="window.print();" class="btn btn-flat btn-warning fa fa-print"></button>
    </p>
    <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
        <?php echo date("d/M/y", strtotime($date)); ?>
    </p>
    <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
        <strong>Reference:</strong> <span id="show_reference_invoice"><small> <?php echo $invoice_no; ?></small></span>
    </p>
    <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
        To
    </p>
    <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
        <?php echo $customer_name; ?>
    </p>
    <p style="margin-left: 15px; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'">
        <strong>Address:</strong> <span id="show_address_invoice"><?php echo $address; ?></span>
    </p>
<!--<p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
        Status: Bill
    </p>-->
    <p style="text-align:center; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
        <u>Challan</u>
    </p>
    <table class="table table-bordered table-hover" style="margin: 20px; width: 100%;">
        <thead>
            <tr>
                <th style="text-align: center;">SL</th>
                <th style="text-align: center;">Parts Name</th>
                <th style="text-align: center;">Parts No.</th>
                <th style="text-align: center;">Section</th>
                <th style="text-align: center;">Unit</th>
                <th style="text-align: center;">Qty</th>
<!--                <th style="text-align: right;">Unit Price</th>
                <th style="text-align: right;">Amount</th>
                <th style="text-align: right;">Discount</th>
                <th style="text-align: right;">Total Price</th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            $total_price=0;
            $count = 0;
            foreach ($all_sales as $all_info) {
                $total_price += $all_info[6];
                $count++;
                ?>
                <tr>
                    <td style="text-align: center;"><?php echo $count; ?></td>
                    <td style="text-align: center;"><?php echo $all_info[2]; ?></td>
                    <td style="text-align: center;"><?php echo $all_info[3]; ?></td>
                    <td style="text-align: center;"><?php echo $all_info[1]; ?></td>
                    <td style="text-align: center;"><?php echo $all_info[4]; ?></td>
                    <td style="text-align: center;"><?php echo $all_info[6]; ?></td>
    <!--              <td style="text-align: right;"><?php echo $all_info[7]; ?></td>
                        <td style="text-align: right;"><?php echo $all_info[8]; ?></td>
                        <td style="text-align: right;"><?php echo $all_info[9]; ?></td>
                        <td style="text-align: right;"><?php echo $all_info[10]; ?></td>-->
                </tr>
            <?php } ?>
            <tr>
                <td style="text-align: right;" colspan="5">Total</td>
                <td style="text-align: center;"><?php echo $total_price; ?></td>
            </tr>
    <!--            <tr>
                <td style="text-align: right;" colspan="3">Invoice Total: <?php echo $invoice_total; ?></td>
                <td style="text-align: right;" colspan="3">Discount: <?php echo $discount; ?></td>
                <td style="text-align: right; font-weight: bolder;" colspan="4">Sub Total: <?php echo $sub_total; ?></td>
            </tr>
            <tr>
                <td style="text-align: right;" colspan="3">Previous Due: <?php echo $previous_due; ?></td>
                <td style="text-align: right;" colspan="3">Total Amount: <?php echo $complete_total; ?></td>
                <td style="text-align: right; font-weight: bolder;" colspan="4">First Payment: <?php echo $paid; ?></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bolder;" colspan="10">Due Amount: <?php echo $due; ?></td>
            </tr>-->
        </tbody>
    </table>

    <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
        Thank You
    </p>
    <div class="row" style="margin-top: 50px; margin-left: 15px;">
        <div class="col-xs-4">
            <p style="text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                Prepared By<br>
            </p>
<!--            <p style="text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                Tasnim Latif Promi<br>
                Junior Assistant Manager<br>
                Earthmoving Solution Ltd.<br>
                Mob: 01701202367
            </p>-->
        </div>
        <div class="col-xs-4">
            <p style="text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                Verify By<br>
            </p>
<!--            <p style="text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                Hasan Imam Abir<br>
                Asst. Manager (Parts and Operation)<br>
                Earthmoving Solution Ltd.<br>
                Mob: 01701202326
            </p>-->
        </div>

        <div class="col-xs-4">
            <p style="text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                Receive By<br>
            </p>
            <p style="text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                <!--                        Hasan Imam Abir<br>
                                        Asst. Manager (Parts and Operation)<br>
                                        Earthmoving Solution Ltd.<br>
                                        Mob: 01701202326-->
            </p>
        </div>
    </div>
</div>
</div>


<style>
    @media print {
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
        border: grey 0.1px solid;
    }
    table.table-bordered > thead > tr > th{
        border: grey 0.1px solid;
    }
    table.table-bordered > tbody > tr > td{
        border: grey 0.1px solid;
    }
</style>

<!--<script type="text/javascript">
    $("#reference_invoice, #address_invoice").on("change paste keyup", function () {
        var reference_invoice = $('#reference_invoice').val();
        var address_invoice = $('#address_invoice').val();

        $('#show_reference_invoice').text(reference_invoice);
        $('#show_address_invoice').text(address_invoice);
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
</script>-->