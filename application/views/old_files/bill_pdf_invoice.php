<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Invoice</title>
    
<style>
    .header
    {
        text-align:center;
        position:fixed;
        height:115px;
        top:0;
    }
    .header .title
    {
        padding-top:-40px;
        text-align:center;
    }
    .referance_info{
    }
    .referance_info p{
        font-size:14px;
    }
    .header img,.footer img{
        width:100%!important;
        margin:0;
        padding:0;
    }
    .bill_text{
        width:100%;
        text-align:center;
    }
    .footer{
        position:fixed;
        bottom:5%;
    }
    .content{ 
        padding-top:50px;
        overflow:hidden;
    }
    table{
            margin:0 auto;
            border-collapse: collapse;
        }
    #table td, #table th 
    {
        border: 1px solid #000;
        padding: 3px;
        font-size:11px;
        text-align:center;
    }
    .footer_text{
        margin-top:50px;
        width:900px;
    }
    .prepared_by
    {
        width:200px;
        font-size:15px;
        height:20px;
        float:left;
        text-align:left;
    }
    .verify_by
    {
        width:250px;
        font-size:15px;
        height:20px;
        float:left;
        text-align:center;
    }
    .approved_by
    {
        width:200px;
        font-size:15px;
        height:20px;
        text-align:right;
        float:left;
    }
    .clearfix{
        clear:both;
    }
    .received_by{
        font-size:15px;
        padding-top:50px;
    }
    @media print {
        :-webkit-scrollbar {
            display: none;
        }
        @page {
            size: A4 portrait; /* DIN A4 standard, Europe */
            margin:0!important;
        }
    }
</style>
</head>
<body>
    <div class="main_wrapper">
        <div class="header">
            <h1 class="title text-center"><img src="assets/img/banner.jpg"><h1>
        </div>
        <div class="content">
            <div class="referance_info">
                <p>
                <?= date("d-M-Y",strtotime($referance_info['created_at'])) ?>
                </p>
                <p>
                Reference: <span id="show_reference_invoice"><small><?= @$referance_info['invoice_id'] ?><small></span> <span style="font-size:11px">(<?= @$all_invoice_no ?>)</span>
                </p>
                <p>
                    To
                </p>
                <p>
                <span id="show_customer_name"><?= @$referance_info['customer_name'] ?></span>
                </p>
                <p>
                    <b>Address:</b> <span id="show_address_invoice">   <?= @$referance_info['address'] ?></span>
                </p>
                <p>
                    Project Name: <span id="show_project_name_invoice"> <?= @$referance_info['project_name'] ?></span>
                </p>
                <p>
                    Indent No/Requisition No/PO No: <span id="show_po_no_invoice">   <?= @$referance_info['indent_no'] ?></span>
                </p>
                <p>
                Machine Category/Model: <span id="show_mpr_invoice">   <?= @$referance_info['mpr_no'] ?></span>
                </p>
                <p>
                Status: 
                <span id="show_sales_type"><?= @$referance_info['status'] ?></span>
                </p>
            </div>
            <div class="bill_text text-center"><h3><u>Bill</u></h3></div>
            <div class="body-wrapper">
                <div class="table_wrap">
                    <table class="" id="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">SL</th>
                                <th style="text-align: center;">Part Name</th>
                                <th style="text-align: center;">Part No.</th>
                                <th style="text-align: center;">Alt Part No.</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">P.Type</th>
                                <th style="text-align: center;">Qty</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">Total Price</th>
                                <th style="text-align: center;">Discount(%)</th>
                                <th style="text-align: center;">After Discount T.Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                            <?php if(isset($product)): ?>
                                <?php foreach($product as $key=>$value): ?>
                                    <?php foreach($value['invoice_no'] as $svalue): ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $svalue['product_name'] ?></td>
                                            <td><?= $svalue['parts_no'] ?></td>
                                            <td><?= $svalue['alt_parts_no'] ?></td>
                                            <td><?= $svalue['unit'] ?></td>
                                            <td><?= $svalue['payment_type'] ?></td>
                                            <td><?= $svalue['product_qty'] ?></td>
                                            <td><?= $svalue['price_per_unit'] ?></td>
                                            <td><?= $svalue['first_total'] ?></td>
                                            <td><?= $svalue['ind_discount'] ?></td>
                                            <td><?= $svalue['total'] ?></td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endforeach;?>
                            <?php endif;?>
                            <tr>
                                <td style="text-align: right;" colspan="3"><b>Invoice Total: <?= @$invoice_total;?></b></td>
                                <td style="text-align: right;" colspan="3"><b>Discount: <?= @$total_discount;?></b></td>
                                <td style="text-align: right;" colspan="3"><b><?= @$extra_charge_type;?> Charge: <?= @$extra_charge;?></b></td>
                                <td style="text-align: center; font-weight: bolder;" colspan="2">Sub Total: <?= @$sub_total;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;  font-size: 14px;" colspan="11"><b>In Word: </b><?php echo $this->numbertowords->convert_number($sub_total); ?> <span id="show_currency"><?php echo @$referance_info['currency']; ?></span> Only</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                    <strong>Thanking You</strong>
                </p>
                <div class="footer_text">
                    <div class="prepared_by"><strong>Prepared By</strong></div>
                    <div class="verify_by"><strong>Verified By</strong></div>
                    <div class="approved_by"><strong>Approved By</strong></div>
                </div>
                <div class="clearfix"></div>
                <p class="received_by">
                    <strong>Received By</strong>
                </p>
            </div>
        </div>
        <div class="footer">
            <h1 class="title text-center"><img src="assets/img/banner_footer.jpg"><h1>
        </div>
    </div>
</body>
</html>