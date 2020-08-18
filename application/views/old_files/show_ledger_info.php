<div class="row" style="text-align: center; margin-bottom: 10px;">
    <button id="print_button" title="Click to Print" type="button" style="float: left; margin-left: 20px;"
            onClick="window.print();" class="btn btn-flat btn-warning">Print</button>
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" width="200px" height="70px" style="border-radius: 10px;">
    <button onclick="scrollDown();" class="btn btn-info" style="float: right; margin-right: 20px;"  id="down"
            id="down_btn">Down</button>
</div>
<div class="box-body table-responsive" style="width: 98%; color: black;">
    <p style="font-size: 20px; text-align: center;"><u>Ledger Info.</u></p>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: center;" colspan="4">Collection</th>
                <th style="text-align: center;"  colspan="4">Payment</th>
            </tr>
            <tr>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Particular</th>
                <th style="text-align: center;">Client</th>
                <th style="text-align: center;">Amount</th>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Particular</th>
                <th style="text-align: center;">Vendor</th>
                <th style="text-align: center;">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $income_total = 0;
            $expense_total = 0;
            for ($i = 1; $i <= $count_it; $i++) {
                if (!empty(${"amount" . $i})) {
                    $income_total += ${"amount" . $i};
                }
                if (!empty(${"expense_amount" . $i})) {
                    $expense_total += ${"expense_amount" . $i};
                }
                ?>
                <tr>
                    <td style="text-align: center;">
                        <?php
                        if (empty(${"date" . $i})) {
                            echo "";
                        } else {
                            echo date('d/m/y', strtotime(${"date" . $i}));
                        }
                        ?>
                    </td>
                    <td style="text-align: center;"><?php echo ${"particular" . $i}; ?></td>
                    <td style="text-align: center;"><?php echo ${"client_info" . $i}; ?></td>
                    <td style="text-align: center;"><?php echo ${"amount" . $i}; ?></td>
                    <td style="text-align: center;">
                        <?php
                        if (empty(${"expense_date" . $i})) {
                            echo "";
                        } else {
                            echo date('d/m/y', strtotime(${"expense_date" . $i}));
                        }
                        ?>
                    </td>
                    <td style="text-align: center;"><?php echo ${"expense_particular" . $i}; ?></td>
                    <td style="text-align: center;"><?php echo ${"expense_vendor" . $i}; ?></td>
                    <td style="text-align: center;"><?php echo ${"expense_amount" . $i}; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th style="text-align: center;" colspan="4"><?php echo "Total Collection: " . $income_total . " BDT"; ?></th>
                <th style="text-align: center;" colspan="4"><?php echo "Total Payment: " . $expense_total . " BDT"; ?></th>
            </tr>
            <?php $balance = $income_total - $expense_total; ?>
            <tr>
                <th style="text-align: right;" colspan="8">
                    <?php
                    if ($balance < 0) {
                        echo "Balance: " . $balance . " BDT (Loss)";
                    } elseif ($balance > 0) {
                        echo "Balance: " . $balance . " BDT (Profit)";
                    } else {
                        echo "Balance: " . $balance . " BDT";
                    }
                    ?>
                </th>
            </tr>
        </tbody>
    </table>
    <button onclick="scrollUp();" class="btn btn-success"
            style="float: right; margin-up: 10px;" id="up">Up
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
        #up {
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