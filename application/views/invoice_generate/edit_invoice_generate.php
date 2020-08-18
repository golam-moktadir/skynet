<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable" id="view_invoice">
                <div style="color: black;"  class="no_print">
                    <form id="invoice_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: blue; font-weight: bolder; text-align: center;">
                                Edit Bill Collection Options
                            </p>
                            <div class="row">
                                <input type="hidden" readonly name="record_id" id="record_id" value="<?php echo $one_inv[0]->record_id; ?>" class="form-control">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control new_datepicker"
                                           placeholder="Insert Date" name="date" id="date" value="<?php echo $one_inv[0]->paid_date; ?>"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="client_reseller">Dish/ISP Client</label>
                                    <select name="client_reseller" id="client_reseller" class="form-control selectpicker">
                                        <option value="<?php echo $one_inv[0]->client_reseller; ?>">
                                            <?php echo $one_inv[0]->client_reseller == "Client" ? "Dish Client" : "Dish Client"; ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" id="client_field"  <?php echo $one_inv[0]->client_reseller == "Client" ? "" : "style='display: none;'"; ?>>
                                    <label for="client_list">Dish Client</label>
                                    <select name="client_list" id="client_list" class="form-control selectpicker">
                                        <option value="<?php echo $one_inv[0]->client_id; ?>">
                                            <?php echo $one_inv[0]->client_name . " (" . $one_inv[0]->client_id . ")"; ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" id="reseller_field" <?php echo $one_inv[0]->client_reseller == "Reseller" ? "" : "style='display: none;'"; ?>>
                                    <label for="reseller_list">ISP Client</label>
                                    <select name="reseller_list" id="reseller_list" class="form-control selectpicker">
                                        <option value="<?php echo $one_inv[0]->reseller_id; ?>">
                                            <?php echo $one_inv[0]->reseller_name . " (" . $one_inv[0]->reseller_id . ")"; ?>
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" readonly name="mobile" id="mobile" value="<?php echo $one_inv[0]->mobile; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" readonly name="address" id="address"  value="<?php echo $one_inv[0]->address; ?>" class="form-control">
                                </div>

                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="due_mon_amount">Payable</label></font>
                                    <input type="text" readonly="" name="due_mon_amount" id="due_mon_amount" class="form-control" value="<?php echo $one_inv[0]->due_mon_amount; ?>">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="discount">Discount</label>
                                    <input type="text" name="discount" id="discount" value="<?php echo $one_inv[0]->discount; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="remarks">Remarks</label>
                                    <select name="remarks" id="remarks" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="<?php echo $one_inv[0]->remarks; ?>">
                                            <?php echo $one_inv[0]->remarks; ?>
                                        </option>
                                        <option value="">-- Select --</option>
                                        <option value="VIP Client">VIP Client</option>
                                        <option value="Client Demand Discount">Client Demand Discount</option>
                                        <option value="Client Family Issue">Client Family Issue</option>
                                        <option value="Accident/Dead Issue">Accident/Dead Issue</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="sub_total">Sub Total</label>
                                    <input type="text" readonly name="sub_total" id="sub_total"  value="<?php echo $one_inv[0]->sub_total; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="paid_amount">Paid Amount</label></font>
                                    <input type="text" name="paid_amount" id="paid_amount"  value="<?php echo $one_inv[0]->paid_amount; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="due">Rest Amount</label>
                                    <input type="text" readonly name="due" id="due"  value="<?php echo $one_inv[0]->due; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="advance">Advance Pay</label>
                                    <input type="text" readonly name="advance"  value="<?php echo $one_inv[0]->advance; ?>" id="advance" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="collect_by">Collect By</label>
                                    <input type="text" readonly="" value="<?php echo $this->session->ses_full_name; ?>" name="collect_by" id="collect_by" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="receipt_no">Receipt No.</label>
                                    <input type="text" name="receipt_no" id="receipt_no" value="<?php echo $one_inv[0]->receipt_no; ?>" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-info">Edit <i
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
                            Collected All Bill Info
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
    $("#client_reseller").on("change paste keyup", function () {
        var client_reseller = $("#client_reseller").val();
        $('#client_list').val("");
        $("#client_list").selectpicker('refresh');
        $('#reseller_list').val("");
        $("#reseller_list").selectpicker('refresh');
        $('#remarks').val("");
        $("#remarks").selectpicker('refresh');
        $('#mobile').val("");
        $('#address').val("");
        $('#due_mon_amount').val(0);
        $('#discount').val(0);
        $('#sub_total').val(0);
        $('#paid_amount').val(0);
        $('#due').val(0);
        $('#advance').val(0);
        //alert(service_type);
        if (client_reseller === "Client") {
            $("#client_field").show();
            $("#reseller_field").hide();
        } else if (client_reseller === "Reseller") {
            $("#reseller_field").show();
            $("#client_field").hide();
        } else {
            $("#client_field").hide();
            $("#reseller_field").hide();
        }
    });

    $('#client_list, #reseller_list').on('change paste keyup', function () {
        $('#remarks').val("");
        $("#remarks").selectpicker('refresh');
        $('#mobile').val("");
        $('#address').val("");
        $('#due_mon_amount').val(0);
        $('#discount').val(0);
        $('#sub_total').val(0);
        $('#paid_amount').val(0);
        $('#due').val(0);
        $('#advance').val(0);
        var client_reseller = $('#client_reseller').val();
        if (client_reseller == "Client") {
            var client_id = $('#client_list').val();
            var post_data = {
                'client_id': client_id,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                url: "<?php echo base_url(); ?>Get_data/get_client_info_invoice",
                type: "post",
                dataType: "json",
                data: post_data,
                success: function (data) {
                    $('#mobile').val(data[0]);
                    $('#address').val(data[1]);
//                        alert(data);
                    var monthly_due = parseInt(data[2]) - (parseInt(data[3]) + parseInt(data[4]));
                    $('#due_mon_amount').val(monthly_due);
                    $('#sub_total').val(monthly_due);
                    $('#due').val(monthly_due);
                }
            });
        } else if (client_reseller == "Reseller") {
            var reseller_id = $('#reseller_list').val();
            var post_data = {
                'reseller_id': reseller_id,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                url: "<?php echo base_url(); ?>Get_data/get_reseller_info_invoice",
                type: "post",
                dataType: "json",
                data: post_data,
                success: function (data) {
                    $('#mobile').val(data[0]);
                    $('#address').val(data[1]);
                    var monthly_due = parseInt(data[2]) - (parseInt(data[3]) + parseInt(data[4]));
                    $('#due_mon_amount').val(monthly_due);
                    $('#sub_total').val(monthly_due);
                    $('#due').val(monthly_due);
                }
            });
        }
    });

    $('#discount').on('change paste keyup', function () {
        var discount = $('#discount').val();
        var due_mon_amount = $('#due_mon_amount').val();
        var sub_total = due_mon_amount - discount;
        $('#sub_total').val(sub_total);
        $('#paid_amount').val(0);
        $('#due').val(0);
        $('#advance').val(0);
    });

    $('#paid_amount').on('change paste keyup', function () {
        var sub_total = $('#sub_total').val();
        var total_paid = parseInt($('#paid_amount').val());
        var due = parseInt(sub_total) - parseInt(total_paid);
        var advance = parseInt(total_paid) - parseInt(sub_total);
        if (due < 0) {
            $('#advance').val(advance);
            $('#due').val(0);
        } else {
            $('#due').val(due);
            $('#advance').val(0);
        }
    });
    $("#invoice_form").on("submit", function (e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Insert_data/edit_invoice_generate";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: $(this).serialize(),
                success: function (data) {
                    $('#client_list').val("");
                    $('#reseller_list').val("");
                    $('#client_reseller').val("");
                    $("#client_list").selectpicker('refresh');
                    $("#reseller_list").selectpicker('refresh');
                    $("#client_reseller").selectpicker('refresh');
                    $('#remarks').val("");
                    $("#remarks").selectpicker('refresh');
                    $("#invoice_form")[0].reset();
                    $("#view_invoice").html(data);
                }
            });
        }
    });

    function delete_data(id) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/invoice_generate";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: {'id': id},
                success: function (data) {
                    alert(data);
                    view();
                }
            });
        }
    }

    function edit_data(id) {
        var url = "<?php echo base_url() ?>Show_form/edit_invoice_generate/" + id;
        window.location.replace(url);
    }

    function show_invoice(id) {
        var url = "<?php echo base_url() ?>Insert_data/show_invoice/" + id;
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
//                    data: {'id': id},
            success: function (data) {
                $("#view_invoice").html(data);
            }
        });
    }

    function view() {
        $.ajax({
            url: "<?php echo base_url() ?>View_data/invoice_generate",
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
            "order": false
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