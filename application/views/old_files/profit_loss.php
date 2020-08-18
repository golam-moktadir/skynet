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
} elseif ($msg == "add") {
    $msg = "Product Added Successfully";
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
                        <p style="font-size: 20px;">Product-wise Profit / Loss</p>
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
                                <label for="product">Product Name</label>
                                <select name="product" id="product" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_product as $info) { ?>
                                        <option value="<?php echo $info->product_name; ?>"><?php echo $info->product_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product">Part No</label>
                                <select name="product" id="part" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_product as $info) { ?>
                                        <option value="<?php echo $info->parts_no; ?>"><?php echo $info->parts_no; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="brand">Brand Name</label>
                                <select name="brand" id="brand" class="form-control selectpicker"
                                        data-live-search="true">
                                        <option value="">--Select--</option> 
                                        <option value="XCMG">XCMG</option> 
                                        <option value="Sinotrck">Sinotrck</option> 
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button type="button" id="search_report" class="pull-left btn btn-success final_btn">
                                    Search <i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="show_report"><?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<br>";
                    }
                    ?></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#search_report").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var product = $('#product').val();
        var part = $('#part').val();
        var brand = $('#brand').val();

        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'product_name': product, 'part': part, 'brand': brand,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        //console.log(post_data);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_product_profit_loss",
            data: post_data,
            success: function (data) {
                $('#show_report').html(data);
            }
        });
    });
</script>