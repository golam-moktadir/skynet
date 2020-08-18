<div class="row updown" style="text-align: center;">
    <button onclick="scrollDown();" class="btn btn-info"
            style="float: right; margin-right: 20px;"
            id="down_btn">Down
    </button>
</div>
<div class="divHeader"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" width="100%" height="80px" style="border-radius: 15px;">
</div>
<style type="text/css" media="print">
    @page { size: landscape;
    }
    table {
        empty-cells: show;
    }

</style>

<div class="box-body table-responsive" style="width: 100%; height: 100% color: black; font-size: 12px">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="text-align: center; font-size:14px" colspan="10">Quantity Count By: <?= @$count_by ?></th>
        </tr>
        <tr>
            <th style="text-align: center;">Sl</th>
            <th style="text-align: center;">Brand Name</th>
            <?php if($count_by=="Part No"): ?>
                <th style="text-align: center;">Part No</th>
            <?php endif;?>
            <?php if($count_by=="Parts Name"): ?>
                <th style="text-align: center;">Parts Name</th>
            <?php endif;?>
            <th style="text-align: center;">Add Qty</th>
            <th style="text-align: center;">Sales/Service Qty</th>
            <th style="text-align: center;">Present Qty</th>
        </tr>
        </thead>
        <tbody>
            <?php if(isset($all_value)): ?>
                <?php foreach($all_value as $key=>$value): ?>
                    <tr>
                        <td  style="text-align: center;"><?= ++$key; ?></td>
                        <td  style="text-align: center;"><?= $value['brand']; ?></td>
                        <?php if($count_by=="Part No"): ?>
                        <td  style="text-align: center;"><?= $value['parts_no']; ?></td>
                        <?php endif;?>
                        <?php if($count_by=="Parts Name"): ?>
                            <td  style="text-align: center;"><?= $value['parts_name']; ?></td>
                        <?php endif;?>
                        <td  style="text-align: center;"><?= $value['add_total_quantity']; ?></td>
                        <td  style="text-align: center;"><?= $value['total_sell_quantity']; ?></td>
                        <td  style="text-align: center;"><?= $value['present_qty']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
        <tr class="page-break">
            <td  style="text-align: right;"></td>
            <td  style="text-align: right;"></td>
            <td  style="text-align: right;">Total =</td>
            <td style="text-align: center;"><?php echo @$total_add_quantity; ?></td>
            <td style="text-align: center;"><?php echo @$total_sell_quantity; ?></td>
            <td style="text-align: center;"><?php echo @$total_present_quantity; ?></td>
        </tr>
        </tfoot>
    </table>

</div>
<table class="box-body table-responsive" style="width: 100%;">
    <tbody></tbody>

</table>
<div class="row updown">
    <button onclick="scrollUp();" class="btn btn-success"
            style="float: right; margin: 20px;" id="up_btn">Up
    </button>
</div>
<div class="divFooter"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
         alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
</div>
<style>
    .table tfoot {
        display: table-row-group !important;
    }
    @media print {  
        a[href]:after {
            content: none !important;
        }
        @page {
            size: landscape;
            margin:0;
        }
        #print_button {
            display: none;
        }
        #example2_info,#example2_paginate,#example2_filter,.dt-buttons,.updown,.divFooter {
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