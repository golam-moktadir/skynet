<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Created Successfully";
} elseif ($msg == "edit") {
    $msg = "Edited Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Insert/down_payment'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Down Payment</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="date">Date</label>
                                <input type="text" class="form-control new_datepicker" id="date" placeholder="Insert Date" name="date"
                                       value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="project_program">Project Name</label>
                                <select class="form-control selectpicker" id="project_program"
                                        name="project_program" data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_project as $info) {?>
                                        <option value="<?php echo $info->record_id;?>"><?php echo $info->project_program;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="land_area">Project Area</label>
                                <input readonly type="text" class="form-control" id="land_area" placeholder=""
                                       name="land_area">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="land_amount">Amount of Land (Katha) </label>
                                <input readonly type="text" class="form-control" id="land_amount" placeholder=""
                                       name="land_amount">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="price">Land Price</label>
                                <input readonly type="text" class="form-control" id="price" placeholder=""
                                       name="price">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="interest_rate">Interest Rate (%)</label>
                                <input readonly type="text" class="form-control" id="interest_rate"
                                        name="interest_rate">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="down_payment">Down Payment Amount</label>
                                <input type="number" class="form-control" id="down_payment" placeholder=""
                                name="down_payment" value=0 min="0" pattern="[0-9]">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="rest_balance">Rest Balance</label>
                                <input readonly type="text" class="form-control" id="rest_balance" placeholder=""
                                name="rest_balance">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="num_months">NO. of Months</label>
                                <input type="text" class="form-control" id="num_months" placeholder=""
                                       name="num_months" >
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="installment_amount">Installment Amount</label>
                                <input readonly type="text" class="form-control" id="installment_amount" placeholder=""
                                       name="installment_amount">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-left btn btn-success">Create <i
                                class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    </form>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>

                    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Project Name</th>
                                <th style="text-align: center;">Land Area</th>
                                <th style="text-align: center;">Amount of Land</th>
                                <th style="text-align: center;">Land Price</th>
                                <th style="text-align: center;">Interest Rate</th>
                                <th style="text-align: center;">Down Payment Amount</th>
                                <th style="text-align: center;">Rest Amount</th>
                                <th style="text-align: center;">No. of Months</th>
                                <th style="text-align: center;">Installment Amount</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 0;
                            foreach ($all_value as $single_value) {
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->project_program; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->land_area; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->land_amount; ?> Katha</td>
                                    <td style="text-align: center;"><?php echo $single_value->land_price; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->interest_rate; ?> %</td>
                                    <td style="text-align: center;"><?php echo $single_value->down_payment; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->rest_amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->num_months; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->installment_amount; ?></td>
                                    <td style="text-align: center;">
                                        <a style="margin: 5px;" class="btn btn-danger"
                                           href="<?php echo base_url(); ?>Delete/down_payment/<?php echo $single_value->record_id; ?>">Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">

    $('#down_payment').on('change keyup paste', function () {

        var num_months = $('#num_months').val();
        var down_payment = $('#down_payment').val();
        var land_price = $('#price').val();

        var installment_amount  = (parseFloat(land_price) - parseFloat(down_payment) )/ parseFloat(num_months);

        $('#installment_amount').val(Math.round(installment_amount));
        $('#rest_balance').val(land_price - down_payment);

    });

    $('#project_program').on('change',function () {

        var project =  $('#project_program').val();
        var post_data = {
            'project_id': project,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_project_info",
            data: post_data,
            dataType: 'JSON',
            success: function (data) {
                $('#land_area').val(data[0]);
                $('#land_amount').val(data[1]);
                $('#price').val(data[2]);
                $('#interest_rate').val(data[3]);
                $('#num_months').val(data[4]);
                $('#installment_amount').val(data[5]);
            }
        });

    });

</script>