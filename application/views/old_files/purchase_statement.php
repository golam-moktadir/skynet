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
                    <?php echo form_open_multipart('Insert/purchase_medicine'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Purchase Statement</p>
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
                                <label for="po_no">Select PO No.</label>
                                <select id="po_no" name="po_no" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_po as $info) { ?>
                                        <option value="<?php echo $info->po_no; ?>">
                                            <?php echo $info->po_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="machine_category">Select Machine Category</label>
                                <select id="machine_category" name="machine_category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_machine_category as $info) { ?>
                                        <option value="<?php echo $info->machine_category; ?>">
                                            <?php echo $info->machine_category; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="parts_no">Select Parts No.</label>
                                <select id="parts_no" name="parts_no" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_parts_no as $info) { ?>
                                        <option value="<?php echo $info->parts_no; ?>">
                                            <?php echo $info->parts_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="manufacturer">Select Supplier</label>
                                <select id="manufacturer" name="manufacturer" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($company as $info) { ?>
                                        <option value="<?php echo $info->manufacture_company; ?>">
                                            <?php echo $info->manufacture_company; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-1 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn"
                                        id="search_purchase">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="form-group col-sm-1 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn"
                                        id="export_excel">Excel <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_purchase">
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<br>";
                    }
                    ?>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#search_purchase").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var po_no = $('#po_no').val();
        var machine_category = $('#machine_category').val();
        var parts_no = $('#parts_no').val();
        var manufacturer = $('#manufacturer').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'po_no': po_no, 'manufacturer': manufacturer,
            'machine_category': machine_category, 'parts_no': parts_no,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_purchase_statement",
            data: post_data,
            success: function (data) {
                $('#show_purchase').html(data);
            }
        });
    });

    $("#export_excel").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var po_no = $('#po_no').val();
        var machine_category = $('#machine_category').val();
        var parts_no = $('#parts_no').val();
        var manufacturer = $('#manufacturer').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'po_no': po_no, 'manufacturer': manufacturer,
            'machine_category': machine_category, 'parts_no': parts_no,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/download_excel_purchase",
            data: post_data,
            success: function (data) {
                file_path="http://localhost/earth/"+data;
                var a = document.createElement("a");
                a.href = file_path;
                a.setAttribute("download", data);
                a.click();
            }
        });
    });
</script>