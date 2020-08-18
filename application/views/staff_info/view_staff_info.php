<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Company_Name</th>
            <th style="text-align: center;">Service</th>
            <th style="text-align: center;">Name(ID)</th>
            <th style="text-align: center;">E-mail</th>
            <th style="text-align: center;">Mobile</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Joining_Date</th>
            <th style="text-align: center;">Salary</th>
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
                <td style="text-align: center;"><?php echo $single_value->branch_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->service_type; ?></td>
                <td style="text-align: center;"><?php echo $single_value->name." (S".$single_value->record_id.")"; ?></td>
                <td style="text-align: center;"><?php echo $single_value->email; ?></td>
                <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                <td style="text-align: center;"><?php echo $single_value->joining_date; ?></td>
                <td style="text-align: center;"><?php echo $single_value->salary; ?></td>
                <td style="text-align: center;">
                    <button class="btn btn-danger" onclick="delete_data(<?php echo $single_value->record_id; ?>)">
                        <i class="fa fa-trash-o"></i>
                    </button> 
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>