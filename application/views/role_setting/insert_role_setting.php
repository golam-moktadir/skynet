<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;">
                    <form id="role_setting_form">
                    <div class="box-body">
                        <p style="font-size: 20px; margin: 0px; padding: 0px; 
                           color: green; font-weight: bolder; text-align: center;">
                            User Setting
                        </p>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="user_name">Username</label>
                                <input type="text" name="user_name" id="user_name" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="password">Password</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="view_menu">View Menu</label>
                                <select name="view_menu[]" id="view_menu" class="form-control selectpicker"
                                        data-live-search="true" multiple>
                                    <option value="">-- Select --</option>
                                    <option value="all">All</option>
                                    <?php foreach ($all_menu as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo $info->menu_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                <label for="edit_menu">Edit Menu</label>
                                <select name="edit_menu[]" id="edit_menu" class="form-control selectpicker"
                                        data-live-search="true" multiple>
                                    <option value="">-- Select --</option>
                                    <option value="all">All</option>
                                    <?php foreach ($all_menu as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo $info->menu_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="delete_menu">Delete Menu</label>
                                <select name="delete_menu[]" id="delete_menu" class="form-control selectpicker"
                                        data-live-search="true"multiple>
                                    <option value="">-- Select --</option>
                                    <option value="all">All</option>
                                    <?php foreach ($all_menu as $info) { ?>
                                        <option value="<?php echo $info->record_id; ?>">
                                            <?php echo $info->menu_name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
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
                            All User Info
                        </p>
                    </div>

                    <div class="box-body table-responsive" id="view_table" style="width: 100%; height: 300px; overflow-x: scroll; color: black;"></div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script>
        view();
        $("#role_setting_form").on("submit", function (e) {
            e.preventDefault();
            if (confirm("Are you sure?")) {
                var url = "<?php echo base_url() ?>Insert_data/role_setting";
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
                        $('#view_menu').val("");
                        $('#insert_menu').val("");
                        $('#edit_menu').val("");
                        $('#delete_menu').val("");
                        $("#view_menu").selectpicker('refresh');
                        $("#insert_menu").selectpicker('refresh');
                        $("#edit_menu").selectpicker('refresh');
                        $("#delete_menu").selectpicker('refresh');
                        $("#role_setting_form")[0].reset();
                        alert(data);
                        view();
                    }
                });
            }
        });
        
        function change_status(id, status_value){
            if (confirm("Are you sure?")) {
                var url = "<?php echo base_url() ?>Edit_data/change_status";
                $.ajax({
                    url: url,
                    type: "post",
                    dataType:"json",
                    data: {'id': id, 'status_value': status_value, 'db_name': 'role_setting'},
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

        
        function delete_data(id){
            if (confirm("Are you sure?")) {
                var url = "<?php echo base_url() ?>Delete_data/role_setting";
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
                url: "<?php echo base_url() ?>View_data/role_setting",
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
                "order":false
            });
        }
</script>