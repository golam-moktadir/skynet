<div class="row" style="text-align: center; margin-bottom: 10px;">
    <button id="print_button" title="Click to Print" type="button" style="float: left; margin-left: 20px;"
            onClick="window.print();" class="btn btn-flat btn-warning">Print</button>
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" width="70%" height="70px" style="border-radius: 10px;">
</div>
<div>
    <div class="box-body table-responsive" style="width: 98%; color: black;">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">Brand Name</th>
                    <th style="text-align: center;">Reference No.</th>
                    <th style="text-align: center;">Part Name</th>
                    <th style="text-align: center;">Part No.</th>
                    <th style="text-align: center;">Average Price</th>
                    <th style="text-align: center;">After Discount Sales Unit Price</th>
                    <th style="text-align: center;">Sales Quantity</th>
                    <th style="text-align: center;">Profit  / Loss</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_quantity = 0;
                $total_profit = 0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $total_quantity += ${"sell_qty" . $i};
                    $total_profit += ${"profit_loss" . $i};
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i; ?></td>
                        <td style="text-align: center;"><?php echo ${"brand" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"ref_no" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"product_name" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"parts_no" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"purchase_average_price" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"sell_average_price" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"sell_qty" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"profit_loss" . $i}; ?></td>
                    </tr>
                <?php } ?>
                <tr style="font-color: blue; font-weight: bolder;">
                    <td colspan="6"></td>
                    <td colspan="" style="text-align: center">Total</td>
                    <td style="text-align: center;"><?php echo round($total_quantity, 2) ?></td>
                    <td style="text-align: center;"><?php echo round($total_profit, 2) ?></td>
                </tr>
            </tbody>
        </table>
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
    }

    table.table-bordered {
        border: #55830c 1px solid;
        color: black;
        font-size: 11px;
    }

    table.table-bordered > thead > tr > th {
        border: #55830c 1px solid;
        padding:2px;
        color: black;
        font-size: 12px;
    }

    table.table-bordered > tbody > tr > td {
        padding:2px;
        border: #55830c 1px solid;
        color: black;
        font-size: 12px;
    }
</style>