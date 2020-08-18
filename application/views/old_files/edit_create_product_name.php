<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->record_id;
    $product_name = $one_info->product_name;
    $machine_category = $one_info->machine_category;
    $section = $one_info->section;
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black; height: 800px;">
                    <?php echo form_open_multipart('Edit/create_product_name/' . $record_id); ?>
                    <div class="box-body">
                        <?php echo $this->session->flashdata("msg"); ?>
                        <p style="font-size: 20px;">Edit Parts Name</p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_type">Machine Category</label>
                                <select name="product_type" id="product_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="<?php echo $machine_category; ?>"><?php echo $machine_category; ?></option>
                                    <?php foreach ($product_type as $info) { ?>
                                        <option value="<?php echo $info->product_type; ?>">
                                            <?php echo $info->product_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="section">Section</label>
                                <select name="section" id="section" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="<?php echo $section; ?>"><?php echo $section; ?></option>
                                    <?php foreach ($all_section as $info) { ?>
                                        <option value="<?php echo $info->section; ?>">
                                            <?php echo $info->section; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" class="form-control" id="product_name"
                                       value="<?php echo $product_name; ?>"
                                       placeholder="" required name="product_name">
                                <input type="hidden"  id="id"
                                       value="<?php echo $record_id; ?>"
                                       required name="id">
                            </div>
                            <div class="col-sm-2 form-group" style="margin-top: 25px;">
                                <button  type="submit" class="pull-left btn btn-success">Edit
                                    <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</aside>