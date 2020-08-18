<div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
    <p style="padding-left: 10px;"><button id="print_button" title="Click to Print" type="button"
                                           onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
    <div class="box-header"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <br>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">Product Details</th>
<!--                <th style="text-align: center;">Image</th>-->
                <th style="text-align: center;">Purchase Price</th>
                <th style="text-align: center;">Wholesale Price</th>
                <th style="text-align: center;">Retail Price</th>
                <th style="text-align: center;">Total Quantity</th>
                <th style="text-align: center;">Unit</th>
                <th style="text-align: center;">Description</th>
                <th style="text-align: center;">Shelf Details</th>
                <th style="text-align: center;">Reminder Level</th>
                <th style="text-align: center;" id="no_print3">Action</th>
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
                    <td style="text-align: center; white-space: nowrap;">
                        <?php echo $single_value->product_name; ?>
                        [<b>ID: </b><?php echo 'RTB'.sprintf('%04d', $single_value->record_id); ?>]<br>
                        <!--                                            <b>S.Category: </b>--><?php //echo $single_value->sub_category;     ?><!--<br>-->
                        <b>Category: </b><?php echo $single_value->product_type; ?><br>
                        <!--                                            <b>Brand: </b>--><?php //echo $single_value->brand_name;     ?><!--<br>-->
                        <!--                                            <b>Model: </b>--><?php //echo $single_value->product_model;     ?>

                    </td>
                    
    <!--                    <td style="text-align: center;">-->
                    <!--                        --><?php //if (file_exists('./assets/img/product/' . $single_value->image)) {    ?>
                    <!--                            <img class="zoom" src="--><?php //echo base_url();    ?><!--assets/img/product/--><?php //echo $single_value->image;    ?><!--">-->
                    <!--                        --><?php //}    ?>
                    <!--                    </td>-->
                    <td style="text-align: center;"><?php echo $single_value->purchase_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->wholesale_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->retail_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->total_qty; ?></td>
                    <td style="text-align: center;">
                        <?php echo "$single_value->unit_type"; ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->product_indication; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                    <td style="text-align: center;" id="no_print4">
                        <a style="margin: 5px;" class="btn btn-info fa fa-edit" title="Edit"
                           href="<?php echo base_url(); ?>Show_edit_form/insert_product_info/<?php echo $single_value->record_id; ?>/main">
                        </a>
                        <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                           href="<?php echo base_url(); ?>Delete/insert_product_info/<?php echo $single_value->record_id; ?>">
                        </a>
                    </td>
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