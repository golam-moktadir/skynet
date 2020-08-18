
<table id="pagination_search" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">Action</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Client</th>
            <th style="text-align: center;">Product Details</th>
<!--                                <th style="text-align: center;">Section</th>
            <th style="text-align: center;">Parts Name</th>
            <th style="text-align: center;">Parts No.</th>-->
            <th style="text-align: center;">Unit</th>
            <th style="text-align: center;">Sales Type</th>
            <th style="text-align: center;">Unit Price</th>
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
        for ($i = 1; $i <= $count_it; $i++) {
            $row_count = 0;
            foreach (${"pro_result" . $i} as $single_value) {
                $row_count++;
            }
            $one_time = 0;
            foreach (${"pro_result" . $i} as $single_value) {
                $one_time++;
                ?>
                <tr>
                    <?php if ($one_time == 1) { ?>
            <!--                                            <td style="text-align: center;"><?php echo $i; ?></td>-->
                        <td style="text-align: center;" rowspan="<?php echo $row_count; ?>">
                            <a style="margin: 5px;" class="btn btn-success fa fa-print btn-sm"
                                title="Print Invoice"
                                href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $single_value->invoice_no; ?>/invoice_btn">
                            </a>
                            <a style="margin: 5px;" class="btn btn-warning fa fa-print btn-sm"
                                title="Print Challan"
                                href="<?php echo base_url(); ?>Show_edit_form/print_sales_invoice/<?php echo $single_value->invoice_no; ?>/challan_btn">
                            </a>
                            
                            <a style="margin: 5px;" class="btn btn-primary fa fa-plus btn-sm"
                                title="Add Product"
                                href="<?php echo base_url(); ?>Show_form/sales/main/<?php echo $single_value->invoice_no; ?>">
                            </a>
                                <?php if(check_exits_payment($single_value->invoice_no)): ?>
                                    <a style="margin: 5px;" class="btn btn-info fa fa-edit btn-sm"
                                    title="Edit"
                                    href="<?php echo base_url(); ?>Show_edit_form/sell_product/<?php echo $single_value->invoice_no; ?>/edit">
                                    </a>
                                <?php endif; ?>
                            <?php  if($this->session->ses_user_type=="admin"): ?>
                                <a style="margin: 5px;" onclick="return confirm('Are You Sure?')" class="btn btn-danger fa fa-trash-o btn-sm"
                                title="Delete"
                                href="<?php echo base_url(); ?>Delete/sell_product/<?php echo $single_value->invoice_no; ?>">
                                </a>
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;" rowspan="<?php echo $row_count; ?>"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
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
                        <b>Parts Name: </b><?php echo $single_value->product_name; ?><br>
                        <b>Parts No: </b><?php echo $single_value->parts_no; ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->unit; ?>
                    <td style="text-align: center;"><?php echo $single_value->sales_type; ?>
                    <td style="text-align: center;"><?php echo $single_value->price_per_unit; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->product_qty; ?>
                    <td style="text-align: center;"><?php echo $single_value->first_total; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->ind_discount; ?>%</td>
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
    </tbody>
</table>
