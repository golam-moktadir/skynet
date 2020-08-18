<div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Unique ID</th>
            <th style="text-align: center;">Image</th>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Username</th>
            <th style="text-align: center;">Designation</th>
            <th style="text-align: center;">Joining Date</th>
            <th style="text-align: center;">Department</th>
            <th style="text-align: center;">Visting Hour</th>
            <th style="text-align: center;">Docotor Fee</th>
            <th style="text-align: center;">Available Days</th>
            <th style="text-align: center;">Mobile</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Bank Name</th>
            <th style="text-align: center;">A/C</th>
            <th style="text-align: center;">Total Salary</th>
            <th style="text-align: center;">Permission</th>
            <th style="text-align: center;">Action</th>
            <th style="text-align: center;">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        foreach ($all_staff as $single_value) {
            $count++;
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $count; ?></td>
                <td style="text-align: center;"><?php echo $single_value->record_id; ?></td>
                <td style="text-align: center;">
                    <img src="<?php echo base_url(); ?>assets/img/staff/<?php echo $single_value->image; ?>"
                         width="50" height="50">
                </td>
                <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->username; ?></td>
                <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->joining_date)); ?></td>
                <td style="text-align: center;"><?php echo $single_value->department; ?></td>
                <td style="text-align: center;"><?php echo $single_value->visiting_hour; ?></td>
                <td style="text-align: center;"><?php echo $single_value->doctor_fee; ?></td>
                <td style="text-align: center;">
                    <?php
                    $each_day = explode('#', $single_value->available_days);
                    foreach ($each_day as $day) {
                        echo $day . "<br>";
                    }
                    ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                <td style="text-align: center;"><?php echo $single_value->bank_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->account_no; ?></td>
                <td style="text-align: center;"><?php echo $single_value->total_salary; ?></td>
                <td style="text-align: center;">
                    <?php
                    if ($single_value->purchase_access == 1) {
                        echo "Purchase,<br>";
                    }
                    ?>
                    <?php
                    if ($single_value->sales_access == 1) {
                        echo "Sales,<br>";
                    }
                    ?>
                    <?php
                    if ($single_value->product_in_out_access == 1) {
                        echo "Product In & Out,<br>";
                    }
                    ?>
                    <?php
                    if ($single_value->income_access == 1) {
                        echo "Income,<br>";
                    }
                    ?>
                    <?php
                    if ($single_value->expense_access == 1) {
                        echo "Expense";
                    }
                    ?>
                    <?php
                    if ($single_value->prescription_access == 1) {
                        echo "Prescription";
                    }
                    ?>
                </td>

                <td style="text-align: center;">
                    <a style="margin: 5px;"
                       href="<?php echo base_url(); ?>Show_edit_form/create_user/<?php echo $single_value->record_id; ?>/main"
                       class="btn btn-info fa fa-edit" title="Edit">
                    </a>
                    <a style="margin: 5px;"
                       href="<?php echo base_url(); ?>Delete/create_user/<?php echo $single_value->record_id; ?>/main"
                       class="btn btn-danger fa fa-cut" title="Delete">
                    </a>
                    <?php if ($single_value->block_status == 1) { ?>
                        <a style="margin: 5px;"
                           href="<?php echo base_url(); ?>Edit/staff_active/<?php echo $single_value->record_id; ?>"
                           class="btn btn-success">Active
                        </a>
                    <?php } else { ?>
                        <a style="margin: 5px;"
                           href="<?php echo base_url(); ?>Edit/staff_inactive/<?php echo $single_value->record_id; ?>"
                           class="btn btn-danger">Inactive
                        </a>
                    <?php } ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    if ($single_value->block_status == 0) {
                        echo "Active";
                    } else {
                        echo "Inactive";
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>