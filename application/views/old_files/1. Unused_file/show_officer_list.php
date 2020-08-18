<div class="box box-info">
    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
        <p style="font-size: 20px;">Employee List</p>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">SL</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Unique ID</th>
                    <th style="text-align: center;">Designation</th>
                    <th style="text-align: center;">Joining Date</th>
                    <th style="text-align: center;">Department</th>
                    <th style="text-align: center;">Mobile</th>
                    <th style="text-align: center;">Address</th>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Bank Name</th>
                    <th style="text-align: center;">A/C</th>
                    <th style="text-align: center;">Total Salary</th>
                    <th style="text-align: center;">Status</th>
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
                        <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                        <td style="text-align: center;">ID: <?php echo $single_value->record_id; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                        <td style="text-align: center;">
                            <?php
                            echo date('d F, Y', strtotime($single_value->joining_date));
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo $single_value->department; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                        <td style="text-align: center;">
                            <img src="<?php echo base_url(); ?>assets/img/employee/<?php echo $single_value->image; ?>"
                                 width="50" height="50">
                        </td>
                        <td style="text-align: center;"><?php echo $single_value->bank_name; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->account; ?></td>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>