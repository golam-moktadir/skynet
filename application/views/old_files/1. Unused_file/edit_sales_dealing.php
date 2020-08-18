<?php
foreach($one_value as $one_info){
    $record_id = $one_info->record_id;
    $name=$one_info->name;
    $client_id=$one_info->client_id;
    $mobile=$one_info->mobile;
    $email=$one_info->email;
    $meeting_date=$one_info->meeting_date;
    $venue=$one_info->venue;
    $time=$one_info->time;
    $responsible_person=$one_info->responsible_person;
    $comments=$one_info->comments;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/sales_dealing/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Sales Schedule</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="client">Select Client<b style="color: red;">*</b></label>
                                <select name="client" id="client" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="<?php echo $name . "#" . $client_id; ?>"><?php echo $name . " [ID: " . $client_id . "]"; ?></option>
                                    <?php foreach ($all_client as $info) { ?>
                                        <option value="<?php echo $info->name . "#" . $info->record_id; ?>">
                                            <?php echo $info->name . " [ID: " . $info->record_id . "]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" name="mobile" value="<?php echo $mobile; ?>" 
                                       id="mobile" class="form-control" readonly>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email"
                                      placeholder=""  value="<?php echo $email; ?>" name="email" readonly>
                            </div>                            
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="meeting_date">Meeting Date</label>
                                <input type="date" class="form-control" id="meeting_date"
                                       placeholder=""  value="<?php echo $meeting_date; ?>" name="meeting_date">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="venue">Venue</label>
                                <input type="text" class="form-control" id="venue"
                                      placeholder=""  value="<?php echo $venue; ?>"name="venue">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time"
                                     placeholder=""  value="<?php echo $time; ?>" name="time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="responsible_person">Responsible Person</label>
                                <input type="text" class="form-control" id="responsible_person"
                                        value="<?php echo $responsible_person; ?>" placeholder="" name="responsible_person">
                            </div>
                             <div class="form-group col-sm-10 col-xs-12" style="width: 300px;">
                                <label for="comments">Comments</label>
                                <textarea class="form-control" id="comments" rows="3"
                                     placeholder="" name="comments"><?php echo $comments; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-left btn btn-success">Edit <i
                                class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    </form>
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