<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $section = $one_info->section;
    $machine_category = $one_info->machine_category;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <?php echo form_open_multipart('Edit/create_section/' . $record_id); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Edit Section</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="product_type">Machine Category</label>
                                <select name="product_type" id="product_type" class="form-control">
                                    <option value="<?php echo $machine_category; ?>"><?php echo $machine_category; ?></option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>">
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group" style="width: 300px;">
                                <label for="section">Section</label>
                                <input type="text" class="form-control" id="section"
                                       value="<?php echo $section; ?>"
                                       placeholder="" name="section">
                            </div>
                            <div class=" col-sm-4" style="margin-top: 25px;">
                                <button type="submit" class="pull-left btn btn-success">Edit <i
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