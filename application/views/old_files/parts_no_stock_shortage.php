<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div>
                    <div class="divHeader"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                    </div>
                    <p style="padding: 10px;"><button id="print_button" title="Click to Print" type="button"
                                                      onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
                    <h3 style="color: black; text-align: center;"><u>Stock Shortage(Parts No)</u></h3>

                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Sl</th>
                                    <th style="text-align: center;">Parts No</th>
                                    <th style="text-align: center;">Present Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= $count; $i++) {
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $i; ?></td>
                                        <td style="text-align: center;"><?php echo ${"parts_no" . $i}; ?></td>
                                        <td style="text-align: center;"><?php echo ${"machine_qty" . $i}; ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" style="text-align: right;">Total =</td>
                                    <td style="text-align: center;"><?php echo $product_qty; ?></td>
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
        #print_button ,.dataTables_filter{
            display: none;
        }
        @page {
            size: A4; /* DIN A4 standard, Europe */
            margin:0;
        }
    }
</style>
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
</script>