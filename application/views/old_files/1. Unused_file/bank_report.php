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
                        <p style="font-size: 20px;">Search Report</p>
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
                                <label for="bank_name">Select Bank</label>
                                <select name="bank_name" id="bank_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_bank as $each_bank) { ?>
                                        <option value="<?php echo $each_bank->bank_name; ?>">
                                            <?php echo $each_bank->bank_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn"
                                        id="search_report">Search &nbsp <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <p style="padding-left: 10px;">
                        <button id="print_button" title="Click to Print" type="button"
                                onClick="window.print()" class="btn btn-flat btn-warning">Print
                        </button>
                    </p>
                    <div id="show_info"><?php for ($i = 1; $i <= 100; $i++) {
                            echo "<br>";
                        } ?></div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#search_report").on("click", function () {
        var from_date = $('#date_from').val();
        var to_date = $('#date_to').val();
        var bank_name = $('#bank_name').val();
        var post_data = {
            'from_date': from_date,
            'to_date': to_date,
            'bank_name': bank_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_bank_report",
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
    }

    /*    @page {
            size: auto;    auto is the initial value 
            margin: 0;   this affects the margin in the printer settings 
        }*/
</style>