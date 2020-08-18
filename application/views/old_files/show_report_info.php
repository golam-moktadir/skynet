<div class="row" style="text-align: center; margin-bottom: 10px;">
    <button id="print_button" title="Click to Print" type="button" style="float: left; margin-left: 20px;"
            onClick="window.print();" class="btn btn-flat btn-warning">Print</button>
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" width="30%" height="80%" style="border-radius: 10px;">
    <button onclick="scrollDown();" class="btn btn-info" style="float: right; margin-right: 20px;"
            id="down_btn">Down</button>
</div>
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
           <p style="font-size: 18px; text-align: center;"><?php echo $date_range; ?></p>
            <p style="font-size: 20px; text-align: center;"><u>Report</u></p>
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Date</th>
                    <th style="text-align: center;" colspan="2">Selling Amount</th>
                    <th style="text-align: center;" colspan="2">Client Payment</th>
                    <th style="text-align: center;" colspan="2">Cash In</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Date</th>
                    <th style="text-align: center;" colspan="2">Purchase Amount</th>
                    <th style="text-align: center;" colspan="2">Vendor Payment</th>
                    <th style="text-align: center;" colspan="2">Cash Out</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Invoice</th>
                    <th style="text-align: center;">Amount</th>

                    <th style="text-align: center;">Client</th>
                    <th style="text-align: center;">Amount</th>

                    <th style="text-align: center;">Particular</th>
                    <th style="text-align: center;">Amount</th>

                    <th style="text-align: center;">Voucher</th>
                    <th style="text-align: center;">Amount</th>

                    <th style="text-align: center;">Vendor</th>
                    <th style="text-align: center;">Amount</th>

                    <th style="text-align: center;">Particular</th>
                    <th style="text-align: center;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_income = 0;
                $total_expense = 0;
                for ($i = 1; $i <= $count_it; $i++) {
                    $single_sales_collection = ${"sales_collection" . $i};
                    $single_amount = ${"amount" . $i};
                    $single_purchase_payment = ${"purchase_payment" . $i};
                    $single_expense_amount = ${"expense_amount" . $i};
                    if (empty($single_sales_collection)) {
                        $single_sales_collection = 0;
                    }
                    if (empty($single_amount)) {
                        $single_amount = 0;
                    }
                    if (empty($single_purchase_payment)) {
                        $single_purchase_payment = 0;
                    }
                    if (empty($single_expense_amount)) {
                        $single_expense_amount = 0;
                    }

                    $total_income += $single_sales_collection + $single_amount;
                    $total_expense += $single_purchase_payment + $single_expense_amount;
                    ?>
                    <tr>
                        <td style="text-align: center;">
                            <?php
                            if (!empty(${"date" . $i}) && ${"date" . $i} != "0000-00-00") {
                                echo date("d/m/y", strtotime(${"date" . $i}));
                            }
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo ${"invoice" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"selling_amount" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"client" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"sales_collection" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"particular" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"amount" . $i}; ?></td>
                        <td style="text-align: center;">
                            <?php
                            if (!empty(${"expense_date" . $i}) && ${"expense_date" . $i} != "0000-00-00") {
                                echo date("d/m/y", strtotime(${"expense_date" . $i}));
                            }
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo ${"voucher" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"purchase_amount" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"vendor" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"purchase_payment" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"expense_particular" . $i}; ?></td>
                        <td style="text-align: center;"><?php echo ${"expense_amount" . $i}; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="15" style="text-align: right;">Total Collection: <?php echo $total_income; ?></td>
                </tr>
                <tr>
                    <td colspan="15" style="text-align: right;">Total Payment: <?php echo $total_expense; ?></td>
                </tr>
                <tr>
                    <td colspan="15" style="text-align: right;">Total Balance: <?php echo $total_income - $total_expense; ?></td>
                </tr>
            </tbody>
        </table>
        <button onclick="scrollUp();" class="btn btn-success"
                style="float: right; margin-up: 10px;" id="no_print2">Up
        </button>
    </div>


<script type="text/javascript">
    function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 100);
    }
</script>

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
        #no_print2 {
            display: none;
        }
        #down {
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