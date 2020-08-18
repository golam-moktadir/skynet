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
    /*
        .table tbody tr:hover td, .table tbody tr:hover th {
            background-color: #76e094;
    }*/
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" id="no_print1">
                    <div class="box-body">
                        <p style="font-size: 20px;">Present Report</p>
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
                                <label for="brand_name">Brand Name</label>
                                <select name="brand_name" id="brand_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <option value="XCMG">XCMG</option>
                                    <option value="Sinotruk">Sinotruk</option>
                                </select>
                            </div>
                            <!-- <div class="form-group col-sm-3 col-xs-12">
                                <label for="client_id">Client ID</label>
                                <select name="client_id" id="client_id" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_client as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo "$info->name [ID: $info->record_id]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_category">Machine Category</label>
                                <select id="product_category" name="product_category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>"
                                                ><?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="parts_name">Parts Name</label>
                                <select id="parts_name" name="parts_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_product_name as $info) { ?>
                                        <option value="<?php echo $info->product_name; ?>">
                                            <?php echo $info->product_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="invoice">Select Reference No.</label>
                                <select id="invoice" name="invoice" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($invoice as $info) { ?>
                                        <option value="<?php echo $info->invoice_no; ?>">
                                            <?php echo $info->invoice_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="user">Select User</label>
                                <select id="user" name="user" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($admin as $info) { ?>
                                        <option value="<?php echo $info->name; ?>">
                                            <?php echo $info->name; ?>
                                        </option>
                                    <?php } ?>
                                    <?php foreach ($user as $info) { ?>
                                        <option value="<?php echo $info->name; ?>">
                                            <?php echo $info->name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div> -->
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn"
                                        id="search_sales">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_sales"><?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<br>";
                    }
                    ?></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#search_sales").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var brand_name = $('#brand_name').val();
        // var product_category = $('#product_category').val();
        // var product_name = $('#parts_name').val();
        // var invoice = $('#invoice').val();
        // var user = $('#user').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to,  'brand_name': brand_name,
            //  'product_name': product_name, 'product_category': product_category,
            // 'invoice': invoice, 'user': user, 'client_id': client_id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_sales_report",
            data: post_data,
            success: function (data) {
                $('#show_sales').html(data);
            }
        });
    });
</script>