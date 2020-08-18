<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" class="no_print">
                    <form id="balance_sheet_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;">
                                Balance Sheet
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date_from">Date From</label>
                                    <input type="text" class="form-control new_datepicker"
                                           placeholder="Insert Date" name="date_from" id="date_from" value="<?php echo date('Y-m-d'); ?>"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date_to">Date To</label>
                                    <input type="text" class="form-control new_datepicker"
                                           placeholder="Insert Date" name="date_to" id="date_to" value="<?php echo date('Y-m-d'); ?>"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="client_reseller">Dish Line / ISP</label>
                                    <select name="client_reseller" id="client_reseller" class="form-control">
                                        <option value="">All</option>
                                        <option value="Client">Dish Line</option>
                                        <option value="Reseller">ISP</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="income_head">User Wise</label>
                                    <select name="user" id="user" class="form-control">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_role as $info) { ?>
                                            <option value="<?php echo $info->record_id; ?>">
                                                <?php echo $info->full_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Search <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="view_table"></div>
            </section>
        </div>
    </section>
</aside>

<script>
    $("#balance_sheet_form").on("submit", function (e) {
        e.preventDefault();
        var url = "<?php echo base_url() ?>View_data/balance_sheet";
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: $(this).serialize(),
            success: function (data) {
//                    console.log(data);
                $("#view_table").html(data);
                datatable();
            }
        });
    });
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