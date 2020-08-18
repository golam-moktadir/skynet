<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $brand_name = $one_info->brand_name;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/create_brand_name/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Brand Name</p>
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12">
                                <label for="brand_name">Brand Name</label>
                                <input type="text" class="form-control" id="brand_name"
                                       placeholder="" name="brand_name" value="<?php echo $brand_name;?>">
                            </div>
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