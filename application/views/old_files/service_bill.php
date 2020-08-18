<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .page_title{font-size: 20px; text-align: center; font-weight: bolder; text-decoration: underline; color: black;}
    .page_title_two{font-size: 18px; padding: 0px; margin: 0px; text-decoration: underline; float: left;}
    .msg_title{font-size: 18px; padding: 0px; margin: 0px; color: #066;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .req{color:#ff0000}
    table{font-size: 12px}
    table td[rowspan] {
        vertical-align: middle!important;
        text-align: center!important;
    }
</style>
<aside>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php if(isset($add)): ?>
                <div class="">
                    <?php echo form_open('insert/service_bill_add'); ?>
                    <div class="box-body" id="all_field" style="margin-top: 40px; padding: 20px;">
                        <p class="page_title">Create Service Bill</p>
                        <p class="msg_title"><?php echo $this->session->flashdata("msg"); ?></p>
                        <div class="row">
                            <div class="field_wrapper">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="invoice_no">Invoice No.</label><span class="req">*</span>
                                <input type="text"  class="form-control" required id="invoice_no" placeholder="Invoice No." name="invoice_no">
                            </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="work_details">Work Details</label><span class="req">*</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" required id="work_details" placeholder="Work Details" name="work_details[]" >
                                        <span class="input-group-addon btn btn-info add_button" id="add">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="machine_qty">Machine Qty.</label>
                                <input type="text"  class="form-control" id="machine_qty" placeholder="Machine Qty" name="machine_qty">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="man_power">Manpower</label>
                                <input type="text"  class="form-control" id="man_power" value="" placeholder="Manpower" name="man_power">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="day">Day</label><span class="req">*</span>
                                <input type="text" required class="form-control" id="day" name="day" placeholder="Day">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit_price">Unit Price</label><span class="req">*</span>
                                <input type="text" onclick="this.select()" required class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="total_price">Total Price</label><span class="req">*</span>
                                <input type="text"  readonly class="form-control" id="total_price" name="total_price" placeholder="Total Price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="discount">Discount</label>
                                <input type="text" onclick="this.select()"  class="form-control" id="discount" name="discount" placeholder="Discount">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="net_payable">Net Payable</label>
                                <input type="text" readonly   class="form-control" id="net_payable" name="net_payable" placeholder="Net Payable">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button type="submit" style="margin-top:25px"  class="pull-left btn btn-success">Submit <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    </form>
                </div>
                <?php endif; ?>
                <?php if(isset($edit)): ?>
                <div class="">
                    <?php echo form_open('edit/service_bill/'.$service_bill['record_id']); ?>
                    <div class="box-body" id="all_field" style="margin-top: 40px; padding: 20px;">
                        <p class="page_title">Edit Service Bill</p>
                        <p class="msg_title"><?php echo $this->session->flashdata("msg"); ?></p>
                        <div class="row">
                            <div class="field_wrapper">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="invoice_no">Invoice No.</label><span class="req">*</span>
                                <input type="text" value="<?= $service_bill['invoice_no'] ?>"  class="form-control" required id="invoice_no" placeholder="Invoice No." name="invoice_no">
                            </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="work_details">Work Details</label><span class="req">*</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= $details[0]['details'] ?>" required id="work_details" placeholder="Work Details" name="work_details[]" >
                                        <span class="input-group-addon btn btn-info add_button" id="add">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                                <?php if(isset($details)): ?>
                                <?php foreach($details as $key=>$value): ?>
                                    <?php if($key>0): ?>
                                            <div class="form-group col-sm-4 col-xs-12">
                                                <label for="work_details">Work Details</label><span class="req">*</span>
                                                <div class="input-group">
                                                    <input type="text" value="<?= $value['details'] ?>" class="form-control" required id="work_details" placeholder="Work Details" name="work_details[]" >
                                                    <span class="input-group-addon btn btn-info remove_button" id="add">
                                                        <i class="fa fa-minus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php  endif;?>
                                    <?php  endforeach;?>
                                <?php  endif;?>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="machine_qty">Machine Qty.</label>
                                <input type="text"  value="<?= $service_bill['machine_qty'] ?>" class="form-control" id="machine_qty" placeholder="Machine Qty" name="machine_qty">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="man_power">Manpower</label>
                                <input type="text" value="<?= $service_bill['man_power'] ?>"  class="form-control" id="man_power" value="" placeholder="Manpower" name="man_power">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="day">Day</label>
                                <input type="text" class="form-control" id="day" value="<?= $service_bill['day'] ?>" name="day" placeholder="Day">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="unit_price">Unit Price</label><span class="req">*</span>
                                <input type="text" value="<?= $service_bill['unit_price'] ?>" onclick="this.select()" required class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="total_price">Total Price</label><span class="req">*</span>
                                <input type="text" value="<?= $service_bill['total_price'] ?>"  readonly class="form-control" id="total_price" name="total_price" placeholder="Total Price">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="discount">Discount</label>
                                <input type="text" value="<?= $service_bill['discount'] ?>" onclick="this.select()"  class="form-control" id="discount" name="discount" placeholder="Discount">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="net_payable">Net Payable</label>
                                <input type="text" readonly   class="form-control" value="<?= $service_bill['net_payable'] ?>" id="net_payable" name="net_payable" placeholder="Net Payable">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button type="submit" style="margin-top:25px"  class="pull-left btn btn-success">Update <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    </form>
                </div>
                <?php endif; ?>

                <div id="all_list">
                    <p class="page_title">All Service Bill</p>

                    <div class="box-body table-responsive" style="overflow-x: scroll; color: black;">
                        <table id="pagination_search" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Invoice No.</th>
                                    <th style="text-align: center;">Work Details</th>
                                    <th style="text-align: center;">Machine Qty.</th>
                                    <th style="text-align: center;">Manpower</th>
                                    <th style="text-align: center;">Day</th>
                                    <th style="text-align: center;">Unit Price</th>
                                    <th style="text-align: center;">Total Price</th>
                                    <th style="text-align: center;">Discount</th>
                                    <th style="text-align: center;">Net Payable</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($all_service_bill)): ?>
                                <?php $i=1; ?>
                                <?php foreach($all_service_bill as $key=>$value):?>
                                    <tr>
                                        <?php if($i==1): ?>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['invoice_no']; ?>
                                            </td>
                                        <?php endif;?>
                                        <td class="text-left"><?= $value['counter'] ?>. <?php echo $value['details']; ?></td>
                                        <?php if($i==1): ?>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['machine_qty']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['man_power']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['day']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['unit_price']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['total_price']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['discount']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                    <?php echo $value['net_payable']; ?>
                                            </td>
                                            <td valign="middle"  rowspan="<?= $value['details_count'] ?>" class="text-center ">
                                                <a class="btn btn-info" href="<?= site_url("show_form/service_invoice/".$value['id']) ?>"><i class="fa fa-eye"></i></i></a>
                                                <a class="btn btn-success" href="<?= site_url("show_edit_form/service_bill/".$value['id']) ?>"><i class="fa fa-edit"></i></i></a>
                                                <a class="btn btn-danger" onclick="return confirm('Are Your Sure?')" href="<?= site_url("delete/service_bill/".$value['id']) ?>"><i class="fa fa-minus"></i></i></a>
                                            </td>
                                        <?php endif;?>
                                    </tr>
                                    <?php if($i==$value['details_count']) $i=0 ?>
                                    <?php $i++;?>
                                <?php endforeach;?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = ' <div class="form-group col-sm-4 col-xs-12">'+
                        '<label for="work_details">Work Details</label><span class="req">*</span>'+
                        '<div class="input-group">'+
                        '<input type="text" required class="form-control" id="work_details" placeholder="Work Details" name="work_details[]" >'+
                        '<span class="input-group-addon btn btn-info remove_button" id="add">'+
                        '<i class="fa fa-minus"></i>'+
                        '</span>'+
                        '</div>';
        <?php if(isset($edit)): ?>
            var x = <?php echo count($details) ?>; //Initial field counter is 1
        <?php else: ?>
            var x=1;
        <?php endif; ?>
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').remove(); //Remove field html
            x--; //Decrement field counte   
        });
        $("#unit_price,#day").on("change",function(){
            var day=parseInt($("#day").val())|0;
            var unit_price=parseFloat($("#unit_price").val())|0;
            var total_price=day*unit_price;
            $("#total_price").val(total_price);
            $("#net_payable").val(total_price);
            $("#discount").val("0");
        });
        $("#discount").on("change",function(){
            var day=parseInt($("#day").val())|0;
            var total_price=parseFloat($("#total_price").val())|0;
            var discount=parseFloat($("#discount").val())|0;
            var net_payable=total_price-discount;
            $("#net_payable").val(net_payable);
        });
    });
</script>