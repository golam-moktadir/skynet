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
<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <?php echo form_open_multipart('Insert/income'); ?>
                    <div>
                        <p style="font-size: 20px;">Income Entry</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>

                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="date">Date From</label>
                                <input type="text" class="form-control new_datepicker"
                                       placeholder="Insert Date" name="date" id="date"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="income_head">Income Head</label>
                                <select name="income_head" id="income_head" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($income_head as $info) { ?>
                                        <option value="<?php echo $info->head; ?>">
                                            <?php echo $info->head; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="invoice_no">Invoice No.</label>
                                <input type="text" name="invoice_no" value="0" id="invoice_no" class="form-control">
                            </div>
                            <div class="form-group col-sm-1 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                <label for="quantity">Qty</label>
                                <input type="text" name="quantity" value="1" id="quantity" class="form-control">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" class="form-control">
                            </div>
                            <div class="form-group col-sm-8 col-xs-12">
                                <label for="comment">Comments</label>
                                <input type="text" name="comment" id="comment" class="form-control">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <button type="submit" class="pull-left btn btn-success final_btn">Submit <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div>
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>

                    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">Income Head</th>
                                    <th style="text-align: center;">Invoice No.</th>
                                    <th style="text-align: center;">Quantity</th>
                                    <th style="text-align: center;">Amount</th>
                                    <th style="text-align: center;">Comments</th>
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
                                        <td style="text-align: center;">
                                            <?php echo date('d/m/y', strtotime($single_value->date)); ?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->comment; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger"
                                               href="<?php echo base_url(); ?>Delete/income/<?php echo $single_value->record_id; ?>">Delete
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
