<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $category = $one_info->category;
    $sub_category = $one_info->sub_category;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/create_sub_category/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Product Sub-Category</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="category">Select Category</label>
                                <select name="category" id="category" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_category as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>"
                                            <?php if ($info->product_type == $category) {
                                                echo 'selected';
                                            } ?>>
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="sub_category">Sub-category</label>
                                <input type="text" class="form-control" id="sub_category"
                                       placeholder="" name="sub_category" value="<?php echo $sub_category; ?>">
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