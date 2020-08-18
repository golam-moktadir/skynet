<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div>
                    <div class="divHeader"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                    </div>
                    <?php if ($t == 'Day') { ?>
                        <h3 style="color: black; text-align: center;"><u>Sales Today</u></h3>
                        <h4 style="color: black; text-align: center;"><u><?php echo date('d F Y'); ?></u></h4>
                    <?php } else { ?>
                        <h3 style="color: black; text-align: center;"><u>Sales of This Month</u></h3>
                    <?php } ?>
                    <!-- /.box-header -->
                    <div style="padding: 5px;">
                        <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                            <table id="pagination_search" class="table table-bordered table-hover">
                                <thead>
                                    
                                    <tr>
                                        <td class="text-center" colspan="18">
                                        <button onclick="scrollDown();" class="btn btn-info"  id="down_btn">Down</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;">Date</th>
                                        <th style="text-align: center;">Client</th>
                                        <th style="text-align: center;">Product Details</th>
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
                                    $total_qty=0;
                                    $total_grand_total=0;
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
                                                <?php if ($one_time == 1) { 
                                                    $total_grand_total+=$single_value->complete_total;
                                                    $total_qty+=$single_value->product_qty;
                                                    ?>
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
                                                <?php } ?>
                                                <td style="text-align: left; white-space: nowrap;">
                                                    <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                                    <b>Section: </b><?php echo $single_value->section; ?><br>
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
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="6">Total Qty:</td>
                                        <td ><?= $total_qty ?></td>
                                        <td class="text-right" colspan="6">Total Amount:</td>
                                        <td><?= number_format($total_grand_total,2) ?></td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" colspan="18">
                                        <button onclick="scrollUp();" class="btn btn-success"
                                                style="" id="up_btn">Up
                                        </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="divFooter"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>


<style>
    @media print {
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
        @page {
            size: A4; /* DIN A4 standard, Europe */
            margin:0;
        }
    }
</style>
<script type="text/javascript">
    function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 0);
    }
</script>