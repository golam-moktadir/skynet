<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable"> 
                <div class="box-body" style="width: 98%; color: black;">

                    <div class="row" style="margin-top: 10px;" id="no_print">
                        <div class="form-group col-sm-1 col-xs-6">
                            <button id="print_button" title="Click to Print" type="button"
                                    onClick="window.print();" class="btn btn-flat btn-warning fa fa-print"></button>
                        </div>
                        <form action="" id="print_info">
                            <div class="form-group col-sm-3 col-xs-6">
                                <input type="date" class="form-control"
                                    placeholder="Insert Date" value="<?php echo $print->purchase_date; ?>" name="new_date" id="new_date">
                            </div>
                            <div class="form-group col-sm-3 col-xs-6">
                                <input type="text" class="form-control" value="<?php echo @$print->subject; ?>" id="subject" placeholder="Subject" name="subject">
                            </div>
                            <div class="form-group col-sm-3 col-xs-6">
                                <input type="text" class="form-control" value="<?php echo @$print->address; ?>" id="to" placeholder="Address" name="to">
                                <input type="hidden" class="form-control" value="<?php echo @$print->id; ?>" name="id">
                            </div>
                            <div class="form-group col-sm-2 col-xs-6">
                                <input type="submit" class="btn btn-success" value="Save" name="submit">
                            </div>
                        </form>
                    </div>
                    <div class="divHeader"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                    </div>
                        <p style="font-size: 18px; text-align: center; font-weight: bolder;"><u>Purchase Order</u></p>
                    <div class="header_text">
                        <p style="font-size: 16px;" id="show_date">Date: </p>
                        <p style="font-size: 16px;">P.O Number: <?php echo $po_no; ?></p>
                        <p style="font-size: 16px;" id="show_to">To: <?php echo $supplier; ?></p>
                        <u><p style="font-size: 16px; font-weight: bolder;" id="show_subject">Subject: </p></u>
                        <p style="font-size: 16px;">Dear Sir,</p>
                        <p style="font-size: 16px;">We are pleased to confirm you the below listed
                            parts order as per agreed price, terms & condition.</p>
                        <p style="font-size: 16px; font-weight: bold;">These parts need to shift ASAP.</p>
                        <p style="font-size: 17px; text-align: center;"><u>Purchase Order</u></p>
                    </div>
                    <table id="pagination_search" class="table-responsive table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Sl No</th>
                                <th style="text-align: center;">Parts Name</th>
                                <th style="text-align: center;">Brand</th>
                                <th style="text-align: center;">Chinese Name</th>
                                <th style="text-align: center;">Parts No.</th>
                                <th style="text-align: center;">Model</th>
                                <th style="text-align: center;">Chassis No.</th>
                                <th style="text-align: center;">Qty.</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Payment Type</th>
                                <th style="text-align: center;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            $total_qty = 0;
                            foreach ($all_value as $single_value) {
                                $total_qty += $single_value->quantity;
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->chinese_name; ?></td>
                                    <td style="text-align: center; white-space: nowrap;"><?php echo $single_value->parts_no; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->machine_model; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->chassis; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->unit; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->total_price; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr style="font-weight: bolder;">
                                <td style="text-align: center;" colspan="7"></td>
                                <td style="text-align: center;"><?php echo $total_qty; ?></td>
                                <td style="text-align: center;" colspan="3">Total Price</td>
                                <td style="text-align: center;"><?php echo $total_with_extra; ?></td>
                            </tr>
                            <tr style="font-weight: bolder;">
                                <td style="text-align: center;" colspan="8"></td>
                                <td style="text-align: center;" colspan="3">Discount</td>
                                <td style="text-align: center;"><?php echo $discount; ?></td>
                            </tr>
                            <tr style="font-weight: bolder;">
                                <td style="text-align: center;" colspan="8"></td>
                                <td style="text-align: center;" colspan="3">Net Payable</td>
                                <td style="text-align: center;"><?php echo $net_payable; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="font-size: 17px; font-weight: bolder;">Thanks</p>
                    <p style="font-size: 17px;"><img src="<?php echo base_url(); ?>assets/img/signature.png"
                         alt="Logo" width="100px" height="50px" style="border-radius: 15px; bottom: 0;"></p>
                    <p style="font-size: 17px;">Engr. Md. Munir Hossain</p>
                    <p style="font-size: 17px;">DGM (Product Support)</p>
                    <p style="font-size: 17px;">Call: +8801618-404045, +8801756-495969</p>

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
    #pagination_search{
        margin-left: 10px;
    }
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
        @page{
            margin: 0px;
        }

        a[href]:after {
            content: none !important;
        }

        #no_print {
            display: none;
        }
        .scroll_hide::-webkit-scrollbar {
            display: none;
        }
    }
    table.table-bordered{
        border: grey 0.5px solid;
    }
    table.table-bordered > thead > tr > th{
        border: grey 0.5px solid;
    }
    table.table-bordered > tbody > tr > td{
        border: grey 0.5px solid;
    }
</style>

<script type="text/javascript">
text_chages();
function text_chages(){
    var date = $('#new_date').val();
    var subject = $('#subject').val();
    var to = $('#to').val();
    var sup = "<?php echo $supplier; ?>";
    $('#show_date').text("Date: " + date);
    $('#show_subject').text("Subject: " + subject);
    $('#show_to').text("To: " + sup + " " + to);
}
    $("#new_date, #subject, #to").on("change paste keyup", function () {
        text_chages();
    });
    $("#print_info").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/add_print_info",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
            }
        });
    });
</script>
