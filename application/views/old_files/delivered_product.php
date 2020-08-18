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
                <div style="color: black;" id="no_print1">
                    <div class="box-body">
                        <p style="font-size: 20px;">Delivery Product</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="challan">Select Reference No.</label>
                                <select id="challan" name="challan" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php
                                    foreach ($invoice as $info) {
                                        ?>
                                        <option value="<?php echo $info->invoice_no; ?>">
                                            <?php echo $info->invoice_no; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <button type="button" class="pull-left btn btn-success final_btn" 
                                        id="search_challan">Search <i class="fa fa-arrow-circle-right"></i></button>
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
    $("#search_challan").click(function () {
        var challan = $('#challan').val();
        var post_data = {'challan': challan,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_challan_statement",
            data: post_data,
            success: function (data) {
                $('#show_sales').html(data);
            }
        });
    });
</script>