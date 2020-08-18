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
$yearArray = range(date("Y") - 1, date("Y") + 1);
$monthArray = array("January", "February", "March", "April",
    "May", "June", "July", "August", "September",
    "October", "November", "December",
);
?>
<style>
    .content {
        padding-top: 0px;
        margin-top: 0px;
    }

    .form-group {
        margin-bottom: 5px;
    }

    .final_btn {
        margin-top: 27px;
        margin-bottom: 8px;
    }

    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #76e094;
    }
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" id="no_print1">
                    <?php echo form_open_multipart('Insert/create_salary_sheet'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Salary Payment</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="date">Date From</label>
                                <input type="text" class="form-control new_datepicker"
                                       placeholder="Insert Date" name="date" id="date"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="employee_id">Select Employee</label>
                                <select name="employee_id" id="employee_id" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_employee as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo $info->name . " [ ID-" . $info->record_id . " ]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder=""
                                       name="designation" readonly>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="account_no">Account No.</label>
                                <input type="text" class="form-control" id="account_no" placeholder="" name="account_no"
                                       readonly>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="salary_scale">Salary Amount</label>
                                <input type="text" class="form-control" id="salary_scale" placeholder=""
                                       name="salary_scale">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="submit" class="pull-left btn btn-success final_btn">Pay <i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="box box-info" style="color: black;">
                    <div class="box-body" id="no_print2">
                        <p style="font-size: 20px;">Search for Salary Sheet</p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="date_from">Date From</label>
                                <input type="text" class="form-control new_datepicker"
                                       placeholder="Insert Date" name="date_from" id="date_from"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="date_to">Date To</label>
                                <input type="text" class="form-control new_datepicker"
                                       placeholder="Insert Date" name="date_to" id="date_to"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="margin-top: 27px;">
                                <button id="search_month" type="button" class="pull-left btn btn-success">Search <i
                                            class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="show_info"></div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#employee_id").on("change paste keyup", function () {
        var input_data = $('#employee_id').val();
        var post_data = {
            'employee_id': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_des_acc_salary",
            data: post_data,
            dataType: 'JSON',
            success: function (data) {
                $('#designation').val(data[0]);
                $('#account_no').val(data[1]);
                $('#salary_scale').val(data[2]);
            }
        });
    });
    $("#search_month").on("click", function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_salary_sheet",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
</script>

<style>
    @media print {
        a[href]:after {
            content: none !important;
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

        #no_print5 {
            display: none;
        }
    }
</style>

