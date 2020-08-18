<div style="text-align: right; padding-right: 0px;" class="no_print">
    <button  id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light">
        <i class="fa fa-print"></i>
    </button>
    <a href="<?php echo base_url(); ?>Show_form/invoice_generate" 
       class="btn btn-warning waves-effect waves-light"><i class="fa fa-window-close-o"></i>
    </a>
</div>
<div  style="color: black; font-weight: bolder; font-size: 14px;">
    <div class="box-body">
        <div class="row">
            <div class="form-group col-sm-4 col-xs-12" style="text-align: center;">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" height="80" width="50%">
            </div>
            <div class="form-group col-sm-4 col-xs-12" style="text-align: center; font-size: 20px;"><u>Invoice</u></div>
            <div class="form-group col-sm-4 col-xs-12" style="text-align: center;">
                <img src="<?php echo base_url(); ?>assets/img/address.png" height="80" width="70%">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-xs-12">
                <table id="" class="table table-bordered table-hover tab">
                    <tbody>
                        <?php
                        foreach ($all_value_invoice as $single_value) {
                            ?>
                            <tr>
                                <td style="text-align: center;">Invoice No:<?php echo "INV" . $single_value->record_id; ?></td>
                                <td style="text-align: center;">Date:<?php echo $single_value->paid_date; ?></td>
                                <td style="text-align: center;">Name[Code]:
                                    <?php
                                    if ($single_value->client_reseller == "Client") {
                                        echo $single_value->client_name . "[" . $single_value->client_id . "]";
                                    } else {
                                        echo $single_value->reseller_name . "[" . $single_value->reseller_id . "]";
                                    }
                                    ?>
                                </td>
                                <td style="text-align: center;">Mobile: <?php echo $single_value->mobile; ?></td>
                                <td style="text-align: center;">Receipt No: <?php echo $single_value->receipt_no; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12 col-xs-12">
                <table id="" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;">SL</th>
                            <th style="text-align: center;">Particular</th>
                            <th style="text-align: center;">Amount</th>
                            <th style="text-align: center;">Month</th>
                            <th style="text-align: center;">Year</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Due</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($all_value_bill as $single_value) {
                            $count++;
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $count; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->generate_month; ?></td>
                                <td style="text-align: center;"><?php echo $single_value->generate_year; ?></td>
                                <td style="text-align: center;">
                                    <?php echo $single_value->paid_status == 1 ? "Paid" : "Not Paid"; ?>
                                </td>
                                <td style="text-align: center;"><?php echo $single_value->partial_amount; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-xs-12">
                <table id="" class="table table-bordered table-hover">
                    <tbody>
                        <?php
                        foreach ($all_value_invoice as $single_value) {
                            ?>
                            <tr>
                                <td style="text-align: center;">Payable: <?php echo $single_value->due_mon_amount; ?></td>
                                <td style="text-align: center;">Discount: <?php echo $single_value->discount; ?></td>
                                <td style="text-align: center;">Remarks: <?php echo $single_value->remarks; ?></td>
                                <td style="text-align: center;">Sub Total: <?php echo $single_value->sub_total; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Paid: <?php echo $single_value->paid_amount; ?></td>
                                <td style="text-align: center;">Due: <?php echo $single_value->due; ?></td>
                                <td style="text-align: center;">Advance: <?php echo $single_value->advance; ?></td>
                                <td style="text-align: center;">Collected By: <?php echo $single_value->full_name; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    @media print {
        @page 
        {
            size: A5 landscape;   /* auto is the current printer page size */
            margin: -5mm 0mm 0mm 10mm;
        }
        html
        {
            background-color: #FFFFFF; 
            margin: 0px;  /* this affects the margin on the html before sending to printer */
        }
        .no_print {
            display: none;
        }
        ::-webkit-scrollbar{
            display: none;
        }
        .dataTables_filter {
            display: none;
        }
        .dataTables_paginate {
            display: none;
        }
        .dataTables_info {
            display: none;
        }
        .dataTables_length {
            display: none;
        }
        .dataTables_orderable{
            display: none;
        }
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after {
            display: none;
        }
    }
</style>
