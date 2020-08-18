<?php
foreach($one_value as $one_info){
    $record_id = $one_info->record_id;
    $start_time=$one_info->start_time;
    $end_time=$one_info->end_time;
    $temp_available_days = $one_info->available_days;
    $available_days = explode('#', $temp_available_days);
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/employee_schedule/'.$record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Schedule</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" placeholder="" name="date"
                                       value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="start_time">Start Time</label>
                                <input type="time" class="form-control" id="start_time" placeholder=""
                                       value="<?php echo $start_time;?>" name="start_time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="">
                                <label for="end_time">End Time</label>
                                <input type="time" class="form-control" id="end_time" placeholder=""
                                       value="<?php echo $end_time;?>" name="end_time">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label>Available Days</label>
                                <select name="available_days[]" id="available_days" class="form-control selectpicker"
                                        multiple>
                                    <option value="Saturday"
                                        <?php if (in_array("Saturday", $available_days)) {
                                            echo "selected";
                                        } ?>>Saturday
                                    </option>
                                    <option value="Sunday"
                                        <?php if (in_array("Sunday", $available_days)) {
                                            echo "selected";
                                        } ?>>Sunday
                                    </option>
                                    <option value="Monday"
                                        <?php if (in_array("Monday", $available_days)) {
                                            echo "selected";
                                        } ?>>Monday
                                    </option>
                                    <option value="Tuesday"
                                        <?php if (in_array("Tuesday", $available_days)) {
                                            echo "selected";
                                        } ?>>Tuesday
                                    </option>
                                    <option value="Wednesday"
                                        <?php if (in_array("Wednesday", $available_days)) {
                                            echo "selected";
                                        } ?>>Wednesday
                                    </option>
                                    <option value="Thursday"
                                        <?php if (in_array("Thursday", $available_days)) {
                                            echo "selected";
                                        } ?>>Thursday
                                    </option>
                                    <option value="Friday"
                                        <?php if (in_array("Friday", $available_days)) {
                                            echo "selected";
                                        } ?>>Friday
                                    </option>
                                </select>
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