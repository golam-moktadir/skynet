<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <form id="branch_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;">
                                Create Company Name 
                                <!--<b id="msg" style="text-align: right;"></b>-->
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="branch_name">Company Name</label>
                                    <input type="text" name="branch_name" id="branch_name" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"  id="address" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Create <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: purple; font-weight: bolder; text-align: center;">
                            Company Info
                        </p>
                    </div>

                    <div class="box-body table-responsive" id="view_table" style="width: 98%; overflow-x: scroll; color: black;"></div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>
    view();
    $("#branch_form").on("submit", function (e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Insert_data/branch_name";
            //alert($(this).serialize());
            $.ajax({
                url: url,
                type: "post",
                dataType:"json",
                data: $(this).serialize(),
//                    beforeSend: function(){
//                                     
//                    },
                success: function (data) {
                    $("#branch_form")[0].reset();
                    alert(data);
                    view();
                }
            });
        }
    });
    function delete_data(id){
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/branch_name";
            $.ajax({
                url: url,
                type: "post",
                dataType:"json",
                data: {'id': id},
//                    beforeSend: function(){
//                                     
//                    },
                success: function (data) {
                    alert(data);
                    view();
                }
            });
        }
    }

    function view(){
        $.ajax({
            url: "<?php echo base_url() ?>View_data/branch_name",
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
            "order":false,
             "oSearch": {"bSmart": false}
        });
    }
</script>