<style>
    table td {
        vertical-align: middle!important;
    }
    .custom_table{
        font-family: 'Roboto', sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin: 20px;
    }
    .custom_table td,.custom_table th{
        border: 1px solid #222;
        padding: 2px;
    }
    p{
        margin:0px 0px 0px 15px;
        text-align:left;
        color: black; 
        font-size: 16px; 
        font-family: 'Lucida Grande';
    }
    .info_text{
        font-weight: 700;
    }
    #invoice{
        margin-top:10px;
    }
</style>
<div class="divHeader"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
         alt="Logo" height="80px" style="border-radius: 15px; text-align: center;">
</div>
<div id="invoice">
        <?php echo form_open('Edit/service_bill_print_info/'.$service_bill['record_id']); ?>
            <div class="row" style="padding-top: 10px;" id="no_print1">
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="address" 
                            placeholder="Address" value="<?= @$service_bill['address'] ?>" name="address">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="project_name" 
                            placeholder="Project Name" value="<?= @$service_bill['project_name'] ?>" name="project_name">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="model" 
                            placeholder="Model" value="<?= @$service_bill['model'] ?>" name="model">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                    <input type="text" class="form-control" id="customer_name" 
                            placeholder="Customer Name" required value="<?= @$service_bill['customer_name'] ?>" name="customer_name">
                </div>
                <div class="form-group col-sm-4 col-xs-6">
                <select name="currency" required id="currency" class="form-control">
                    <option value="">--Currency Select--</option>
                    <option <?php if($service_bill['currency']=="TK") echo "selected"; ?> value="TK">TK</option>
                    <option <?php if($service_bill['currency']=="USD") echo "selected"; ?> value="USD">USD</option>
                </select>
                </div>
                <div class="col-sm-3 box-footer clearfix">
                    <button type="submit" class="pull-left btn btn-success">Confirm <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </form>
    <br>
    <div id="print_div">
        <div class="box-body" style="width: 90%; color: black; padding-left: 30px">
            <p >
                <!-- <a class="btn btn-flat btn-warning fa fa-print" href="<?php echo site_url("show_form/generate_bill_pdf/".$service_bill['record_id']) ?>" target="_blank" ></a> -->
                <button class="btn btn-flat btn-warning fa fa-print no_print" onclick="window.print()"></button>
            </p>
            <p class="info_text" >
                <?= date("d-M-Y",strtotime($service_bill['created_at'])) ?>
            </p>
            <p class="info_text" >
            <span id="show_reference_invoice"><?= $service_bill['invoice_no'] ?></span>
            </p>
            <p class="info_text" >
                To
            </p>
            <p >
            <span id="show_customer_name"><?= @$service_bill['customer_name'] ?></span>
            </p>
            <p >
                <span id="show_address">   <?= @$service_bill['address'] ?></span>
            </p>
            <p class="info_text" >
            Status: 
            <span id="show_sales_type"><?= @$service_bill['status'] ?></span>
            </p>
            <p class="info_text">
            Model: <span id="show_model">   <?= @$service_bill['model'] ?></span>
            </p>
            <p class="info_text">
                Project Name: <span id="show_project_name"> <?= @$service_bill['project_name'] ?></span>
            </p>
            <table class="custom_table">
                <thead>
                    <tr>
                        <th colspan="6" class="text-center">Invoice</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Work Description</th>
                        <th style="text-align: center;">Machine Qty.</th>
                        <th style="text-align: center;">Manpower</th>
                        <th style="text-align: center;">Day</th>
                        <th style="text-align: center;">Unit Price</th>
                        <th style="text-align: center;">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">
                            <?php if(isset($details)): ?>
                                <ol type="A">
                                    <?php foreach($details as $value): ?>
                                        <li><?=  $value['details'] ?></li>
                                    <?php endforeach;?>
                                </ol>
                            <?php endif;?>
                        </td>
                        <td class="text-center"><?= $service_bill['machine_qty'] ?></td>
                        <td class="text-center"><?= $service_bill['man_power'] ?></td>
                        <td class="text-center"><?= $service_bill['day'] ?></td>
                        <td class="text-center"><?= number_format($service_bill['unit_price'],2) ?></td>
                        <td class="text-center"><?= number_format($service_bill['total_price'],2) ?></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5"><b>Total Amount</b></td>
                        <td class="text-center"><b><?= @number_format($service_bill['total_price'],2);?></b></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5"><b>Discount on Service</b></td>
                        <td class="text-center"><b><?= @number_format($service_bill['discount'],2);?></b></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5"><b>Net Payable</b></td>
                        <td class="text-center"><b><?= @number_format($service_bill['net_payable']);?></b></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;  font-size: 17px;" colspan="6"><b>In Word: </b><?php echo $this->numbertowords->convert_number($service_bill['net_payable']); ?> <span id="show_currency"><?php echo @$service_bill['currency']; ?></span> Only</td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-left: 15px; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande'; font-weight: bold;">
                Thanking You
            </p>
            <div class="row" style="margin-top: 50px; margin-left: 15px;">
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Prepared By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Verified By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Approved By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>

                <div class="col-xs-4">
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 17px; font-family: 'Lucida Grande';">
                        Received By<br>
                    </p>
                    <p style="font-weight:bold; text-align:left; color: black; font-size: 16px; font-family: 'Lucida Grande'; padding-top: 10px;">
                        <br><br><br><br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="divFooter"  style="color: black; text-align: center;">
    <img src="<?php echo base_url(); ?>assets/img/banner_footer.jpg"
         alt="Logo" width="100%" height="80px" style="border-radius: 15px; bottom: 0;">
</div>


<style>
    @media print {
        :-webkit-scrollbar {
            display: none;
        }
        @page {
            size: A4 portrait; /* DIN A4 standard, Europe */
            margin:0!important;
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

        #no_print1,.no_print {
            display: none;
        }

        #no_print2 {
            display: none;
        }
    }
    
    table.table-bordered{
        border: #222 1px solid!important;
    }
    table.table-bordered > thead > tr > th{
        border: #222 1px solid!important;
    }
    table.table-bordered > tbody > tr > td{
        border: #222 1px solid!important;
    }
</style>

<script type="text/javascript">
    $("#address, #project_name, #model,#customer_name,#sales_type,#currency").on("change paste keyup", function () {
        var address = $('#address').val();
        var project_name = $('#project_name').val();
        var model = $('#model').val();
        var customer_name = $('#customer_name').val();
        var currency = $('#currency').val();
        $('#show_address').text(address);
        $('#show_project_name').text(project_name);
        $('#show_model').text(model);
        $('#show_customer_name').text(customer_name);
        $('#show_currency').text(currency);
    });
</script>