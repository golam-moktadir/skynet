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
                        <p style="font-size: 20px;">Supplier Ledger</p>
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
                                <label for="vendor">Select Supplier</label>
                                <select id="vendor" name="vendor" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_vendor as $info) { ?>
                                        <option value="<?php echo $info->manufacture_company; ?>">
                                            <?php echo "$info->manufacture_company [ID: $info->record_id]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" id="search_btn" class="pull-left btn btn-success final_btn">Search
                                    <i
                                            class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info"><?php for ($i = 1; $i <= 100; $i++) {
                        echo "<br>";
                    } ?></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#search_btn").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var vendor = $('#vendor').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'vendor': vendor,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_purchase_due_statement",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
</script>