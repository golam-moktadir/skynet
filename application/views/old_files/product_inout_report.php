<div>
    <p style="padding: 10px;"><button id="print_button" title="Click to Print" type="button"
                                      onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
    <div class="divHeader"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
    </div>
    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="8">Product In Out Report</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">PO No.</th>
                    <th style="text-align: center;">Invoice No.</th>
                    <th style="text-align: center;">Parts Name</th>
                    <th style="text-align: center;">Parts No.</th>
                    <th style="text-align: center;">In Qty</th>
                    <th style="text-align: center;">Out Qty</th>
                    <th style="text-align: center;">Total Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_qty = 0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $one_time = 0;
                    foreach (${"product_result" . $i} as $single_value) {
                        $one_time++;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                <td style="text-align: center;"><?php echo $single_value->po_no; ?></td>
                            <?php } else { ?>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                            <?php } ?>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_no; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                            <td style="text-align: center;"><?php echo 0; ?> </td>
                            <td style="text-align: center;"><?php echo $total_qty += $single_value->quantity; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                <?php
                for ($i = 1; $i <= $count_it2; $i++) {
                    $one_time = 0;
                    foreach (${"product_result2" . $i} as $single_value) {
                        $one_time++;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                            <?php } else { ?>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                            <?php } ?>
                            <td style="text-align: center;"><?php echo $single_value->product_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_no; ?></td>
                            <td style="text-align: center;"><?php echo 0; ?> </td>
                            <td style="text-align: center;"><?php echo $single_value->product_qty; ?> </td>
                            <td style="text-align: center;"><?php echo $total_qty -= $single_value->product_qty; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="divFooter"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
             alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
    </div>
</div>

<style>
    @media print {
        @page {
            size: A4; /* DIN A4 standard, Europe */
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
    }
</style>