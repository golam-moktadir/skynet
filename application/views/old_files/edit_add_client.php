<?php
foreach($one_value as $one_info){
    $record_id = $one_info->record_id;
    $name = $one_info->name;
    $mobile = $one_info->mobile;
    $address = $one_info->address;
    $previous_due = $one_info->previous_due;
    $point = $one_info->point;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/add_client/'.$record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Client</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="client_name">Client Name</label>
                                <input type="text" readonly name="client_name" value="<?php echo $name; ?>" id="client_name" class="form-control">
                                <input type="hidden" name="old_client_name" value="<?php echo $name; ?>" id="old_client_name" class="form-control">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>" class="form-control">
                            </div>
                            
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                       value="<?php echo $address; ?>" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="previous_due">Previous Due</label>
                                <input type="text" class="form-control" id="previous_due" 
                                       value="<?php echo $previous_due; ?>" placeholder="" name="previous_due">
                            </div>
<!--                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="point">Point</label>
                                <input type="text" class="form-control" id="point"
                                       value="<?php echo $point; ?>" placeholder="" name="point">
                            </div>-->
                            <div class="col-sm-4 box-footer clearfix">
                                <button style="margin-top: 16px" type="submit" class="pull-left btn btn-success">Edit <i
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