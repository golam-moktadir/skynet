<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $name = $one_info->name;
    $designation = $one_info->designation;
    $joining_date = $one_info->joining_date;
    $department = $one_info->department;
    $mobile = $one_info->mobile;
    $address = $one_info->address;
    $bank_name = $one_info->bank_name;
    $account = $one_info->account;
    $total_salary = $one_info->total_salary;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/employee_list/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Employee Info.</p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="<?php echo $name; ?>"
                                       id="name" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="designation">Designation</label>
                                <select name="designation" id="designation" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_designation as $info) { ?>
                                        <option value="<?php echo $info->designation; ?>"
                                            <?php if ($info->designation == $designation) {
                                                echo 'selected';
                                            } ?>>
                                            <?php echo $info->designation; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="joining_date">Joining Date</label>
                                <input type="text" class="form-control new_datepicker" value="<?php echo $joining_date; ?>"
                                       id="joining_date" placeholder="Insert Date" name="joining_date">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="department">Department</label>
                                <select name="department" id="department" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_department as $info) { ?>
                                        <option value="<?php echo $info->department; ?>"
                                            <?php if ($info->department == $department) {
                                            echo 'selected';
                                        } ?>>
                                        <?php echo $info->department; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>"
                                       class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                       value="<?php echo $address; ?>" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" placeholder=""
                                       value="<?php echo $bank_name; ?>" name="bank_name">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="account">A/C No.</label>
                                <input type="text" class="form-control" id="account" placeholder=""
                                       value="<?php echo $account; ?>"
                                       name="account">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="total_salary">Salary</label>
                                <input type="text" class="form-control" id="total_salary" placeholder=""
                                       value="<?php echo $total_salary; ?>"
                                       name="total_salary">
                            </div>
                            <div class="col-sm-3">
                                <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</aside>