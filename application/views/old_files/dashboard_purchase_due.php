<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable"> 
                <div>
                    <div class="divHeader"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                    </div>
                    <div class="box-header"  style="color: black; text-align: center;">
                        <p style="padding: 10px; text-align: left;"><button id="print_button" title="Click to Print" type="button" 
                                                                            onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
                    </div>
                    <div class="box-body table-responsive" style="width: 98%; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;" colspan="5">All Purchase Due</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Supplier Name</th>
                                    <th style="text-align: center;">Due Amount</th>
                                    <th style="text-align: center;">Mobile No</th>
                                    <th style="text-align: center;">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total_due = 0;
                            for ($i = 1; $i <= $count_it; $i++) {
                                $total_due += ${"purchase_due" . $i};
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $i; ?></td>
                                    <td style="text-align: center;"><?php echo ${"vendor_name" . $i}; ?></td>
                                    <td style="text-align: center;"><?php echo round(${"purchase_due" . $i},2,PHP_ROUND_HALF_UP); ?></td>
                                    <td style="text-align: center;"><?php echo ${"mobile" . $i}; ?></td>
                                    <td style="text-align: center;"><?php echo ${"address" . $i}; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2" style="text-align: right;">Total = </td>
                                <td style="text-align: center;"><?php echo  round($total_due,2,PHP_ROUND_HALF_UP);?></td>
                                <td colspan="2" style="text-align: center;"></td>
                            </tr>
                            </tfoot>
                        </table>
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
