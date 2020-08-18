<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Voucher_No</th>
            <th style="text-align: center;">Expense_Head</th>
            <th style="text-align: center;">Amount</th>
            <th style="text-align: center;">Remarks</th>
            <th style="text-align: center;">Paid_By</th>
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
                    <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->ex_head; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->remarks; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->paid_by; ?></td>
                    <td style="text-align: center;">
                        <button class="btn btn-danger" onclick="delete_data(<?php echo $single_value->record_id; ?>)">
                            <i class="fa fa-trash-o"></i>
                        </button> 
                    </td>
            </tr>
        <?php } ?>
    </tbody>
</table>