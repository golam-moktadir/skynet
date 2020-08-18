<div class="box-body table-responsive" style="width: 98%; color: black;">
    <div class="box-header"  style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" 
             alt="Logo"  height="80px" style="border-radius: 15px;">
    </div>
    <div class="row updown" style="text-align: center;">
        <button onclick="scrollDown();" class="btn btn-info"
                style="float: right; margin-right: 20px;"
                id="down_btn">Down
        </button>
    </div>
   
    <table id="example2" style="margin-left:30px!important;" class="table table-bordered">
        <thead>
            <tr><th colspan="6" style="text-align: center;">Client Ledger <?php echo $date_range; ?></th></tr>
           
            <tr>
                <th style="text-align: center;">SL</th>
                <th style="text-align: center;">Create Date</th>
                <th style="text-align: center;">Client Name</th>
                <th style="text-align: center;">Particular</th>
                <th style="text-align: center;">Sub Total</th>
                <th style="text-align: center;">Sub Total Discount</th>
                <th style="text-align: center;">After Discount Total</th>
                <th style="text-align: center;">Paid</th>
                <th style="text-align: center;">Due</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rowCount=0;
            $count = 0;
            foreach ($all_value as $single_value) {
                $count++;
                ?>
                <tr class="">
                    <td style="text-align: center;"><?php echo $count; ?></td>
                    <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->date)); ?></td>
                    <td style="text-align: center;">
                        <?php echo $single_value->client_name."[ID:$single_value->client_id]"; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $single_value->invoice_no; ?>
                    </td>
                    <td style="text-align: center;"><?php echo $single_value->total_without_discount; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->total_discount; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->total_without_discount-$single_value->total_discount; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->total_paid; ?></td>
                    <td style="text-align: center;"><?php echo ($single_value->total_without_discount-$single_value->total_discount)-$single_value->total_paid; ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr class="text-center">
                <td colspan="4"></td>
                <td><b><?php echo $total; ?></b></td>
                <td><b><?php echo $discount; ?></b></td>
                <td><b><?php echo $total_after_discount; ?></b></td>
                <td><b><?php echo $total_paid; ?></b></td>
                <td><b><?php echo $total_due; ?></b></td>
            </tr>
        </tfoot>
    </table>
    <div class="row updown">
        <button onclick="scrollUp();" class="btn btn-success"
                style="float: right; margin: 20px;" id="up_btn">Up
        </button>
        <p style="padding-left: 10px; text-align: right;"><button id="print_button" title="Click to Print" type="button" 
                                                              onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
    </div>
    <!-- /<button onclick="exportTableToExcel('example2')">Export Table Data To Excel File</button> -->
    
</div>     

<style>
 .table tfoot {
        display: table-row-group !important;
    }
    @media print {  
        a[href]:after {
            content: none !important;
        }
        .page-break{
            page-break-inside: avoid;
        }
        @page {
            size: landscape;
            margin:0;
        }
        #print_button {
            display: none;
        }
        #no_print1,#example2_info,#example2_paginate,#example2_filter,.dt-buttons,.updown {
            display: none;
        }
    }
    
</style>
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        dom: 'Bfrtip',
        buttons: [
            { extend: 'excelHtml5', footer: true }
        ]
    } );
} );
    function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 0);
    }
</script>