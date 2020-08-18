<?php
$delete_menu = $this->session->ses_delete_menu_id;
$delete_id = explode(",", $delete_menu);
?>
<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Invoice</th>
            <th style="text-align: center;">Paid_Date</th>
    <!--        <th style="text-align: center;">Branch</th>
            <th style="text-align: center;">Service</th>-->
            <th style="text-align: center;">Dish/ISP_Client</th>
            <!--<th style="text-align: center;">Area</th>-->
            <th style="text-align: center;">Mobile</th>
            <!-- <th style="text-align: center;">Address</th> -->
            <th style="text-align: center;">Payable</th>
            <th style="text-align: center;">Discount</th>
            <th style="text-align: center;">Sub_Total</th>
            <th style="text-align: center;">Paid</th>
            <th style="text-align: center;">Due</th>
            <th style="text-align: center;">Advance</th>
            <th style="text-align: center;">Remarks</th>
            <th style="text-align: center;">User</th>
            <th style="text-align: center;">Receipt No.</th>

            <?php if (in_array("11", $delete_id) || in_array("all", $delete_id)) { ?>
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
                <td style="text-align: center;">
                    <button class="btn btn-info no_print" onclick="show_invoice(<?php echo $single_value->record_id; ?>)">
                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                    </button>
                    <?php echo " INV" . $single_value->record_id; ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->paid_date; ?></td>

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
                <!--<td style="text-align: center;"><?php echo $single_value->area_name; ?></td>-->
                <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                <!-- <td style="text-align: center;"><?php echo $single_value->address; ?></td> -->
                <td style="text-align: center;"><?php echo $single_value->due_mon_amount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->discount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->sub_total; ?></td>
                <td style="text-align: center;"><?php echo $single_value->paid_amount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->due; ?></td>
                <td style="text-align: center;"><?php echo $single_value->advance; ?></td>
                <td style="text-align: center;"><?php echo $single_value->remarks; ?></td>
                <td style="text-align: center;"><?php echo $single_value->full_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->receipt_no; ?></td>

                <td style="text-align: center;" class="no_print">
                    <button class="btn btn-info" onclick="edit_data(<?php echo $single_value->record_id; ?>)">
                        <i class="fa fa-edit"></i>
                    </button> 
                    <?php if (in_array("11", $delete_id) || in_array("all", $delete_id)) { ?>
                        <button class="btn btn-danger" onclick="delete_data(<?php echo $single_value->record_id; ?>)">
                            <i class="fa fa-trash-o"></i>
                        </button> 
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>