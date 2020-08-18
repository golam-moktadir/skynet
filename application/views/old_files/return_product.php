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
                <div style="color: black;">
                    <div class="box-body">
                        <p style="font-size: 20px;">Return Product</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="invoice">Select Invoice No.</label>
                                <select id="invoice" name="invoice" class="form-control selectpicker "
                                        data-live-search="true" data-container="body">
                                    <option value="">--Select--</option>
                                    <?php foreach($sold_product as $value): ?>
                                        <option value="<?php echo $value['invoice_no'] ?>"><?php echo $value['invoice_no'] ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group col-sm-12" id="sold_product"><?php for($i=1;$i<=100;$i++){echo "<br>";} ?></div>
                        </div>
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
            url: "<?php echo base_url(); ?>Get_ajax_value/sold_product_info",
            data: post_data,
            success: function (data) {
                $('#sold_product').html(data);
            }
        });
    });
</script>