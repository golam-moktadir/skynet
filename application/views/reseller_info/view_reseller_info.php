<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Company</th>
            <th style="text-align: center;">Service</th>
            <th style="text-align: center;">Name(Code)</th>
            <th style="text-align: center;">Mobile</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">House</th>
            <th style="text-align: center;">Area</th>
            <th style="text-align: center;">Package</th>
            <th style="text-align: center;">C.Date</th>
            <th style="text-align: center;">C.Charge</th>
            <th style="text-align: center;">IP_Qty</th>
            <th style="text-align: center;">Card_No.</th>
            <th style="text-align: center;">V.Date</th>
            <th style="text-align: center;">Status</th>
            <!--<th style="text-align: center;">Use Pin</th>-->
            <th style="text-align: center;"  class="no_print">Action</th>
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
                <td style="text-align: center;"><?php echo $single_value->name." (".$single_value->record_id.")"; ?></td>
                <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                <td style="text-align: center;"><?php echo $single_value->email; ?></td>
                <td style="text-align: center;"><?php echo $single_value->area_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->package_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->connection_date; ?></td>
                <td style="text-align: center;"><?php echo $single_value->connection_charge; ?></td>
                <td style="text-align: center;"><?php echo $single_value->issue_pin; ?></td>
                <td style="text-align: center;"><?php echo $single_value->card_no; ?></td>
                <td style="text-align: center;"><?php echo $single_value->validity_date; ?></td>
                <!--<td style="text-align: center;"><?php echo $single_value->use_pin; ?></td>-->
                 <td style="text-align: center;">
                    <?php 
                        if($single_value->status == "1"){echo "Active"; ?>
                    <button class="btn btn-warning" onclick="change_status('<?php echo $single_value->record_id; ?>', 0)" title="Inactive">
                        <i class="fa fa-eye-slash"></i>
                    </button>
                    <?php  }else{echo "Inactive"; ?>
                    <button class="btn btn-success" onclick="change_status('<?php echo $single_value->record_id; ?>', 1)"  title="Active">
                        <i class="fa fa-eye"></i>
                    </button>
                    <?php } ?>
                </td>
                <td style="text-align: center;" class="no_print">
                    <button class="btn btn-info" onclick="edit_data('<?php echo $single_value->record_id; ?>')">
                        <i class="fa fa-edit"></i>
                    </button> 
                    <button class="btn btn-danger" onclick="delete_data('<?php echo $single_value->record_id; ?>')">
                        <i class="fa fa-trash-o"></i>
                    </button> 
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>