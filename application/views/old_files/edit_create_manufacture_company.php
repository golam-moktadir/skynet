<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $manufacture_company = $one_info->manufacture_company;
    $mobile = $one_info->mobile;
    $address = $one_info->address;
    $previous_due = $one_info->previous_due;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="" style="color: black;">
                    <?php echo form_open_multipart('Edit/create_manufacture_company/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Supplier</p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="vendor_name">Supplier name</label>
                                <input type="text" class="form-control" id="vendor_name" 
                                       value="<?php echo $manufacture_company; ?>" placeholder="" name="vendor_name">
                                <input type="hidden" id="old_vendor_name" 
                                       value="<?php echo $manufacture_company; ?>" name="old_vendor_name">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="mobile_no">Mobile No</label>
                                <input type="text" class="form-control" id="mobile_no" 
                                       value="<?php echo $mobile; ?>" placeholder="" name="mobile_no">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                       value="<?php echo $address; ?>" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="previous_due">Previous Due</label>
                                <input type="text" class="form-control" id="previous_due" 
                                       value="<?php echo $previous_due; ?>" placeholder="" name="previous_due">
                            </div>
                            <div class="col-sm-2 box-footer clearfix">
                                <button style="margin-top: 27px" type="submit" class="pull-left btn btn-success">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</aside>