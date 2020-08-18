<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Created Successfully";
} elseif ($msg == "edit") {
    $msg = "Edited Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
}
?>
<?php echo $this->session->flashdata("msg"); ?>
<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable"> 
                <div style="color: black;">
                    <?php echo form_open_multipart('Insert/create_product_type'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Create Machine Category</p>
                        <p  style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" required id="product_type" 
                                       placeholder="" name="product_type">
                            </div>
                            <div class="form-group col-sm-4">
                                <select name="brand" id="brand"  class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="XCMG">XCMG</option>
                                    <option value="Sinotruk">Sinotruk</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <button type="submit" class="pull-left btn btn-success">Create <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    </form>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>                              
                    </div>

                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Product Category</th>
                                    <th style="text-align: center;">Brand</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_value as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->product_type; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-info fa fa-edit" title="Edit"
                                               href="<?php echo base_url(); ?>show_edit_form/create_product_type/<?php echo $single_value->record_id; ?>">
                                            </a>
                                            <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                                               href="<?php echo base_url(); ?>Delete/create_product_type/<?php echo $single_value->record_id; ?>">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true 
    } );
  });
</script>