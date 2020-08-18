<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" class="no_print">
                    <form id="client_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                Dish Client Info
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit Dish Client Info
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="branch_name">Company Name</label>
                                    <select name="branch_name" id="branch_name" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_branch as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>">
                                                <?php echo $info->branch_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="service_type">Service Type</label>
                                    <select name="service_type" id="service_type" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_service as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>"><?php echo $info->service_type; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="image">Photo</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="code_no">Code No.</label>
                                    <input type="text" name="code_no" id="code_no" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="nid">NID</label>
                                    <input type="text" name="nid" id="nid" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="email">House No</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="area">Area</label>
                                    <select name="area" id="area" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_area as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>">
                                                <?php echo $info->area_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="package">Package</label>
                                    <select name="package" id="package" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_package as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>">
                                                <?php echo $info->package_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="package_price">Monthly Bill</label>
                                    <input type="text" name="package_price" id="package_price" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Connection Date</label>
                                    <input type="text" class="form-control new_datepicker"
                                           placeholder="Insert Date" name="date" id="date"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="connection_charge">Connection Charge</label>
                                    <input type="text" name="connection_charge" id="connection_charge" class="form-control">
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px;" id="insert_btn">
                                    <button type="submit" class="pull-left btn btn-success">Insert <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px; display:none;"  id="edit_btn" >
                                    <button type="button" class="pull-left btn btn-info" id="click_edit">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <div style="text-align: right; padding-right: 27px;" class="no_print">
                            <button  id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light">
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: purple; font-weight: bolder; text-align: center;">
                            Dish Client Info
                        </p>
                    </div>

                    <div class="box-body table-responsive"  id="view_table" style="width: 98%; overflow-x: scroll; color: black;">
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>
    view();
    $("#client_form").on("submit", function (e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Insert_data/client_info";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#branch_name').val("");
                    $('#service_type').val("");
                    $('#area').val("");
                    $('#package').val("");
//                      $('#branch_name').find('option:first').attr('selected', 'selected'); 
                    $("#branch_name").selectpicker('refresh');
                    $("#service_type").selectpicker('refresh');
                    $("#area").selectpicker('refresh');
                    $("#package").selectpicker('refresh');
                    $("#client_form")[0].reset();
                    alert(data);
                    view();
                }
            });
        }
    });

    function change_status(id, status_value) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Edit_data/change_status";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: {'id': id, 'status_value': status_value,  'db_name': "client_info"},
                success: function (data) {
                    alert(data);
                    view();
                }
            });
        }
    }

    function delete_data(id) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/client_info";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: {'id': id},
                //                    beforeSend: function(){
                //                                     
                //                    },
                success: function (data) {
                    alert(data);
                    view();
                }
            });
        }
    }

    function edit_data(id) {
        var url = "<?php echo base_url() ?>Get_data/client_info";
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {'id': id},
            success: function (data) {
                $('#branch_name').val(data[0].branch_id);
                $("#branch_name").selectpicker('refresh');
                $('#service_type').val(data[0].service_type_id);
                $("#service_type").selectpicker('refresh');
                $('#area').val(data[0].area_id);
                $("#area").selectpicker('refresh');
                $('#package').val(data[0].package_id);
                $("#package").selectpicker('refresh');
                $('#date').val(data[0].connection_date);
                $('#connection_charge').val(data[0].connection_charge);
                $('#name').val(data[0].name);
                $('#email').val(data[0].email);
                $('#mobile').val(data[0].mobile);
                $('#address').val(data[0].address);
                $('#code_no').val(data[0].record_id).prop('readonly', true);
                $('#nid').val(data[0].nid);
                $('#package_price').val(data[0].package_price);
                $('#insert_title').hide();
                $('#edit_title').show();
                $('#insert_btn').hide();
                $('#edit_btn').show();

            }
        });
    }

    $("#click_edit").on("click", function () {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Edit_data/client_info";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: new FormData($('#client_form')[0]),
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#branch_name').val("");
                    $('#service_type').val("");
                    $('#area').val("");
                    $('#package').val("");
//                      $('#branch_name').find('option:first').attr('selected', 'selected'); 
                    $("#branch_name").selectpicker('refresh');
                    $("#service_type").selectpicker('refresh');
                    $("#area").selectpicker('refresh');
                    $("#package").selectpicker('refresh');
                    $("#client_form")[0].reset();
                    $('#insert_title').show();
                    $('#edit_title').hide();
                    $('#insert_btn').show();
                    $('#edit_btn').hide();
                    $('#code_no').prop('readonly', false);
                    alert(data);
                    view();
                }
            });
        }
    });

    function view() {
        $.ajax({
            url: "<?php echo base_url() ?>View_data/client_info",
            dataType: "json",
            success: function (data) {
                $("#view_table").html(data);
                datatable();
            }
        });
    }

    function datatable() {
        $('#datatable').dataTable({
            //"info":false,
            "autoWidth": false,
            "order": false,
            "oSearch": {"bSmart": false}
        });
    }
</script>

<style>
    @media print {
        @page 
        {
            size: A4 landscape;   /* auto is the current printer page size */
            margin: -5mm 0mm 0mm 10mm;
        }
        html
        {
            background-color: #FFFFFF; 
            margin: 0px;  /* this affects the margin on the html before sending to printer */
        }
        .no_print {
            display: none;
        }
        ::-webkit-scrollbar{
            display: none;
        }
        .dataTables_filter {
            display: none;
        }
        .dataTables_paginate {
            display: none;
        }
        .dataTables_info {
            display: none;
        }
        .dataTables_length {
            display: none;
        }
        .dataTables_orderable{
            display: none;
        }
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after {
            display: none;
        }
    }
</style>
