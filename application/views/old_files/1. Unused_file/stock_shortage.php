<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div>
                    <div class="box-header"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
                        <p style="padding: 10px; text-align: left;"><button id="print_button" title="Click to Print" type="button"
                                                          onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
                    </div>
                    <h3 style="color: black; text-align: center;"><u>Stock Shortage Info.</u></h3>

                    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Product Details</th>
<!--                                    <th style="text-align: center;">Vendor</th>-->
                                    <th style="text-align: center;">Total Quantity</th>
                                    <th style="text-align: center;">Reminder Level</th>
                                    <th style="text-align: center;">Shelf Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                $total_qty = 0;
                                foreach ($product_result as $single_value) {
                                    if ($single_value->total_qty <= $single_value->reminder_level) {
                                        $count++;
                                        $total_qty += $single_value->total_qty;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center; white-space: nowrap;">
                                                <?php echo $single_value->product_name; ?>
                                                [<b>ID: </b><?php echo 'RTB'.sprintf('%04d', $single_value->record_id); ?>]<br>
                                                <!--                                            <b>S.Category: </b>--><?php //echo $single_value->sub_category;    ?><!--<br>-->
                                                <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                                <!--                                            <b>Brand: </b>--><?php //echo $single_value->brand_name;    ?><!--<br>-->
                                                <!--                                            <b>Model: </b>--><?php //echo $single_value->product_model;    ?>
                                            </td>

        <!--                                            <td style="text-align: center;"><?php echo $single_value->manufacture_company; ?></td>-->
                                            <td style="text-align: center;"><?php echo $single_value->total_qty; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2" style="text-align: center; white-space: nowrap;">Total =</td>
                                <td style="text-align: center; white-space: nowrap;"><?php echo $total_qty;?></td>
                                <td colspan="2" style="text-align: center; white-space: nowrap;"></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<style>
    @media print {
        a[href]:after {
            content: none !important;
        }
        #print_button {
            display: none;
        }
    }
</style>