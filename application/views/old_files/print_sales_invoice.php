<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div id="invoice">
                    <div style="width: 100%; color: black;">
                        <div class="row">
                            <div class="col-xs-12 divHeader"  style="color: black; text-align: center;">
                                <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                                     alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                            </div>
                            <div class="col-xs-12" style="color: black; text-align: center;">
                                <p style="color: #066; text-align: center; font-size: 22px;"><u>Sales Invoice</u></p>
                            </div>
                            <div class="col-xs-12" style="color: black; text-align: center;">
                                <button id="print_button" title="Click to Print" type="button" style="float: left;"
                                        onClick="window.print();" class="btn btn-flat btn-warning">Print
                                </button>
                            </div>
                            <div class="col-xs-6" style="color: black; text-align: center;">
                                <p style="text-align:left; color: black; font-size: 18px; font-family: 'Lucida Grande'">
                                    <b>Date:</b> <?php echo date('d/M/Y', strtotime($date)); ?>
                                </p>
                                <p style="text-align:left; color: black; font-size: 18px; font-family: 'Lucida Grande'">
                                    <b>Name:</b> <?php echo $customer_name; ?>
                                </p>
                            </div>
                            <div class="col-xs-6" style="color: black; text-align: center;">
                                <p style="text-align:right; color: black; font-size: 18px; font-family: 'Lucida Grande'">
                                    <b>Invoice No:</b> <?php echo $invoice; ?>
                                </p>
                                <p style="text-align:right; color: black; font-size: 18px; font-family: 'Lucida Grande'">
                                    <b>Sold By:</b> <?php echo $sold_by; ?>
                                </p>
                            </div>
                            <div class="col-xs-12" style="color: black; text-align: center;">
                                <table class="table table-bordered table-hover" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">SL</th>
                                            <!--                                            <th style="text-align: center;">Category</th>-->
                                            <!--                <th style="text-align: center;">Sub-category</th>-->
                                            <th style="text-align: center;">Product</th>
                                            <!--                <th style="text-align: center;">Warranty</th>-->
                                            <!--                <th style="text-align: center;">Brand Name</th>-->
                                            <!--                <th style="text-align: center;">Model</th>-->
                                            <th style="text-align: center;">Warranty</th>
                                            <th style="text-align: center;">Unit Price</th>
                                            <th style="text-align: center;">Product Quantity</th>
                                            <!--                                            <th style="text-align: center;">Bonus Qty</th>-->
                                            <th style="text-align: right;">Amount</th>
                                            <th style="text-align: right;">Discount(%)</th>
                                            <th style="text-align: right;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 0;
                                        $invoice_total = 0;
                                        foreach ($one_sales as $all_info) {
                                            $count++;
                                            $invoice_total += $all_info->sub_total;
                                            $serial = preg_replace('/###/', ' ', $all_info->serial);
                                            ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $count; ?></td>
                                                <td style="text-align: center;"><?php
                                                    echo $all_info->product_name . ' [ID: ' . $all_info->record_id
                                                    . ']<br>Category: ' . $all_info->product_type
                                                    . ']<br>Serial: ' . $serial;
                                                    ?>
                                                </td>
                                                <td style="text-align: center;"><?php echo $all_info->warranty; ?></td>
                                                <td style="text-align: center;"><?php echo $all_info->price_per_unit . '<br>[' . $all_info->sales_type . ']'; ?></td>
                                                <td style="text-align: center;"><?php echo $all_info->product_qty; ?></td>
                                                <!--                                                <td style="text-align: center;">-->
    <?php //echo $all_info->bonus_qty;  ?><!--</td>-->
                                                <td style="text-align: right;"><?php echo $all_info->first_total; ?></td>
                                                <td style="text-align: right;"><?php echo $all_info->ind_discount . "%"; ?></td>
                                                <td style="text-align: right;"><?php echo $all_info->sub_total; ?></td>
                                            </tr>
<?php } ?>
                                        <tr>
                                            <td style="text-align: right;" colspan="3">Invoice
                                                Total: <?php echo $invoice_total; ?></td>
                                            <td style="text-align: right;" colspan="2">S.Total
                                                Discount: <?php echo $discount; ?></td>
                                            <td style="text-align: right;" colspan="3">Sub Total: <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right;" colspan="2">Previous
                                                Due: <?php echo $previous_due; ?></td>
                                            <td style="text-align: right;" colspan="2">Total
                                                Amount: <?php echo $complete_total; ?></td>
                                            <td style="text-align: right;" colspan="2">Paid: <?php echo $paid; ?></td>
                                            <td style="text-align: right;" colspan="2">Due: <?php echo $due; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-6" style="color: black; text-align: left; margin-top: 30px;">
                                <p>_______________________</p>
                                <p>Customer Signature</p>
                            </div>
                            <div class="col-xs-6" style="color: black; text-align: right; margin-top: 30px;">
                                <p>_______________________</p>
                                <p>Authorized Signature</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divFooter"  style="color: black; text-align: center;">
                    <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
                         alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
                </div>
            </section>
        </div>
    </section>
</aside>

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
    }
</style> 