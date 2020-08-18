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
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="">
                    <div class="box-body">
                        <div class="form-group" style="width: 300px;">
                            <label for="invoice">Select PO No.</label>
                            <select id="invoice" name="invoice" class="form-control selectpicker"
                                    data-live-search="true">
                                <option value="">--Select--</option>
                                <?php foreach ($purchased_product as $info) { ?>
                                    <option value="<?php echo $info->po_no; ?>"><?php
                                        echo $info->po_no;
                                        ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group" id="purchased_product"><?php for($i=1;$i<=100;$i++){echo "<br>";} ?></div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#invoice").on("change paste keyup", function () {
        var invoice = $('#invoice').val();
        var post_data = {
            'invoice_no': invoice,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/purchased_product_info",
            data: post_data,
            success: function (data) {
                $('#purchased_product').html(data);
            }
        });
    });
</script>