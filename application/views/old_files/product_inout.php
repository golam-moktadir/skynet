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
                    <div class="box-body">
                        <p style="font-size: 20px;">Product In & Out Info</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>

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
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="in_out">Product In/Out</label>
                                <select id="in_out" name="in_out" class="form-control selectpicker"
                                data-container="body">
                                    <option value="">--Select--</option>
                                    <option value="in">In</option>
                                    <option value="out">Out</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn" id="inout_report">
                                    Search &nbsp<i
                                            class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="inout"></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    window.onload = function () {
        $('#inout_report').on('click', function (e) {
            var inout = $('#in_out').val();
            var date_from = $('#date_from').val();
            var date_to = $('#date_to').val();
            var post_data = {
                'date_from': date_from, 'date_to': date_to, 'trans_type': inout,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Get_ajax_value/inout_report",
                data: post_data,
                success: function (data) {
                    $('#inout').html(data);
                }
            });
        });
    };
</script>