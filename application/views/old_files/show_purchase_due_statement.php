<div class="box-body table-responsive" style="width: 98%; color: black;">
    <div class="box-header" style="color: black; text-align: center;">
        <p style="padding-left: 10px; float: left;">
            <button id="print_button" title="Click to Print" type="button"
                    onClick="window.print()" class="btn btn-flat btn-warning">Print
            </button>
        </p>
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo"  height="80px" style="border-radius: 15px;">
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <p style="font-size: 20px; text-align: center;"><u><?php echo $vendor_name; ?></u></p>
        <thead>
        <tr>
            <th colspan="6" style="text-align: center;">Supplier Ledger <?php echo $date_range; ?></th>
        </tr>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Supplier</th>
            <th style="text-align: center;">Total</th>
            <th style="text-align: center;">Paid</th>
            <th style="text-align: center;">Due</th>
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
                <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                <td style="text-align: center;"><?php echo $single_value->manufacturer; ?></td>
                <td style="text-align: center;">
                        <?php echo($single_value->due + $single_value->paid); ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->paid; ?></td>
                <td style="text-align: center;"><?php echo $single_value->due; ?></td>
            </tr>
        <?php } ?>
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
    }
</style> 