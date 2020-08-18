<div>
    <p style="padding: 10px;">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-flat btn-warning">Print
        </button>
    </p>
   <div class="divHeader"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
                    </div>
    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">SL</th>
                    <th style="text-align: center;">Brand Name</th>
                    <th style="text-align: center;">Parts Name</th>
                    <th style="text-align: center;">Parts No.</th>
                    <th style="text-align: center;">Purchase Unit Price</th>
                    <th style="text-align: center;">Purchase Qty</th>
                    <th style="text-align: center;">Sell & Service Qty</th>
                    <th style="text-align: center;">Present Qty</th>
                    <th style="text-align: center;">Present Qty Purch. Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=0;
                    $p=0;$q=0;$r=0;$s=0;
                    foreach ($result as $single_value) { 
                        $p+=$single_value->p_qty;
                        $q+=$single_value->s_qty;
                        $r+=($single_value->p_qty)-($single_value->s_qty);
                        $s+=round(($single_value->p_unit)*(($single_value->p_qty)-($single_value->s_qty)), 2);

                    $i++;?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i; ?></td>
                             <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->parts_no; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->p_unit; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->p_qty; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->s_qty; ?></td>
                            <td style="text-align: center;"><?php echo ($single_value->p_qty)-($single_value->s_qty); ?></td>
                            <td style="text-align: center;">
                            <?php echo round(($single_value->p_unit)*(($single_value->p_qty)-($single_value->s_qty)), 2); ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">Total</td>
                            <td style="text-align: center;"><?php echo $p; ?></td>
                            <td style="text-align: center;"><?php echo $q; ?></td>
                            <td style="text-align: center;"><?php echo $r; ?></td>
                            <td style="text-align: center;">
                            <?php echo $s; ?>
                            </td>
                        </tr>
            </tbody>
        </table>
    </div>
    <div class="divFooter"  style="color: black; text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
                             alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
                    </div>
</div>

<style>
    @media print {
        :-webkit-scrollbar {
            display: none;
        }
        @page {
            size: A4; /* DIN A4 standard, Europe */
            margin:0;
        }
         div.divHeader {
            position: fixed;
            height: 80px; /* put the image height here */
            width: 97%; /* put the image width here */
            top: 0;
        }
        div.divFooter {
            position: fixed;
            height: 80px; /* put the image height here */
            width: 97%; /* put the image width here */
            bottom: 0;
        }
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
    table.table-bordered {
        border: #55830c 1px solid;
        color: black;
        font-size: 11px;
    }

    table.table-bordered > thead > tr > th {
        border: #55830c 1px solid;
        padding:2px;
        color: black;
        font-size: 12px;
    }

    table.table-bordered > tbody > tr > td {
        padding:2px;
        border: #55830c 1px solid;
        color: black;
        font-size: 12px;
    }
</style>