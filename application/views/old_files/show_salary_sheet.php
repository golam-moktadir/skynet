<div style="padding: 10px;">
    <p style="padding-left: 10px;"><button id="print_button" title="Click to Print" type="button" 
                                           onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
    <div class="box-header"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" 
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: center;">SL No.</th>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Employee</th>
                <th style="text-align: center;">Designation</th>
                <th style="text-align: center;">Account No.</th>
                <th style="text-align: center;">Amount (Taka)</th>
                <th style="text-align: center;" id="no_print4">Action</th>
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
                        <?php
                        if ($single_value->date != "0000-00-00") {
                            echo date('d/m/y', strtotime($single_value->date));
                        }
                        ?>
                    </td>
                    <td style="text-align: center;"><?php echo "$single_value->employee_name [ID: $single_value->employee_id]"; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->account_no; ?></td>
                    <td style="text-align: center;"><?php echo number_format($single_value->salary_scale); ?>/-</td>
                    <td style="text-align: center;">
                        <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                           href="<?php echo base_url(); ?>Delete/create_salary_sheet/<?php echo $single_value->record_id; ?>">
                        </a>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="5"></td>
                <td style="text-align: center;">Total</td>
                <td style="text-align: center;" colspan="2">=<?php echo number_format($total); ?>/-</td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: right;">
                    In Words - <?php echo $this->numbertowords->convert_number($total); ?> Taka Only
                </td>
            </tr>
        </tbody>

    </table>
</div>
