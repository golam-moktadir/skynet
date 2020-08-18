<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Payment Successful";
} elseif ($msg == "edit") {
    $msg = "Edited Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
}
?>
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
                        <p style="color: black; font-size: 20px;">Supplier Payment</p>     
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="search_vendor">Supplier</label>
                                <select name="search_vendor" id="search_vendor" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_vendor as $info) { ?>
                                        <option value="<?php echo $info->manufacture_company; ?>">
                                            <?php echo "$info->manufacture_company [ID: $info->record_id]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <button type="button" class="pull-left btn btn-info" style="margin-top: 24px; width: 150px;"
                                        id="search_btn">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info"><?php for($i=1;$i<=100;$i++){echo "<br>";} ?></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $('#search_btn').on('click', function (e) {
        var search_vendor = $('#search_vendor').val();
        var post_data = {
            'search_vendor': search_vendor,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_purchase_due",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
</script>
