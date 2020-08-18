<?php if (!empty($all_value)) { ?>
    <input type="hidden" name="session" id="session" value="<?php echo $session; ?>">
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th style="text-align: center;">SL</th>
                <th style="text-align: center;">Name</th>
                <th style="text-align: center;">Designation</th>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Day of the Week</th>
                <th style="text-align: center;">In Time</th>
                <th style="text-align: center;">Status</th>
            </tr>
            </thead>
            <tbody>
            <tbody>
            <?php $count = 0;
            foreach ($all_value as $single_value) {
                $count++; ?>
                <tr>
                    <td style="text-align: center;"><?php echo $count; ?></td>
                    <input type="hidden" name="employee_id<?php echo $count; ?>" id="employee_id<?php echo $count; ?>"
                           value="<?php echo $single_value->record_id; ?>">
                    <td style="text-align: center;"><?php echo "$single_value->name [ID: $single_value->record_id]"; ?></td>
                    <input type="hidden" name="name<?php echo $count; ?>" id="name<?php echo $count; ?>"
                           value="<?php echo $single_value->name; ?>">
                    <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                    <input type="hidden" name="designation<?php echo $count; ?>" id="designation<?php echo $count; ?>"
                           value="<?php echo $single_value->designation; ?>">
                    <td style="text-align: center;"><?php echo $date; ?></td>
                    <input type="hidden" name="date" id="date" value="<?php echo $date; ?>">
                    <td style="text-align: center;"><?php echo date("l"); ?></td>
                    <input type="hidden" name="day" id="day" value="<?php echo date("l"); ?>">
                    <td style="text-align: center;"><?php echo $intime; ?></td>
                    <input type="hidden" name="intime" id="intime" value="<?php echo $intime; ?>">
                    <td style="text-align: center;">
                        <select name="status<?php echo $count; ?>" id="status<?php echo $count; ?>"
                                class="form-control">
                            <option value="">--Select--</option>
                            <option value="1">Present</option>
                            <option value="2">Absent</option>
                            <option value="3">Late</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="6" style="text-align: center;"></td>
                <input type="hidden" name="count"
                       id="<?php echo $count; ?>" value="<?php echo $count; ?>">
                <input type="hidden" name="e_type"
                       id="<?php echo $department; ?>" value="<?php echo $department; ?>">
                <td style="text-align: center; float: right">
                    <button type="submit" class="pull-left btn btn-success" id="give_attendance">Submit &nbsp; <i
                                class="fa fa-arrow-circle-right"></i></button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    </form>
<?php } ?>


