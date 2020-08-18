<div>
    <p style="padding: 10px;">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-flat btn-warning">Print
        </button>
    </p>
    <div class="divHeader"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
    </div>
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="6">Product In Report</th>
                </tr>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">PO No.</th>
                    <th style="text-align: center;">Parts Name</th>
                    <th style="text-align: center;">Parts No.</th>
                    <th style="text-align: center;">Quantity</th>
    <!--                <th style="text-align: center;">Price</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                $total_qty = 0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $one_time = 0;
                    foreach (${"product_result" . $i} as $single_value) {
                        $total_qty += $single_value->quantity;
                        $one_time++;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;"><?php echo $i; ?></td>
                                <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                <td style="text-align: center;"><?php echo $single_value->po_no; ?></td>
                            <?php } else { ?>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                            <?php } ?>
                            <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_no; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                <tr>
                    <td style="text-align: right;" colspan="5">Total = </td>
                    <td style="text-align: center;"><?php echo $total_qty; ?></td>
                </tr>
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