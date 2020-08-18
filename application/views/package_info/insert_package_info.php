<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <form id="package_form">
                    <div class="box-body">
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: green; font-weight: bolder; text-align: center;">
                            Create Package Name
                        </p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="branch_name">Company Name</label>
                                <select name="branch_name" id="branch_name" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_branch as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo $info->branch_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="service_type">Service Type</label>
                                <select name="service_type" id="service_type" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_service as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>"><?php echo $info->service_type; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="package_code">Package Code</label>
                                <input type="text" name="package_code" id="package_code" class="form-control">
                            </div>
                             <div class="form-group col-sm-3 col-xs-12">
                                <label for="package_name">Package Name</label>
                                <input type="text" name="package_name" id="package_name" class="form-control">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" id="bandwidth_field" style="display: none;">
                                <label for="bandwidth">Bandwidth</label>
                                <input type="text" name="bandwidth" id="bandwidth" class="form-control">
                            </div>
                             <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="package_price">Package Price</label>
                                <input type="text" name="package_price" id="package_price" class="form-control">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
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
                            All Package Info
                        </p>
                    </div>

                    <div class="box-body table-responsive"  id="view_table" style="width: 98%; overflow-x: scroll; color: black;">
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>
        view();
        $("#service_type").on("change paste keyup", function () {
            var service_type = $('#service_type option:selected').html();
            //alert(service_type);
            if(service_type === "ISP"){
                 $("#bandwidth_field").show();
            }else{
                $("#bandwidth_field").hide();
            }
        });
        $("#package_form").on("submit", function (e) {
            e.preventDefault();
            if (confirm("Are you sure?")) {
                var all_data = $(this).serializeArray();
                all_data.push({name: "branch_id", value: $("#branch_name").val()});
                all_data.push({name: "service_id", value: $("#service_type").val()});
                var url = "<?php echo base_url() ?>Insert_data/package_info";
                $.ajax({
                    url: url,
                    type: "post",
                    dataType:"json",
                    data: $.param(all_data),
//                    beforeSend: function(){
//                                     
//                    },
                    success: function (data) {
                        $('#branch_name').val("");
                        $('#service_type').val("");
//                      $('#branch_name').find('option:first').attr('selected', 'selected'); 
                        $("#branch_name").selectpicker('refresh');
                        $("#service_type").selectpicker('refresh');
                        $("#package_form")[0].reset();
                        alert(data);
                        view();
                    }
                });
            }
        });
        
        function delete_data(id){
            if (confirm("Are you sure?")) {
                var url = "<?php echo base_url() ?>Delete_data/package_info";
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
                url: "<?php echo base_url() ?>View_data/package_info",
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