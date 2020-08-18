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
                <div id="no_print1">
                    <div class="box-body" style="width: 98%; color: black;">
                        <p style="color: black; font-size: 20px;">Search By Serial</p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="search_serial">Serial No.</label>
                                <select name="search_serial" id="search_serial" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($serial as $info) {
                                        if ($info != '') {
                                            ?>
                                            <option value="<?php echo $info; ?>">
                                                <?php echo $info; ?>
                                            </option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <button type="button" class="pull-left btn btn-info final_btn" id="search_product">
                                    Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info"></div>
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
        var search_serial = $('#search_serial').val();
        var post_data = {
            'serial_no': search_serial,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_sold_product_info",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });

</script>