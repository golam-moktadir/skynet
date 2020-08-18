<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" class="no_print">
                <form id="" method='post' action="<?php echo base_url().'Insert_data/brand'?>" enctype='multipart/form-data'>
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                Insert Brand
                            </p>
                            <?php
                                if($this->session->flashdata('message')){
                            ?>
                                <p><?php echo $this->session->flashdata('message') ?></p>

                            <?php } ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <strong><label for="brand">Brand</label></strong>
                                        <input type="text" name="brand" placeholder="Enter Brand Name" class="form-control"  id="brand" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <strong><label for="image">Image</label></strong>
                                        <input type="file" name="image" id="image" >
                                    </div>
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px;" id="insert_btn">
                                    <button type="submit" class="pull-left btn btn-success">Insert <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px; display:none;"  id="edit_btn" >
                                    <button type="button" class="pull-left btn btn-info" id="click_edit">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: purple; font-weight: bolder; text-align: center;"></p>
                    </div>

                    <div class="box-body table-responsive"  id="view_table" style="width: 98%; overflow-x: scroll; color: black;">
                    <table id="datatable" class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">SL</th>
                                <th style="text-align: center;">Brand</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;" class="no_print">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($brands as $brand) {
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo $brand->brand; ?></td>
                                    <td style="text-align: center;">
                                        <img src="<?php echo base_url().'assets/img/brands/'.$brand->image ?>" width='250' height='250'>                                        
                                    </td>

                                    <td style="text-align: center;"  class="no_print">
                                        <button class="btn btn-info" onclick="edit_data('<?php echo $brand->record_id; ?>')">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        
                                            <button class="btn btn-danger" onclick="delete_data('<?php echo $brand->record_id; ?>')">
                                                <i class="fa fa-trash-o"></i>
                                            </button> 
                                        
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
    function edit_data(id) {
        var url = "<?php echo base_url() ?>Get_data/category";
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {'id': id},
            success: function (data) {
                $("#category_form")[0].reset();
                $('#record_id').val(data[0].record_id);
                $('#category').val(data[0].category);
                $('#insert_title').hide();
                $('#edit_title').show();
                $('#insert_btn').hide();
                $('#edit_btn').show();
            }
        });
    }

    $("#click_edit").on("click", function () {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Edit_data/category";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: new FormData($('#category_form')[0]),
                processData: false,
                contentType: false,
                success: function (data) {
                    $("#category_form")[0].reset();
                    $('#insert_title').show();
                    $('#edit_title').hide();
                    $('#insert_btn').show();
                    $('#edit_btn').hide();
                    alert(data);
                    view();
                }
            });
        }
    });
    function delete_data(id) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/category";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
                data: {'id': id},
                success: function (data) {
                    alert(data);
                    view();
                }
            });
        }
    }

    function view() {
        $.ajax({
            url: "<?php echo base_url() ?>View_data/category",
            dataType: "json",
            success: function (data) {
                $("#view_table").html(data);
                datatable();
            }
        });
    }

    function datatable() {
        $('#datatable').dataTable({
            //"info":false,
            "autoWidth": false,
            "order": false
        });
    }
</script>

<style>
    @media print {
        @page 
        {
            size: A4 landscape;   /* auto is the current printer page size */
            margin: -5mm 0mm 0mm 10mm;
        }
        html
        {
            background-color: #FFFFFF; 
            margin: 0px;  /* this affects the margin on the html before sending to printer */
        }
        .no_print {
            display: none;
        }
        ::-webkit-scrollbar{
            display: none;
        }
        .dataTables_filter {
            display: none;
        }
        .dataTables_paginate {
            display: none;
        }
        .dataTables_info {
            display: none;
        }
        .dataTables_length {
            display: none;
        }
        .dataTables_orderable{
            display: none;
        }
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after {
            display: none;
        }
    }
</style>
