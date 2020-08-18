<div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
    <p style="padding-left: 10px;">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-flat btn-warning">Print
        </button>
    </p>
    <div class="box-header" style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <br>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="text-align: center;">No.</th>
            <th style="text-align: center;">Sold Date</th>
            <th style="text-align: center;">Client[ID]</th>
            <th style="text-align: center;">Invoice</th>
            <th style="text-align: center;">Type</th>
            <th style="text-align: center;">Details</th>
            <th style="text-align: center;">U.P</th>
            <th style="text-align: center;">Qty</th>
            <th style="text-align: center;">Amount</th>
            <th style="text-align: center;">Discount</th>
            <th style="text-align: center;">S.T</th>
            <th style="text-align: center;">Bank</th>
            <th style="text-align: center;">By</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        foreach (${"all_value"} as $single_value) {
            $count++; ?>
            <tr>
                <td style="text-align: center;"><?php echo $count; ?></td>
                <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->date)); ?></td>
                <td style="text-align: center;">
                    <?php
                    if ($single_value->client_id == "New") {
                        echo $single_value->client_name;
                    } else {
                        echo $single_value->client_name;
                    }
                    ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>


                <td style="text-align: center;"><?php echo $single_value->sales_type; ?></td>
                <td style="text-align: left;">
                    <b>Id: </b><?php echo $single_value->product_id; ?><br>
                    <b>Product: </b><?php echo $single_value->product_name; ?><br>
                    <!--                                                <b>Model: </b>-->
                    <?php //echo $single_value->product_model; ?><!--<br>-->
                    <b>Serial: </b>
                    <?php echo $serial;?><br>
                    <b>Warranty: </b><?php echo $single_value->warranty; ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->price_per_unit; ?></td>
                <td style="text-align: center;"><?php echo $single_value->product_qty; ?>Pcs
                </td>
                <td style="text-align: center;"><?php echo $single_value->sub_total; ?></td>

                <td style="text-align: center;"><?php echo $single_value->discount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->total; ?></td>
                <td style="text-align: center;">
                    <?php if ($single_value->payment_type == "Cheque") { ?>
                        <b>Name: </b><?php echo $single_value->bank_name; ?><br>
                        <b>A/C NO: </b><?php echo $single_value->account_no; ?><br>
                        <b>C. NO: </b><?php echo $single_value->cheque_no; ?>
                        <?php
                    } else {
                        echo "X";
                    }
                    ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->sold_by; ?></td>

            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
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

        #no_print3 {
            display: none;
        }

        #no_print4 {
            display: none;
        }
    }

    .zoom {
        width: 80px;
        height: 80px;
    }

    /*    .zoom:hover {
            -ms-transform: scale(2.5);  IE 9
            -webkit-transform: scale(2.5);  Safari 3-8
            transform: scale(2.5);
        }*/
</style>