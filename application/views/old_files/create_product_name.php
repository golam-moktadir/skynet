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
}elseif ($msg == "parts") {
    $msg = "Please Provide Parts Name";
}elseif ($msg == "exits") {
    $msg = "Parts Name Already Exits";
}
?>
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
                    <?php echo form_open_multipart('Insert/create_product_name'); ?>
                    <div class="box-body">
                        <p style="font-size: 20px;">Create Parts Name</p>
                        <p  style="font-size: 20px; color: #066;"><?php echo $msg; ?></p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="product_type">Machine Category</label>
                                <select name="product_type" id="product_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
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
                                    <option value="">-- Select --</option>
                                    <?php foreach ($section as $info) { ?>
                                        <option value="<?php echo $info->section; ?>">
                                            <?php echo $info->section; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="product_name">Parts Name</label>
                                <input type="text" class="form-control" required id="product_name" 
                                       placeholder="" name="product_name">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <button type="submit" class="pull-left btn btn-success final_btn">Create 
                                    <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>                              
                    </div>
                    <div class="row updown" style="text-align: center;">
                        <button onclick="scrollDown();" class="btn btn-info"
                                style="float: right; margin-right: 20px;"
                                id="down_btn">Down
                        </button>
                    </div>
                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Machine Category</th>
                                    <th style="text-align: center;">Section</th>
                                    <th style="text-align: center;">Parts Name</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row updown">
                        <button onclick="scrollUp();" class="btn btn-success"
                                style="float: right; margin: 20px;" id="up_btn">Up
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>
<script>
  $(document).ready(function() {
    function datatable(){
        $('#example2').DataTable( {
            "lengthMenu": [[50,100,150 -1], [50,100,150]],
            "paging":   true,
            "ordering": true,
            "info":     true 
        } );
    }
    get_view();
    function get_view()
    {
        var search_invoice = $('#search_invoice').val();
        var post_data = {
            'search_invoice': search_invoice,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>show_form/show_product_name",
            // datType:"json",
            data: {"data":"data"},
            success: function (data) {
                $('#example2 tbody').html(data);
                datatable();
            }
        });
    }
  });
  
  function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 0);
    } 
</script>