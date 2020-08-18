<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <form id="expense_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;">
                                Expense Entry
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control new_datepicker"
                                           placeholder="Insert Date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="invoice_no">Voucher No</label>
                                    <input type="text" name="invoice_no" id="invoice_no" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="client_reseller">Dish Line / ISP</label>
                                    <select name="client_reseller" id="client_reseller" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="Client">Dish Line</option>
                                        <option value="Reseller">ISP</option>
                                        <option value="">Others</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="expense_head_id">Expense Head</label>
                                    <select name="expense_head_id" id="expense_head_id" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_expense as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>">
                                                <?php echo $info->head; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" id="amount" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="remarks">Remarks</label>
                                    <input type="text" name="remarks" id="remarks" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="paid_by">Paid By</label>
                                    <input type="text" readonly="" value="<?php echo $this->session->ses_full_name; ?>" name="paid_by" id="paid_by" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Create <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: purple; font-weight: bolder; text-align: center;">
                            All Expense Info
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
    $("#expense_form").on("submit", function (e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Insert_data/expense";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: $(this).serialize(),
//                    beforeSend: function(){
//                                     
//                    },
                success: function (data) {
                    $('#expense_head_id').val("");
                    $("#expense_head_id").selectpicker('refresh');
                    $('#client_reseller').val("");
                    $("#client_reseller").selectpicker('refresh');
                    $("#expense_form")[0].reset();
                    alert(data);
                    view();
                }
            });
        }
    });

    function delete_data(id) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/expense";
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

    function view() {
        $.ajax({
            url: "<?php echo base_url() ?>View_data/expense",
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