<div>
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <!-- <p style="padding-left: 10px;"><button id="print_button" title="Click to Print" type="button" 
                                               onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p> -->
        <div class="divHeader"  style="color: black; text-align: center;">
            <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                 alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
        </div>
        <table id="pagination_search" class="table table-bordered table-hover list_table">
            <thead>
                <tr>
                    <th style="text-align: center;">PO No.</th>
                    <th style="text-align: center;">Date</th>
<!--                    <th style="text-align: center;" id="no_print2">Action</th>-->
                    <th style="text-align: center;">Machine Category</th>
                    <th style="text-align: center;">Section</th>
                    <th style="text-align: center;">Machine Model</th>
                    <th style="text-align: center;">Chassis No.</th>
                    <th style="text-align: center;">Parts Name</th>
                    <th style="text-align: center;">Parts No.</th>
                    <th style="text-align: center;">Chinese Name</th>
                    <th style="text-align: center;">Brand</th>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                    <th style="text-align: center;">Unit</th>
                    <th style="text-align: center;">U.Price</th>
                    <th style="text-align: center;">Discount</th>
                    <th style="text-align: center;">After Discount U.P</th>
                    <th style="text-align: center;">Payment Type</th>
                    <?php endif;?>
                    <th style="text-align: center;">Shipping Type</th>
                    <th style="text-align: center;">Qty</th>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                    <th style="text-align: center;">Total Price</th>
                    <?php endif;?>
                    <th style="text-align: center;">R.Level</th>
                    <th style="text-align: center;">Description</th>
                    <th style="text-align: center;">Shelf Details</th>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                    <th style="text-align: center;">Selling U.Price</th>
                    <?php endif;?>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                    <th style="text-align: center;">Supplier</th>
                        <?php if(isset($po_no)): ?>
                            <th style="text-align: center;">Shipping Type</th>
                            <th style="text-align: center;">Others Cost</th>
                            <th style="text-align: center;">Total Cost</th>
                        <?php endif;?>
                    <?php endif;?>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_qty = 0;
                $final_price = 0;
                for ($i = 1; $i <= $count_it; $i++) {
//                                    $total_qty = 0;
//                                    $total_amount = 0;
                    $one_time = 0;
                    $row_span_count = 0;
                    foreach (${'purchase_result' . $i} as $single_value) {
                        $row_span_count++;
                    }
                    foreach (${'purchase_result' . $i} as $single_value) {
                        $total_qty += $single_value->quantity;
                        $final_price += $single_value->total_price;
                        $one_time++;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->po_no; ?></td>
                            <?php } ?>
        <!--                                                <td style="text-align: center;">
                            <?php
                            if ($single_value->date != "0000-00-00") {
                                echo date('d/m/Y', strtotime($single_value->date));
                            } else {
                                echo "";
                            }
                            ?>
        </td>-->
        <!--                            <td style="text-align: center;" id="no_print3">
                            <?php
                            echo anchor('Show_edit_form/purchase_product/' . $single_value->record_id, ' ', 'style="margin: 5px;" '
                                    . 'title="Edit" class="btn btn-info fa fa-edit"') .
                            anchor('Delete/purchase_product/' . $single_value->record_id, ' ', 'style="margin: 5px;" '
                                    . 'title="Delete" class="btn btn-danger fa fa-trash-o"');
                            ?>
        </td>-->
        <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>

                            <td style="text-align: center;"><?php echo $single_value->machine_category; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->section; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->machine_model; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->chassis; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                            <td style="text-align: center; white-space: nowrap;">
                                <?php echo $single_value->parts_no; ?><br>
                                <b>Alt.No: </b><?php echo $single_value->alternative_parts_no; ?>
                            </td>
                            <td style="text-align: center;"><?php echo $single_value->chinese_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                            <?php if($this->session->ses_user_type=="admin"): ?>
                                <td style="text-align: center;"><?php echo $single_value->unit; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->discount; ?>%</td>
                                <td style="text-align: center;"><?php echo $single_value->after_discount_unit_price; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                                <?php endif; ?>
                            <td style="text-align: center;"><?php echo $single_value->shipping_type; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                            <?php if($this->session->ses_user_type=="admin"): ?>
                            <td style="text-align: center;"><?php echo round($single_value->total_price,2,PHP_ROUND_HALF_UP); ?></td>
                            <?php endif;?>
                            <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->description; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                            <?php if($this->session->ses_user_type=="admin"): ?>
                            <td style="text-align: center;"><?php echo $single_value->selling_price; ?></td>
                            <?php endif;?>
                            <?php if($this->session->ses_user_type=="admin"): ?>
                                <?php if ($one_time == 1) { ?>
                                    <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->supplier; ?></td>
                                        <?php if(isset($po_no)): ?>
                                            <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->shipping_type; ?></td>
                                            <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                                                    <b style="white-space: nowrap;">Shipping: </b><?php echo $single_value->shiping_cost; ?><br>
                                                    <b style="white-space: nowrap;">Custom: </b><?php echo $single_value->custom_cost; ?><br>
                                                    <b style="white-space: nowrap;">Transport: </b><?php echo $single_value->transport_cost; ?><br>
                                                    <b style="white-space: nowrap;">Mixed: </b><?php echo $single_value->misc_cost; ?>
                                            </td>
                                            <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                                                    <b style="white-space: nowrap;">Total Price: </b><?php echo $single_value->total_with_extra; ?>
                                                    <b style="white-space: nowrap;">Discount: </b><?php echo $single_value->total_discount; ?>
                                                    <b style="white-space: nowrap;">Net Payable: </b><?php echo $single_value->net_payable; ?>
                                            </td>
                                        <?php endif; ?>
                                <?php } ?>
                            <?php endif; ?>
                                    </tr>
                     <?php
                    }
                }
                ?>
                <tr>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                        <td style="text-align: right;" colspan="15">Total = </td>
                    <?php else: ?>
                        <td style="text-align: right;" colspan="10">Total = </td>
                    <?php endif; ?>
                    <td style="text-align: center;"><?php echo $total_qty; ?></td>
                    <?php if($this->session->ses_user_type=="admin"): ?>
                    <td style="text-align: center;"><?php echo round($final_price,2,PHP_ROUND_HALF_UP); ?></td>
                    <?php endif; ?>
                    <td style="text-align: right;" colspan="8"></td>
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
        ::-webkit-scrollbar {
            display: none;
        }
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
        #no_print2 {
            display: none;
        }
        #no_print3 {
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