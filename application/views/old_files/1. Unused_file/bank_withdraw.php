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
                <div style="color: black;">
                    <?php echo form_open_multipart('Insert/bank_withdraw'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Bank Withdraw</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="date">Date From</label>
                                <input type="text" class="form-control new_datepicker"
                                       placeholder="Insert Date" name="date" id="date"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="bank">Select Bank</label>
                                <select name="bank" id="bank" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_bank as $each_bank) { ?>
                                        <option value="<?php echo $each_bank->bank_name . "#" . $each_bank->account_no; ?>">
                                            <?php echo $each_bank->bank_name . ", Account No: " . $each_bank->account_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="amount">Withdraw Amount</label>
                                <input type="text" class="form-control" id="amount" placeholder="" name="amount">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="responsible_person">Receive By</label>
                                <input type="text" class="form-control" id="responsible_person" placeholder=""
                                       name="responsible_person">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-left btn btn-success">Submit <i
                                    class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center;">SL</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Bank Name</th>
                                <th style="text-align: center;">Account No.</th>
                                <th style="text-align: center;">Withdraw Amount</th>
                                <th style="text-align: center;">Receive By</th>
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
                                    <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->bank_name; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->account_no; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->responsible_person; ?></td>
                                    <td style="text-align: center;">
                                        <a style="margin: 5px;" class="btn btn-danger"
                                           href="<?php echo base_url(); ?>Delete/bank_withdraw/<?php echo $single_value->record_id; ?>">Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>

                        </table>
                    </div><!-- /.box-body -->
                </div>
            </section>
        </div>
    </section>
</aside>
