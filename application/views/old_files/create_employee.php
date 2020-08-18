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
} elseif ($msg == "active") {
    $msg = "ID is active Now";
} elseif ($msg == "inactive") {
    $msg = "ID is inactive Now";
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <?php echo form_open_multipart('Insert/create_employee'); ?>
                    <div>
                        <p style="font-size: 20px;">Insert Employee</p>
                        <p style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="designation">Designation</label>
                                <select name="designation" id="designation" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_designation as $info) { ?>
                                        <option value="<?php echo $info->designation; ?>"><?php echo $info->designation; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="joining_date">Joining Date</label>
                                <input type="text" class="form-control new_datepicker" id="joining_date"
                                       placeholder="Insert Date"
                                       name="joining_date" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="department">Department</label>
                                <select name="department" id="department" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_department as $info) { ?>
                                        <option value="<?php echo $info->department; ?>"><?php echo $info->department; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                       value="" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="total_salary">Salary</label>
                                <input type="text" class="form-control" id="total_salary" placeholder=""
                                       name="total_salary">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" placeholder=""
                                       name="bank_name">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="account">A/C No.</label>
                                <input type="text" class="form-control" id="account" placeholder=""
                                       name="account">
                            </div>
                            <div class="col-sm-3">
                                <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success">Create
                                    <i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                        <div id="permission_div" style="display: none;">
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder=""
                                           name="username">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder=""
                                           name="password">
                                </div>
                            </div>
                            <div class="row" style="color: black; font-size: 20px;">
                                <div class="form-group col-sm-12 col-xs-12">
                                    <i class="fa fa-angle-double-right" style="color: #066;"> Permission</i>
                                </div>
                            </div>
                            <div class="row" style="color: black; font-size: 18px;">
                                <div class="col-sm-3">
                                    <input type="hidden" name="hr" value="0">
                                    <input type="checkbox" name="hr" value="1"> HR Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="inventory" value="0">
                                    <input type="checkbox" name="inventory" value="1"> Inventory Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="commerce" value="0">
                                    <input type="checkbox" name="commerce" value="1"> Commerce Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="project" value="0">
                                    <input type="checkbox" name="project" value="1"> Project Part
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px; color: black; font-size: 18px;">
                                <div class="col-sm-3">
                                    <input type="hidden" name="crm" value="0">
                                    <input type="checkbox" name="crm" value="1"> CRM Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="payment" value="0">
                                    <input type="checkbox" name="payment" value="1"> Payment Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="accounting" value="0">
                                    <input type="checkbox" name="accounting" value="1"> Accounting Part
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="others" value="0">
                                    <input type="checkbox" name="others" value="1"> Others Part
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div>
                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <p style="font-size: 20px;">Employee List</p>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center;">SL</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Department</th>
                                <th style="text-align: center;">Designation</th>
                                <th style="text-align: center;">Mobile</th>
                                <th style="text-align: center;">Address</th>
                                <th style="text-align: center;">Joining Date</th>

                                <th style="text-align: center;">Bank Info.</th>
                                <th style="text-align: center;">Total Salary</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 0;
                            foreach ($all_employee as $single_value) {
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo "$single_value->name [ID: $single_value->record_id"; ?></td>
                                    <td style="text-align: center;">
                                        <?php if (file_exists('./assets/img/employee/' . $single_value->image)) { ?>
                                            <img src="<?php echo base_url(); ?>assets/img/employee/<?php echo $single_value->image; ?>"
                                                 width="50" height="50">
                                        <?php } ?>
                                    </td>
                                    <td style="text-align: center;"><?php echo $single_value->department; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                    <td style="text-align: center;">
                                        <?php
                                        echo date('d/m/y', strtotime($single_value->joining_date));
                                        ?>
                                    </td>

                                    <td style="text-align: center;"><?php echo "$single_value->bank_name<br>A/C: $single_value->account"; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->total_salary; ?></td>
                                    <td style="text-align: center;">
                                        <?php
                                        if ($single_value->block_status == 0) {
                                            echo "Active";
                                        } else {
                                            echo "Inactive";
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle">
                                        <a style="margin: 5px;"
                                           href="<?php echo base_url(); ?>Show_edit_form/employee_list/<?php echo $single_value->record_id; ?>"
                                           class="btn btn-info fa fa-edit" title="Edit">
                                        </a>
                                        <a style="margin: 5px;"
                                           href="<?php echo base_url(); ?>Delete/employee_list/<?php echo $single_value->record_id; ?>"
                                           class="btn btn-danger fa fa-trash-o" title="Delete">
                                        </a>
                                        <?php if ($single_value->block_status == 1) { ?>
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Edit/employee_active/<?php echo $single_value->record_id; ?>"
                                               class="btn btn-success fa fa-eye" title="Active">
                                            </a>
                                        <?php } else { ?>
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Edit/employee_inactive/<?php echo $single_value->record_id; ?>"
                                               class="btn btn-danger fa fa-eye-slash" title="Inactive">
                                            </a>
                                        <?php } ?>
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
