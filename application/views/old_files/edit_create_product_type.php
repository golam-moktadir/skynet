<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $product_type = $one_info->product_type;
    $brand = $one_info->brand;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/create_product_type/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Machine Category</p>
                        <div class="row">
                            <div class="col-sm-4 form-group" style="width: 300px;">
                                <input type="text" required class="form-control" id="product_type"
                                       value="<?php echo $product_type; ?>"
                                       placeholder="" name="product_type">
                                <input type="hidden" name='id' value="<?php echo $record_id; ?>" >
                            </div>
                            <div class="form-group col-sm-4">
                                <select name="brand" id="brand" class="form-control">
                                    <option value="" >--Select--</option>
                                    <option <?php if($brand=="XCMG") echo "selected"; ?> value="XCMG">XCMG</option>
                                    <option <?php if($brand=="Sinotruk") echo "selected"; ?> value="Sinotruk">Sinotruck</option>
                                </select>
                            </div>
                            <div class=" col-sm-4 box-footer clearfix">
                                <button style="margin-top: -11px;" type="submit" class="pull-left btn btn-success">Edit <i
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