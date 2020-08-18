<?php
$delete_menu = $this->session->ses_delete_menu_id;
$delete_id = explode(",", $delete_menu);
?>
<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Month</th>
            <th style="text-align: center;">Year</th>
<!--            <th style="text-align: center;">Branch Name</th>
            <th style="text-align: center;">Service Type</th>-->
            <th style="text-align: center;">Dish/ISP_Client</th>
            <th style="text-align: center;">Mobile</th>
            <th style="text-align: center;">Area</th>
            <th style="text-align: center;">Particular</th>
            <th style="text-align: center;">Amount</th>
            <th style="text-align: center;">Paid_Status</th>
            <th style="text-align: center;">Due</th>
            <th style="text-align: center;">Paid_Date</th>
            <?php if (in_array("10", $delete_id) || in_array("all", $delete_id)) { ?>
                <th style="text-align: center;" class="no_print">Action</th>
            <?php } ?>
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
                <td style="text-align: center;"><?php echo $single_value->generate_month; ?></td>
                <td style="text-align: center;"><?php echo $single_value->generate_year; ?></td>
    <!--                <td style="text-align: center;"><?php echo $single_value->branch_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->service_type; ?></td>-->
                <td style="text-align: center;">
                    <?php
                    if ($single_value->client_reseller == "Client") {
                        echo $single_value->client_name . " (" . $single_value->client_id . ")";
                    } else {
                        echo $single_value->reseller_name . " (" . $single_value->reseller_id . ")";
                    }
                    ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->c_mobile; ?></td>
                <td style="text-align: center;"><?php echo $single_value->area_name.$single_value->r_area; ?></td>
                <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                <td style="text-align: center;">
                    <?php echo $single_value->paid_status == 1 ? "Paid" : "Not Paid"; ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->partial_amount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->paid_date; ?></td>
                <?php if (in_array("10", $delete_id) || in_array("all", $delete_id)) { ?>
                    <td style="text-align: center;" class="no_print">
                        <button class="btn btn-danger" onclick="delete_data(<?php echo $single_value->record_id; ?>)">
                            <i class="fa fa-trash-o"></i>
                        </button> 
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>