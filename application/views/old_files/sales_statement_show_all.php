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
                    <th style="text-align: center;" colspan="23">Sales Statement</th>
                </tr>
                <tr>
                    <th style="text-align: center;" id="no_print2">Print</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Reference No.</th>
                    <th style="text-align: center;">Client</th>
                    <th style="text-align: center;">Category</th>
                    <th style="text-align: center;">Section</th>
                    <th style="text-align: center;">Parts Name</th>
                    <th style="text-align: center;">Parts No</th>
                    <th style="text-align: center;">Unit</th>
                    <th style="text-align: center;">Sales Type</th>
                    <th style="text-align: center;">U.Price</th>
                    <th style="text-align: center;">Qty </th>
                    <th style="text-align: center;">Amount</th>
                    <th style="text-align: center;">Discount</th>
                    <th style="text-align: center;">Total</th>
                    <th style="text-align: center;">S.Total</th>
                    <th style="text-align: center;">P.Due</th>
                    <th style="text-align: center;">Total Discount</th>
                    <th style="text-align: center;">G.Total</th>
                    <th style="text-align: center;">Paid</th>
                    <th style="text-align: center;">Due</th>
                    <th style="text-align: center;">Payment</th>
                    <th style="text-align: center;">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q_total=0;
                $g_total=0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $row_count = 0;
                    foreach (${"pro_result" . $i} as $single_value) {
                        $row_count++;
                    }
                    $one_time = 0;
                    
                    foreach (${"pro_result" . $i} as $single_value) {
                        $one_time++;
                        $q_total+=$single_value->product_qty;
                        $g_total+=$single_value->complete_total;
                        ?>
                        <tr>
                            <?php if ($one_time == 1) { ?>
                    <!--                                            <td style="text-align: center;"><?php echo $i; ?></td>-->
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>" id="no_print3">
                                    <a style="margin: 5px;" class="btn btn-success fa fa-print btn-sm"
                                       title="Print Invoice"
                                       href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $single_value->invoice_no; ?>/challan_btn">
                                    </a>

                                    <a style="margin: 5px;" class="btn btn-warning fa fa-print btn-sm"
                                       title="Print Challan"
                                       href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $single_value->invoice_no; ?>/challan_btninvoice_btn">
                                    </a>
                                    <!--                                    <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o btn-sm"
                                                                                       title="Delete"
                                                                                       href="<?php echo base_url(); ?>Delete/sell_product/<?php echo $single_value->invoice_no; ?>">
                                                                                    </a>-->
                                </td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->invoice_no; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>">
                                    <?php
                                    if ($single_value->client_id == "New") {
                                        echo $single_value->client_name;
                                    } else {
                                        echo $single_value->client_name . ' [ID: ' . $single_value->client_id . ']';
                                    }
                                    ?>
                                </td>
            <!--                                            <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>-->
                            <?php } ?>
                            <td style="text-align: left; white-space: nowrap;">
                                <?php echo $single_value->product_type; ?>
                            </td>
                            <td style="text-align: left; white-space: nowrap;">
                                <?php echo $single_value->section; ?>
                            </td>
                            <td style="text-align: left; white-space: nowrap;">
                                <?php echo $single_value->product_name; ?>
                            </td>
                            <td style="text-align: left; white-space: nowrap;">
                                <?php echo $single_value->parts_no; ?>
                            </td>
                            <td style="text-align: center;"><?php echo $single_value->unit; ?>
                            <td style="text-align: center;"><?php echo $single_value->sales_type; ?>
                            <td style="text-align: center;"><?php echo $single_value->price_per_unit; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->product_qty; ?>
                            <td style="text-align: center;"><?php echo $single_value->first_total; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->ind_discount."%"; ?>%</td>
                            <td style="text-align: center;"><?php echo $single_value->total; ?></td>
                            <?php if ($one_time == 1) { ?>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->sub_total; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->previous_due; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->discount; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->complete_total; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->paid; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo $single_value->due; ?></td>
                                <td style="text-align: center;" rowspan="<?php echo $row_count; ?>">
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
                                <!--<td style="text-align: center;"><?php echo $single_value->sold_by; ?></td>-->

                            <?php } ?>
                            <td style="text-align: center;"><?php echo $single_value->remarks; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                        <tr>
                            <td style="text-align: left;" colspan="8">Total</td>
                            <td style="text-align: center;"><?php echo $q_total; ?></td>
                            <td style="text-align: left;" colspan="6"></td>
                            <td style="text-align: center;"><?php echo $g_total; ?></td>
                             <td style="text-align: left;" colspan="7"></td>
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
        :-webkit-scrollbar {
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