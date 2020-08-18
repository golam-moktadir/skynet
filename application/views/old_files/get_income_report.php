<div class="box-body table-responsive" style="width: 98%; color: black;">
    <div class="box-header" style="color: black; text-align: center;">
        <p style="text-align: left; font-family: 'Lucida Grande'">
            <button id="print_button" title="Click to Print" type="button" onClick="window.print()"
                    class="btn btn-flat btn-warning">Print
            </button>
        </p>
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <p style="color: black; text-align: center; font-size: 20px;">
        <?php echo $income_head . "<br>" . $date_range; ?>
    </p>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Income Head</th>
            <th style="text-align: center;">Invoice No.</th>
            <th style="text-align: center;">Quantity</th>
            <th style="text-align: center;">Amount</th>
            <th style="text-align: center;">Comments</th>
            <th style="text-align: center;" id="no_print2">Action</th>
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
                    <?php echo date('d/m/y', strtotime($single_value->date)); ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                <td style="text-align: center;"><?php echo $single_value->comment; ?></td>
                <td style="text-align: center;" id="no_print3">
                    <a style="margin: 5px;" class="btn btn-danger"
                       href="<?php echo base_url(); ?>Delete/income/<?php echo $single_value->record_id; ?>">Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
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

        #no_print2 {
            display: none;
        }

        #no_print3 {
            display: none;
        }
    }
</style> 
