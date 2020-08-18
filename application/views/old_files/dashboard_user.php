<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
        cursor: pointer;
    }
    #img{
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        }
    #img img{
        height:64px;
        width:64px;
    }

</style>
<aside>  
    <section class="content">
        <div class="row">
                    <div id="overlay">
                        <div id="img">
                            <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="">
                        </div>
                    </div>
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <div class="small-box" style="margin-bottom: 15px; width: 600px; height:40px; background-color: #784788;color: white;border-radius: 6px;margin-left: auto;margin-right: auto;" id="no_print6">
                    <div class="" style="text-align: center;">   
                        <p style="font-size: 25px;">EARTHMOVING SOLUTION LIMITED</p>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row">
                            <!--<div class="form-group col-sm-3 col-xs-12">-->
                            <!--    <label for="date_from">Date From</label>-->
                            <!--    <input type="text" class="form-control new_datepicker"-->
                            <!--           placeholder="Insert Date" name="date_from" id="date_from"-->
                            <!--           autocomplete="off">-->
                            <!--</div>-->
                            <!--<div class="form-group col-sm-3 col-xs-12">-->
                            <!--    <label for="date_to">Date To</label>-->
                            <!--    <input type="text" class="form-control new_datepicker"-->
                            <!--           placeholder="Insert Date" name="date_to" id="date_to"-->
                            <!--           autocomplete="off">-->
                            <!--</div>-->
 
                            <div class="form-group col-sm-4 col-xs-12" id="no_print1">
                                <label for="po_no">Select PO No.</label>
                                <select id="po_no" name="po_no" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_po as $info) { ?>
                                        <option value="<?php echo $info->po_no; ?>">
                                            <?php echo $info->po_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" id="no_print1">
                                <label for="parts_name">Select Part's Name.</label>
                                <select id="parts_name" name="parts_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_parts_name as $info) { ?>
                                        <option value="<?php echo $info->parts_name; ?>">
                                            <?php echo $info->parts_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" id="no_print2">
                                <label for="machine_category">Select Machine Category</label>
                                <select id="machine_category" name="machine_category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_machine_category as $info) { ?>
                                        <option value="<?php echo $info->machine_category; ?>">
                                            <?php echo $info->machine_category; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" id="no_print3">
                                <label for="parts_no">Select Part No.</label>
                                <select id="parts_no" name="parts_no" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_parts_no as $info) { ?>
                                        <option value="<?php echo $info->parts_no; ?>">
                                            <?php echo $info->parts_no; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" id="no_print4">
                                <label for="shipping_type">Select Shipping Type</label>
                                <select id="shipping_type" name="shipping_type" class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="Ship">Ship</option>
                                    <option value="DHL">DHL</option>
                                    <option value="Air">Air</option>
                                    <option value="By Hand">By Hand</option>
                                    <option value="Local">Local</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12" style="margin-top: 27px;" id="no_print5">
                                <button type="button" class="pull-left btn btn-success final_btn"
                                        id="search_purchase">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                <div id="show_purchase"></div>
        <div class="row" id="no_print7">
            <div class="col-xs-6">
                <div class="small-box bg-blue" style="border-radius: 10px;">
                    <div class="inner" style="text-align: center; height: 130px;">
                        <a  style="color: wheat;" href="<?php echo base_url(); ?>Show_form/only_product_info">
                            <p style="font-size: 20px;"><?php echo $product_qty; ?></p>
                            <p style="color: white; font-size: 20px;">Parts Quantity</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="small-box bg-blue" style="border-radius: 10px;">
                    <div class="inner" style="text-align: center; height: 130px;">
                        <a target="_blank"  style="color: wheat;" href="<?php echo base_url(); ?>Show_form/stock_shortage">
                            <p style="color: wheat; font-size: 20px;"><?php echo $stock_shortage; ?></p>
                            <p style="color: white; font-size: 20px;">Stock Shortage</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
<!--        <div class="footer" style="margin-top: 60px;">
            <p style="text-align: center; color: wheat;">Copyright &copy; 2018. Designed & Developed by <a href="http://www.greensoftechbd.com/" target="_blank" style="color: yellow;">GREEN SOFTWARE &
                    TECHNOLOGY</a>. All rights reserved</p>
        </div>
        <p style="text-align: right; font-weight: bold; color: #066;">Latest Version</p>-->
    </section>
</aside>
<script type="text/javascript">
    $("#search_purchase").click(function () {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var po_no = $('#po_no').val();
        var machine_category = $('#machine_category').val();
        var parts_no = $('#parts_no').val();
        var parts_name = $('#parts_name').val();
        var manufacturer = $('#manufacturer').val();
        var shipping_type = $('#shipping_type').val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'po_no': po_no, 'manufacturer': manufacturer,
            'machine_category': machine_category, 'parts_no': parts_no,'parts_name': parts_name,'shipping_type': shipping_type,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_purchase_statement",
            data: post_data,
            beforeSend: function() {
                $("#overlay").show();
            },
            success: function (data) {
                $('#show_purchase').html(data);
                $("#overlay").hide();
            },
            complete:function(){
                $("#overlay").hide();
            }
        });
    });
</script>