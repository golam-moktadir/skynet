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
                    <?php echo form_open_multipart('Insert/employee_schedule'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Create Schedule</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" placeholder="" name="date"
                                       value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="employee">Name [ID]</label>
                                <select name="employee" id="employee" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_employee as $info) { ?>
                                        <option value="<?php echo $info->name . "#" . $info->record_id; ?>">
                                            <?php echo $info->name . " [ID: " . $info->record_id . "]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="" name="designation" readonly>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="start_time">Start Time</label>
                                <input type="time" class="form-control" id="start_time" placeholder="" name="start_time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="end_time">End Time</label>
                                <input type="time" class="form-control" id="end_time" placeholder="" name="end_time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label>Available Days</label>
                                <select name="available_days[]" id="available_days" class="form-control selectpicker"
                                        multiple>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
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
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">Employee Name [ID]</th>
                                    <th style="text-align: center;">Designation</th>
                                    <th style="text-align: center;">Start Time</th>
                                    <th style="text-align: center;">End Time</th>
                                    <th style="text-align: center;">Available Days</th>
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
                                        <td style="text-align: center;">
                                            <?php echo date('d F, Y', strtotime($single_value->date)); ?>
                                        </td>
                                        <td style="text-align: center;"><?php
                                            echo $single_value->employee_name . " [ID: " .
                                            $single_value->employee_id . "]";
                                            ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                                        <td style="text-align: center;"><?php echo date('g:i A', strtotime($single_value->start_time)); ?></td>
                                        <td style="text-align: center;"><?php echo date('g:i A', strtotime($single_value->end_time)); ?></td>
                                        <td style="text-align: center;">
                                            <?php
                                            $each_day = explode('#', $single_value->available_days);
                                            foreach ($each_day as $day) {
                                                echo $day . "<br>";
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-info fa fa-edit"
                                               href="<?php echo base_url(); ?>Show_edit_form/employee_schedule/<?php echo $single_value->record_id; ?>">
                                            </a>
                                            <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                                               href="<?php echo base_url(); ?>Delete/employee_schedule/<?php echo $single_value->record_id; ?>">
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
    $('#employee').on('change', function () {
        var employee = $('#employee').val();
        var post_data = {
            'employee': employee,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/department_designation",
            data: post_data,
            dataType: 'json',
            success: function (data) {
                $('#department').val(data[0]);
                $('#designation').val(data[1]);
            }
        });
    });
</script>