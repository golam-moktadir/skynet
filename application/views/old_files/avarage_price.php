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
} elseif ($msg == "add") {
    $msg = "Product Added Successfully";
}
?>
<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 0px; padding-left: 5px; padding-right: 5px;}
</style>
<aside>
    <section class="content" style="padding-top: 0px; margin-top: 0px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">

                <div id="all_list">
                    <div class="box-body table-responsive "
                         style="">
                        <div class="row" style="text-align: center;">
                            <!--                            <button id="print_button" title="Click to Print" type="button"
                                                                style="float: left; margin-left: 20px;"
                                                                onClick="window.print();" class="btn btn-flat btn-warning fa fa-print"></button>-->

                        </div>
                        <div class="row" style="text-align: center;">
                            <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
                                 alt="Logo" height="85px" style="border-radius: 10px;">
                        </div>
                        <p style="color: #066; font-size: 20px; text-align: center;">Search Average Price</p>
                        <?php echo $this->session->flashdata("msg"); ?>
                        <div class="form-group col-sm-3 col-xs-12" style="margin: 20px;">
                            <label for="search_po_no">Select Parts No</label>
                            <select id="search_p_no" name="search_p_no" class="form-control selectpicker"
                                    data-live-search="true" >
                                <option value="">--Select--</option>
                                <?php foreach ($parts_no as $part_no) { ?>
                                    <option value="<?php echo $part_no->parts_no; ?>">
                                        <?php echo $part_no->parts_no; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3 col-xs-12"  style="margin: 20px;">
                            <label for="search_po_no">Select Parts Name</label>
                            <select id="search_p_name" name="search_p_name" class="form-control selectpicker"
                                    data-live-search="true" >
                                <option value="">--Select--</option>
                                <?php foreach ($parts_name as $p_name) { ?>
                                    <option value="<?php echo $p_name->parts_name; ?>">
                                        <?php echo $p_name->parts_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="button" class="pull-left btn btn-info" style="margin-top: 48px;"
                                id="search_now">Search <i class="fa fa-arrow-circle-right"></i></button>
                        <table id="pagination_search" class="table table-bordered table-hover list_table">
                            <thead>
                            <tr>
                                <th style="text-align: center;">Parts No.</th>
                                <th style="text-align: center;">Parts Name</th>
                                <th style="text-align: center;">Supplier</th>
                                <th style="text-align: center;">PO No.</th>
                                <th style="text-align: center;">Unit Price</th>
                                <th style="text-align: center;">After Discount U.P</th>
                                <th style="text-align: center;">Quantity</th>
                                <th style="text-align: center;">Total Price</th>

                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="row">
                            <button onclick="scrollUp();" class="btn btn-success"
                                    style="float: right; margin: 20px;" id="up_btn">Up
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<style>
    .list_table.table-bordered{
        border: grey 0.1px solid;
    }
    .list_table.table-bordered > thead > tr > th{
        border: grey 0.1px solid;
    }
    .list_table.table-bordered > tbody > tr > td{
        border: grey 0.1px solid;
    }
</style>
<script type="text/javascript">
    function scrollDown() {
        window.scrollTo(0, document.body.scrollHeight);
    }

    function scrollUp() {
        window.scrollTo(0, 0);
    }
</script>

<script type="text/javascript">
    $('#search_now').on('click', function () {
        var search_p_no = $('#search_p_no').val();
        var search_p_name = $('#search_p_name').val();
        var post_data = {
            'search_p_no': search_p_no, 'search_p_name': search_p_name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/search_average_price",
            data: post_data,
            success: function (data) {
                $('#pagination_search').html(data);
            }
        });
    });

</script>
