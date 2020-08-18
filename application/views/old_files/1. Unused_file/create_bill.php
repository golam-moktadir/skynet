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
            <section class="col-xs-12 connectedSortable" id="show_bill"> 
                <div class="box box-info" style="color: black;">
                    <div class="box-body">
                        <p style="font-size: 20px;">Create Bill</p>
                        <p  style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="date">Date</label>
                                <input type="text" class="form-control new_datepicker" id="date" placeholder="Insert Date" name="date"
                                       value="<?php echo date("Y-m-d");?>">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="patient">Patient ID & Name</label>
                                <select name="patient" id="patient" class="form-control selectpicker"
                                        data-live-search ="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_patient as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo "[ID-". $info->record_id."] [Name-". $info->name."]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div id="show_all_due"></div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
        $("#patient").on("change paste keyup", function () {
            var input_data = $('#patient').val();
            var post_data = {
                'patient': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Get_ajax_value/get_due_bill",
                data: post_data,
                success: function (data) {
                 $('#show_all_due').html(data);
                }
            });
        });
</script>