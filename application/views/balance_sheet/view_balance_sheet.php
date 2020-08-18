<div class="row">
    <div style="text-align: right; padding-right: 15px;" class="no_print">
        <button  id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light">
            <i class="fa fa-print"></i>
        </button>
    </div>
    <p style="font-size: 20px; margin: 0px; padding: 0px; 
       color: purple; font-weight: bolder; text-align: center;">
        Balance Sheet Data
    </p>
    
    <div class="form-group col-sm-6 col-xs-12" style="padding-right: 0px;">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="7">Income</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Invoice No</th>
                    <th style="text-align: center;">Name [Code]</th>
                    <th style="text-align: center;">Amount</th>
                    <th style="text-align: center;">Collected By</th>
                    <th style="text-align: center;">Extra Inv.No</th>
                    <th style="text-align: center;">Extra Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_income = 0;
                foreach ($income as $single_value) {
                    $total_income += $single_value->paid_amount;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $single_value->paid_date; ?></td>
                        <td style="text-align: center;"><?php echo empty($single_value->record_id)?"":"INV".$single_value->record_id; ?></td>
                        <td style="text-align: center;">
                            <?php
                            if($single_value->client_reseller == "Client" && $single_value->client_reseller != ""){
                                echo $single_value->client_name."[".$single_value->client_id."]"; 
                            }elseif($single_value->client_reseller == "Reseller" && $single_value->client_reseller != ""){
                                echo $single_value->reseller_name."[".$single_value->reseller_id."]"; 
                            }
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo $single_value->paid_amount; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->full_name; ?></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                    </tr>
                <?php } ?>
                <?php
                foreach ($extra_income as $single_value) {
                    $total_income += $single_value->amount;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

    <div class="form-group col-sm-6 col-xs-12" style="padding-left: 0px;">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="5">Expense</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Voucher No</th>
                    <th style="text-align: center;">Particular</th>
                    <th style="text-align: center;">Amount</th>
                    <th style="text-align: center;">Paid By</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_expense = 0;
                foreach ($expense as $single_value) {
                    $total_expense += $single_value->amount;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                        <td style="text-align: center;"><?php echo $single_value->full_name; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="form-group col-sm-12 col-xs-12">
        <table id="datatable" class="datatable table table-bordered table-hover">
            <tbody>
                <tr>
                    <td style="text-align: right; font-weight: bolder;">
                        <?php echo "Total Income = " . $total_income; ?>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; font-weight: bolder;">
                        <?php echo "Total Expense = " . $total_expense; ?>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; font-weight: bolder;">
                        <?php echo "Balance = " . ($total_income - $total_expense); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


