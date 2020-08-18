<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title" style="color: black;">Report (<?php echo date('d F, Y', strtotime($start_date)) . " - " . date('d F, Y', strtotime($end_date)); ?>)</h3>
    </div>
    <p style="padding-left: 10px;"><button id="print_button" title="Click to Print" type="button" 
                                           onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
    <div class="box-header"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" 
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Selling Amount</th>
                    <th style="text-align: center;">Income (Others)</th>
                    <th style="text-align: center;">Purchase Amount</th>
                    <th style="text-align: center;">Expense (Others)</th>
                    <th style="text-align: center;">Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_balance = 0;
                $total_income = 0;
                $total_expense = 0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $total_income += ${"selling_amount" . $i} + ${"income" . $i};
                    $total_expense += ${"purchase_amount" . $i} + ${"expense" . $i};
                    $total_balance += ${"balance" . $i}
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i; ?></td>
                        <td style="text-align: center;"><?php echo ${"date" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"selling_amount" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"income" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"purchase_amount" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"expense" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"balance" . $i}; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="7" style="text-align: right;">Total Income: <?php echo $total_income; ?></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: right;">Total Expense: <?php echo $total_expense; ?></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: right;">Total Balance: <?php echo $total_balance; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    @media print {  
        a[href]:after {
            content: none !important;
        }
        #print_button {
            display: none;
        }
        #no_print1 {
            display: none;
        }
    }
    table.table-bordered{
        border: #55830c 1px solid;
        font-weight: bold;
        color: black;
        font-size: 16px;
    }
    table.table-bordered > thead > tr > th{
        border: #55830c 1px solid;
        font-weight: bold;
        color: black;
        font-size: 18px;
    }
    table.table-bordered > tbody > tr > td{
        border: #55830c 1px solid;
        font-weight: bold;
        color: black;
        font-size: 16px;
    }
</style>  