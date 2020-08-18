<div class="">
    <p style="padding: 10px;">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-flat btn-warning">Print
        </button>
    </p>
    <div class="box-header" style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo"  height="80px" style="border-radius: 15px;">
    </div>
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="13">Challan Statement</th>
                </tr>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Invoice</th>
                    <th style="text-align: center;">Sales Type</th>
                    <th style="text-align: center;">Details</th>
                    <th style="text-align: center;">Qty</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $count_it; $i++) {
                    $one_time = 0;
                    foreach (${"pro_result" . $i} as $single_value) {
                        $one_time++;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;"><?php echo $i; ?></td>
                                <td style="text-align: center;"><?php echo date('d/M/y', strtotime($single_value->date)); ?></td>
                                <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                            <?php } else { ?>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                            <?php } ?>
                            <td style="text-align: center;"><?php echo $single_value->sales_type; ?></td>
                            <td style="text-align: center; white-space: nowrap;">
                                <b>Parts Name: </b><?php echo $single_value->product_name; ?><br>
                                <b>Parts No: </b><?php echo $single_value->parts_no; ?>
                            </td>
                            <td style="text-align: center;"><?php echo $single_value->product_qty; ?></td>

                            <?php if ($one_time == 1) { ?>
                                <td class="no_print" style="text-align: center; color: green;">
                                    <?php if ($single_value->delivered_status == 0) { ?>
                                        <a style="margin: 5px;" class="btn btn-success"
                                           href="<?php echo base_url(); ?>Edit/delivered_product/<?php echo $single_value->invoice_no; ?>">Delivered
                                        </a>
                                        <?php
                                    } else {
                                        echo "Product Delivered";
                                    }
                                    ?>
                                </td>
                            <?php } else { ?>
                                <td style="text-align: center;"></td>
                            <?php } ?>
                        </tr>
                        <?php
                    }
                }
                ?>
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

        #no_print1,.no_print {
            display: none;
        }
    }
</style>