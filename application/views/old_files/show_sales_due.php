<div class="box-body table-responsive" style="width: 98%; color: black;">
    <div class="row" id="no_print2">
  
        <div class="form-group col-sm-3 col-xs-12">
            <label for="old_due">Previous Due</label>
            <input type="text" name="old_due" id="old_due" value="<?php echo $old_due; ?>" class="form-control" readonly>
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label for="discount">Discount</label>
            <input type="number" min="0" name="discount" id="discount" class="form-control">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label for="balance">Balance</label>
            <input type="text" readonly name="balance" value="<?php echo $old_due; ?>" id="balance" class="form-control">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label for="paid">Pay Amount</label>
            <input type="text" name="paid" id="paid" class="form-control">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label for="final_due">Final Due</label>
            <input type="text" name="final_due" id="final_due" class="form-control" readonly>
        </div>
        <div class="form-group col-sm-3 col-xs-12">
        <label for="final_due">Payment Type</label>
            <select id="payment_type" name="payment_type" class="form-control">
                <option value="N/A">--Select--</option>
                <option value="Cash">Cash</option>
                <option value="Bank">Bank</option>
                <option value="Cheque">Cheque</option>
            </select>
        </div>
        <div id="cheque" style="display: none;"> 
            <div class="form-group col-sm-3 col-xs-12">
                <label for="bank_name">Bank Name</label>
                <input type="text"  class="form-control" id="bank_name" name="bank_name" value="">
            </div> 
            <div class="form-group col-sm-3 col-xs-12">
                <label for="account_no">Account No.</label>
                <input type="text"  class="form-control" id="account_no" name="account_no" value="">
            </div> 
            <div class="form-group col-sm-3 col-xs-12">
                <label for="cheque_no">Cheque No.</label>
                <input type="text"  class="form-control" id="cheque_no" name="cheque_no" value="">
            </div> 
        </div>
        <div class="form-group col-sm-3 col-xs-12">
        <label for="final_due">Payment Number</label>
            <select id="payment_number" name="payment_number" class="form-control">
                <option value="N/A">--Select--</option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
                <option value="Fourth">Fourth</option>
                <option value="Fifth">Fifth</option>
            </select>
        </div> 
        <div class="form-group col-sm-3 col-xs-12">
            <button type="button" class="pull-left btn btn-success" id="pay_btn" 
                    style="margin-top: 22px; width: 70%;">Pay</button>
        </div> 
    </div>

    <div class="box-header"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" 
             alt="Logo"  height="80px" style="border-radius: 15px;">
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th colspan="10">
                    <p style="text-align: center; font-weight: bold;">
                        Client Name: <?php echo $client_name; ?>
                    </p>
                </th>
            </tr>
            <tr>
                <th style="text-align: center;">SL</th>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Particular</th>
                <th style="text-align: center;">Sub Total</th>
                <th style="text-align: center;">Sub Total Discount</th>
                <th style="text-align: center;">Paid</th>
                <th style="text-align: center;">Pay Type</th>
                <th style="text-align: center;">Pay No.</th>
                <th style="text-align: center;">Due</th>
                <th style="text-align: center;" id="no_print3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
               
            foreach ($all_value as $single_value) {
                $count++;
                $single_total=($single_value->due + $single_value->paid)+$single_value->discount;
                ?>
                <tr>
                    <td style="text-align: center;"><?php echo $count; ?></td>
                    <td style="text-align: center;">
                        <?php echo date('d/m/y', strtotime($single_value->date)); ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                    <td style="text-align: center;">
                        <?php echo  number_format($single_total,2); ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->discount; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->paid; ?></td>
                    <td style="text-align: center;">
                        <?php if ($single_value->payment_type == "Cheque") { ?>
                            <b>Name: </b><?php echo $single_value->bank_name; ?><br>
                            <b>A/C NO: </b><?php echo $single_value->account_no; ?><br>
                            <b>C. NO: </b><?php echo $single_value->cheque_no; ?>
                            <?php
                        } else {
                            echo $single_value->payment_type;
                        }
                        ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->payment_number; ?></td>
                    <td style="text-align: center;"><?php echo number_format($single_value->due,2); ?></td>
                    <td style="text-align: center;" class="no_print4" id="no_print4">
                        <?php
                        if ($single_value->delete_status == 0) {
                            echo "N/A";
                        } else {
                            ?>
                            <a style="margin: 5px;" class="btn btn-danger"
                               href="<?php echo base_url(); ?>Delete/sales_due/<?php echo $single_value->record_id; ?>">Delete
                            </a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p style="padding-left: 10px; text-align: right;"><button id="print_button" title="Click to Print" type="button" 
                                                              onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
</div>

<script type="text/javascript">
    $("#paid").on("change paste keyup", function () {
        var paid = $('#paid').val();
        var balance = $('#balance').val();
        if (paid >= 0) {
            var final_due = balance - paid;
            $('#final_due').val(final_due);
        } else {
            $('#final_due').val(balance);
        }
    });
    $("#discount").on("change paste keyup", function () {
        var discount = $(this).val();

        var old_due = parseFloat($('#old_due').val());
        if(discount>=0){
            $('#balance').val(old_due);
        }
        var discount2=parseFloat(discount);
        if (old_due >=discount) {
            var balance = old_due - discount;
            $('#balance').val(balance);
        }
         else {
            $('#balance').val('0');
        }
    });

    $('#pay_btn').on('click', function (e) {
        var search_client = $('#search_client').val();
        var chalan = $('#chalan').val();
        var paid = $('#paid').val();
        var final_due = $('#final_due').val();
        var discount = $('#discount').val();
        var payment_type = $('#payment_type').val();
        var bank_name = $('#bank_name').val();
        var account_no = $('#account_no').val();
        var cheque_no = $('#cheque_no').val();
        var payment_number = $('#payment_number').val();
        var post_data = {
            'paid': paid, 'search_client': search_client, 'chalan': chalan,'final_due': final_due, 'discount': discount,"payment_type":payment_type,"bank_name":bank_name,"account_no":account_no,"cheque_no":cheque_no,"payment_number":payment_number,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Insert/insert_sales_payment",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
    $('#payment_type').on('change paste keyup', function () {
        var payment_type = $('#payment_type').val();
        if (payment_type == "Cheque") {
            $('#cheque').show();
        } else {
            $('#cheque').hide();
        }
    });
</script>
<script>
    $('#example2').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "scroll":false
    } );
</script>

<style>
    @media print {  
        a[href]:after {
            content: none !important;
        }
        @page {
            size: landscape;
            margin:0;
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
        #example2_info,#example2_paginate,#example2_filter,.no_print4 {
            display: none;
        }
    }
</style>      