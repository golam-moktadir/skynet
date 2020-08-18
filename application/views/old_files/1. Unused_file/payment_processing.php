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
                    <?php echo form_open_multipart('Insert/payment_processing'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Payment Processing</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="project_program">Project Name</label>
                                <select class="form-control selectpicker" id="project_program"
                                        name="project_program" data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_project as $info) {?>
                                        <option value="<?php echo $info->project_program;?>"><?php echo $info->project_program;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="land_area">Land Area</label>
                                <input type="text" class="form-control" id="land_area" placeholder=""
                                       name="land_area">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="land_amount">Amount of Land (Katha)</label>
                                <input type="number" class="form-control" id="land_amount" placeholder=""
                                       name="land_amount" value=0 min="0" pattern="[0-9]">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="price">Land Price </label>
                                <input type="number" class="form-control" id="price" placeholder=""
                                       name="price" value=0 min="0" pattern="[0-9]">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="interest_rate">Interest Rate (%)</label>
                                <select class="form-control selectpicker" id="interest_rate"
                                       name="interest_rate">
                                    <option value="0">0 %</option>
                                    <option value="1">1 %</option>
                                    <option value="2">2 %</option>
                                    <option value="3">3 %</option>
                                    <option value="4">4 %</option>
                                    <option value="5">5 %</option>
                                    <option value="6">6 %</option>
                                    <option value="7">7 %</option>
                                    <option value="8">8 %</option>
                                    <option value="9">9 %</option>
                                    <option value="10">10 %</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="balance">Total Amount</label>
                                <input readonly type="text" class="form-control" id="balance" placeholder=""
                                       name="balance">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="num_months">No. of Months</label>
                                <input type="number" class="form-control" id="num_months" placeholder=""
                                       name="num_months" value=0 min="0" pattern="[0-9]">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="installment_amount">Installment Amount</label>
                                <input readonly type="text" class="form-control" id="installment_amount" placeholder=""
                                       name="installment_amount">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="delay_charge">Delay Charge Amount</label>
                                <input type="text" class="form-control" id="delay_charge" placeholder="" name="delay_charge">
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
                                <th style="text-align: center;">Project Name</th>
                                <th style="text-align: center;">Land Area</th>
                                <th style="text-align: center;">Amount of Land</th>
                                <th style="text-align: center;">Land Price</th>
                                <th style="text-align: center;">Interest Rate</th>
                                <th style="text-align: center;">Total Amount</th>
                                <th style="text-align: center;">No. of Months</th>
                                <th style="text-align: center;">Installments Amount</th>
                                <th style="text-align: center;">Delay Charge</th>
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
                                    <td style="text-align: center;"><?php echo $single_value->project_program; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->land_area; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->land_amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->land_price; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->interest_rate; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->total_amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->num_months; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->installment_amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->delay_charge; ?></td>
                                    <td style="text-align: center;">
                                        <a style="margin: 5px;" class="btn btn-danger"
                                           href="<?php echo base_url(); ?>Delete/payment_processing/<?php echo $single_value->record_id; ?>">Delete
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

    $('#price, #land_amount, #interest_rate').on('change keyup paste', function () {

        var price = $('#price').val();
        var interest_rate = $('#interest_rate').val();

        var interest  = price * parseFloat(interest_rate / 100);

        $('#balance').val(Math.round(parseFloat(price) + parseFloat(interest)));

    });

    $('#num_months').on('change keyup paste', function () {

        var num_months = $('#num_months').val();
        var balance = $('#balance').val();

        var installment_amount  = parseFloat(balance) / parseFloat(num_months);

        $('#installment_amount').val(Math.round(installment_amount));

    });

</script>