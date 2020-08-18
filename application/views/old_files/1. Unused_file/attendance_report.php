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
                    <?php echo form_open_multipart('aaa/aaa'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Employee Attendance Report</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-sm-4 col-xs-12" style="display:none;">
                                    <label for="department">Department</label>
                                    <select name="department" id="department" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_department as $info) { ?>
                                            <option value="<?php echo $info->department; ?>"><?php echo $info->department; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
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
                                <div class="form-group col-sm-3 col-xs-12">
                                    <button type="button" class="pull-left btn btn-success final_btn"
                                            id="search_report">Search &nbsp; <i
                                                class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>


                <div class="box box-info">
                    <p style="padding: 10px;">
                        <button id="print_button" title="Click to Print" type="button"
                                onClick="window.print()" class="btn btn-flat btn-warning">Print
                        </button>
                    </p>
                    <div class="box-header" style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
                    </div>
                    <h3 class="box-title" style="color: black; text-align: center; padding-bottom: 20px;"><u>Attendance
                            Report</u></h3>
                    <div id="attendance_report"></div>
                </div>
            </section>
        </div>
    </section>
</aside>


<script type="text/javascript">

    $("#search_report").on("click", function () {
        var report = $('#department').val();
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var post_data = {
            'report': report,
            'date_from': date_from,
            'date_to': date_to,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        console.log(post_data);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_employee_attendance_report",
            data: post_data,
            success: function (data) {
                $('#attendance_report').html(data);
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
    }

    /*    @page {
            size: auto;    auto is the initial value
            margin: 0;   this affects the margin in the printer settings
        }*/
</style>