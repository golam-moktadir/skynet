<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div id="no_print1">
                    <div class="box-body" style="width: 98%; color: black;">
                        <p style="color: black; font-size: 20px;">Search Product</p>     
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="search_product_type">Product Category</label>
                                <select name="search_product_type" id="search_product_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>">
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="sub_category">Product Sub-category</label>
                                <select name="sub_category" id="sub_category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($sub_category as $info) { ?>
                                        <option value="<?php echo $info->sub_category; ?>">
                                            <?php echo $info->sub_category; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display:none;">
                                <label for="brand_name">Brand Name</label>
                                <select name="brand_name" id="brand_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($brand as $info) { ?>
                                        <option value="<?php echo $info->brand_name; ?>">
                                            <?php echo $info->brand_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="search_product_name">Product Name</label>
                                <select name="search_product_name" id="search_product_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($product_name as $info) { ?>
                                        <option value="<?php echo $info->product_name; ?>">
                                            <?php echo $info->product_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12" style="display: none">
                                <label for="search_product_model">Product Model</label>
                                <select name="search_product_model" id="search_product_model" class="form-control"></select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" class="pull-left btn btn-info final_btn" id="search_product">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info">
                    <?php for($i=1;$i<=100;$i++){echo "<br>";} ?>
                </div>
            </section>
        </div>
    </section>
</aside>

<style>
    .zoom {
        width: 80px;
        height: 80px;
    }
    .zoom:hover {
        -ms-transform: scale(2.5); /* IE 9 */
        -webkit-transform: scale(2.5); /* Safari 3-8 */
        transform: scale(2.5); 
    }
</style>

<script type="text/javascript">
    $('#search_product').on('click', function (e) {
        var search_product_type = $('#search_product_type').val();
        var search_product_name = $('#search_product_name').val();
        var search_product_model = $('#search_product_model').val();
        var sub_category = $('#sub_category').val();
        var brand_name = $('#brand_name').val();
        var post_data = {
            'search_product_type': search_product_type, 'search_product_name': search_product_name, 
            'search_product_model': search_product_model, 'sub_category': sub_category,
            'brand_name': brand_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_product_info",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });

    $("#search_product_name").on("change paste keyup", function () {
        var product_name = $('#search_product_name').val();
        var post_data = {
            'product_name': product_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        var option = '<option value="">-- Select --</option>';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_product_model",
            data: post_data,
            dataType: 'json',
            success: function (data) {
                $.each(data, function (key, value) {
                    option += '<option value="' + value + '">' + value + '</option>';
                });
                $('#search_product_model').html(option);
            }
        });
    });
</script>