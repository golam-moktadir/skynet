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
                <?php echo form_open_multipart('Insert/employee_attendance'); ?>
                <div style="color: black;">
                    <div class="box-body">
                        <p style="font-size: 20px;">Employee Attendance</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" class="form-control"
                                           value="<?php echo date("Y-m-d"); ?>" readonly>
                                </div>
                                <div class="form-group col-sm-4 col-xs-12" style="display: none;">
                                    <label for="department">Department</label>
                                    <select name="department" id="department" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_department as $info) { ?>
                                            <option value="<?php echo $info->department; ?>"><?php echo $info->department; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="intime">In Time</label>
                                    <input type="time" name="intime" value="09:30" id="intime" class="form-control">
                                </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                   <button type="button" class="pull-left btn btn-success final_btn" id="search_employee">Search &nbsp <i
                                class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">Attendance Sheet</h3>
                    </div>
                    <div id="show_info">
                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">Day of the Week</th>
                                    <th style="text-align: center;">In Time</th>
                                    <th style="text-align: center;">Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>

    $("#search_employee").on("click", function () {
        var input_department = $('#department').val();
        var input_date = $('#date').val();
        var input_intime = $('#intime').val();
        var post_data = {
            'department': input_department,
            'date': input_date,
            'intime': input_intime,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        console.log(post_data);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_employee_for_attendance",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
</script>

