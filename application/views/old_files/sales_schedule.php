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
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Insert/sales_schedule'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Sales Schedule</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="client">Select Client<b style="color: red;">*</b></label>
                                <select name="client" id="client" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_client as $info) { ?>
                                        <option value="<?php echo $info->name . "#" . $info->record_id; ?>">
                                            <?php echo $info->name . " [ID: " . $info->record_id . "]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" readonly>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email"
                                       value="" placeholder="" name="email" readonly>
                            </div>                            
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="meeting_date">Meeting Date</label>
                                <input type="date" class="form-control" id="meeting_date"
                                       value="" placeholder="" name="meeting_date">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="venue">Venue</label>
                                <input type="text" class="form-control" id="venue"
                                       value="" placeholder="" name="venue">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time"
                                       value="" placeholder="" name="time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="responsible_person">Responsible Person</label>
                                <input type="text" class="form-control" id="responsible_person"
                                       value="" placeholder="" name="responsible_person">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-left btn btn-success">Create <i
                                class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    </form>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>

                    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Client Name [ID]</th>
                                    <th style="text-align: center;">Mobile No.</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Meeting Date</th>
                                    <th style="text-align: center;">Venue</th>
                                    <th style="text-align: center;">Time</th>
                                    <th style="text-align: center;">Responsible Person</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_value as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;"><?php
                                            echo $single_value->name . " [ID: " .
                                            $single_value->record_id . "]";
                                            ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->email; ?></td>
                                        <td style="text-align: center;">
                                            <?php echo date('d F, Y', strtotime($single_value->meeting_date)); ?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $single_value->venue; ?></td>
                                        <td style="text-align: center;"><?php echo date('g:i A', strtotime($single_value->time)); ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->responsible_person; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-info fa fa-edit"
                                               href="<?php echo base_url(); ?>Show_edit_form/sales_schedule/<?php echo $single_value->record_id; ?>">
                                            </a>
                                            <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                                               href="<?php echo base_url(); ?>Delete/sales_schedule/<?php echo $single_value->record_id; ?>">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>
<script type="text/javascript">
    $("#client").on("change paste keyup", function () {
        var client = $('#client').val();
        var post_data = {
            'client': client,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/client_details",
            data: post_data,
            dataType: 'json',
            success: function (data) {
                $('#mobile').val(data[0]);
                $('#email').val(data[1]);
            }
        });
    });
</script>