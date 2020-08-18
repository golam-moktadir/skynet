<?php if (!empty($all_down)) { ?>
    <div id="payment_info">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title" style="color: black;">Payment Info.</h3>
            </div>

            <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Date</th>
                        <th style="text-align: center;">Client Name</th>
                        <th style="text-align: center;">Project Name</th>
                        <th style="text-align: center;">Land Area</th>
                        <th style="text-align: center;">Amount of Land</th>
                        <th style="text-align: center;">Land Price</th>
                        <th style="text-align: center;">Interest Rate</th>
                        <th style="text-align: center;">Down Payment Amount</th>
                        <th style="text-align: center;">Rest Amount</th>
                        <th style="text-align: center;">No. of Months</th>
                        <th style="text-align: center;">Rest Months</th>
                        <th style="text-align: center;">Installment Amount</th>
<!--                        <th style="text-align: center;">Installment Due</th>-->
                        <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count = 0;
                    foreach ($all_down as $single_value) {
                        $count++;
                        $count1 = 0;
                        $month = 0;
                        $date_from = $single_value->date;
                        $date_to = date('Y-m-d');
                        $payment_id = $single_value->record_id;
                        $rest_month = $single_value->rest_months;
                        $installment_per_month = $single_value->installment_amount;
                        while (strtotime($date_from) <= strtotime($date_to)) {
                            $count1++;

                            $date_from = date("Y-m-d", strtotime("+1 day", strtotime($date_from)));
                        }
                        for ($i = 0; $i <= $count1; $i = $i + 30) {
                            if ($i >= 30) {
                                $month++;
                            } else {
                                $month = 0;
                            }
                        }
                        $due_installment = $single_value->installment_amount * $month;
                        ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $count; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->client_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->project_program; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->land_area; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->land_amount; ?> Katha
                            </td>
                            <td style="text-align: center;"><?php echo $single_value->land_price; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->interest_rate; ?>%
                            </td>
                            <td style="text-align: center;"><?php echo $single_value->down_payment; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->rest_amount; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->num_months; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->rest_months; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->installment_amount; ?></td>
<!--                            <td style="text-align: center;">--><?php //echo $due_installment . '<br> (' . $month . ' months)'; ?><!--</td>-->
                            <td style="text-align: center;">
                                <button style="margin: 5px;" class="btn btn-success" id="pay_installment">
                                    Pay
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row" id="payment_div" style="display: none;">
            <div class="form-group col-sm-6 col-xs-12">
                <label for="installment_month">Installment Per Month</label>
                <input type="text" class="form-control" id="installment_month" placeholder="" name="installment_month"
                       value="<?php echo $installment_per_month; ?>">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="pay_month">No. of Months to Pay</label>
                <select class="form-control selectpicker" id="pay_month" name="pay_month"
                        data-live-search="true">
                    <option value=0>--Select--</option>
                    <?php for ($i = 1; $i <= $rest_month; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i . ' Month'; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-sm-6 col-xs-12">
                <label for="installment_amount">Installment Amount</label>
                <input type="text" class="form-control" id="installment_amount" placeholder=""
                       name="installment_amount">
            </div>

            <div class="form-group col-sm-6 col-xs-12">
                <label for="pay_method">Payment Method</label>
                <select class="form-control selectpicker" id="pay_method" name="pay_method"
                        data-live-search="true">
                    <option value=''>--Select--</option>
                    <option value='Cash'>Cash</option>
                    <option value='Bank Cheque'>Bank Cheque</option>
                </select>
            </div>

            <div id="pay_method_div" style="display: none;">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="bank_name">Bank Name</label>
                    <input type="text" class="form-control" id="bank_name" placeholder="" name="bank_name">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="branch_name">Branch Name</label>
                    <input type="text" class="form-control" id="branch_name" placeholder="" name="branch_name">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="ac_no">A/C No.</label>
                    <input type="text" class="form-control" id="ac_no" placeholder="" name="ac_no">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="cheque_no">Cheque No.</label>
                    <input type="text" class="form-control" id="cheque_no" placeholder="" name="cheque_no">
                </div>
            </div>
            <div class="box-footer clearfix">
                <button style="margin: 5px" type="button" class="pull-left btn btn-success" id="pay">
                    Confirm
                </button>
            </div>
        </div>
    </div>

<?php } ?>
<script type="text/javascript">
    $('#pay_installment').on('click', function () {
        $('#payment_div').show();
    });

    $('#pay').on('click', function () {
        var date = '<?php echo $date_to;?>';
        var payment_id = '<?php echo $payment_id;?>';
        var rest_month = '<?php echo $rest_month;?>';
        var paid_amount = $('#installment_amount').val();
        var num_months = $('#pay_month').val();
        var pay_method = $('#pay_method').val();
        var bank_name = $('#bank_name').val();
        var branch_name = $('#branch_name').val();
        var ac_no = $('#ac_no').val();
        var cheque_no = $('#cheque_no').val();

        var post_data = {
            'date': date, 'payment_id': payment_id, 'rest_month': rest_month, 'paid_amount': paid_amount,
            'num_months': num_months, 'pay_method': pay_method, 'bank_name': bank_name, 'branch_name': branch_name,
            'ac_no': ac_no, 'cheque_no': cheque_no,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/pay_installment",
            data: post_data,
            success: function (data) {
                // console.log(data);
                $('#payment_info').html(data);
            }
        });
    });

    $('#pay_method').on('change', function () {
        if ($('#pay_method').val() == 'Bank Cheque') {
            $('#pay_method_div').show();
        } else {
            $('#pay_method_div').hide();
        }
    });

    $('#pay_month').on('change', function () {
        var ins = $('#installment_month').val();
        var pay_month = $('#pay_month').val();

        $('#installment_amount').val(ins * pay_month);
    });
</script>