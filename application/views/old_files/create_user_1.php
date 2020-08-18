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
<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .page_title{font-size: 20px; text-align: center; font-weight: bolder; text-decoration: underline; color: black;}
    .page_title_two{font-size: 18px; padding: 0px; margin: 0px; text-decoration: underline; float: left;}
    .msg_title{font-size: 18px; padding: 0px; margin: 0px; color: #066;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="">
                    <?php echo form_open_multipart('Insert/create_user'); ?>
                    <div class="box-body" id="all_field" style="margin-top: 40px; padding: 20px;">
                        <p class="page_title">Create User (Permission)</p>
                        <p class="msg_title"><?php echo $msg; ?></p>
                        <div class="row" style="color: black; font-size: 18px;">
                            <div class="form-group col-md-4">
                                <label>Create Options</label>
                                <select name="create_options[]" id="create_options" class="form-control selectpicker"
                                        multiple style="">
                                    <option value="1">Machine Category</option>
                                    <option value="2">Section</option>
                                    <option value="3">Parts Name</option>
                                    <option value="4">Supplier</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Inventory Part</label>
                                <select name="information_entry[]" id="information_entry" class="form-control selectpicker"
                                        multiple>
                                    <option value="5">Insert Product Info.</option>
                                    <option value="6">Purchase Statement</option>
                                    <option value="7">Product In & Out Info.</option>
                                    <option value="8">Delivered Product</option>
                                    <option value="9">Supplier Payment</option>
                                    <option value="10">Supplier Ledger</option>
                                    <option value="11">Supplier Return</option>
                                    <option value="12">Supplier Return Info.</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Sales Part</label>
                                <select name="report[]" id="report" class="form-control selectpicker"
                                        multiple>
                                    <option value="13">Sales Product</option>
                                    <option value="14">Sales Statement</option>
                                    <option value="15">Insert Client Info.</option>
                                    <option value="16">Client Payment</option>
                                    <option value="17">Client Ledger</option>
                                    <option value="18">Sales Return</option>
                                    <option value="19">Sales Return Info.</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" 
                                       placeholder="" name="name" autocomplete="off">
                                <div id="show_info" style="color: black;
                                     font-size: 15px; z-index: 200; background: #fcfcfc; display: none; position: absolute;
                                     border-radius: 10px; padding: 10px; box-shadow:0 0 4px 0 rgba(0,0,0,1)">
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" id="mobile" placeholder="" name="mobile">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                       value="" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="" name="password">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="address">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group col-sm-5 col-xs-12"></div>
                            <div class="form-group col-sm-2 col-xs-12" style="padding-top: 20px;">
                                <button type="submit" style="width: 100%;" class="pull-left btn btn-success">Submit <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="form-group col-sm-5 col-xs-12"></div>
                        </div>
                    </div>
                    <br>
                    </form>
                </div>

                <div id="all_list">
                    <p class="page_title">All User List</p>

                    <div class="box-body table-responsive" style="overflow-x: scroll; color: black;">
                        <table id="pagination_search" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Full Name</th>
                                    <th style="text-align: center;">Mobile</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Address</th>
                                    <th style="text-align: center;">Username</th>
                                    <th style="text-align: center;">Image</th>
                                    <th style="text-align: center;">Permission</th>
                                    <th style="text-align: center;">Route Permission</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_user as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->email; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->username; ?></td>
                                        <td style="text-align: center;">
                                            <?php if (file_exists('./assets/img/user/' . $single_value->image)) { ?>
                                                <img src="<?php echo base_url(); ?>assets/img/user/<?php echo $single_value->image; ?>"
                                                     width="50" height="50">
                                                 <?php } ?>
                                        </td>

                                        <td style="text-align: center; color: green; font-weight: bold; white-space: nowrap;">
                                            <?php
                                            $permission = explode('#', $single_value->permission);
                                            foreach ($permission as $single_permission) {
                                                if (!empty($single_permission)) {
                                                    if ($single_permission == 1) {
                                                        echo "Machine Category<br>";
                                                    } elseif ($single_permission == 2) {
                                                        echo "Section<br>";
                                                    } elseif ($single_permission == 3) {
                                                        echo "Parts Name<br>";
                                                    } elseif ($single_permission == 4) {
                                                        echo "Supplier<br>";
                                                    } elseif ($single_permission == 5) {
                                                        echo "Create Parts Name<br>";
                                                    } elseif ($single_permission == 6) {
                                                        echo "Create Supplier Name<br>";
                                                    } elseif ($single_permission == 7) {
                                                        echo "Create Counter Name<br>";
                                                    } elseif ($single_permission == 8) {
                                                        echo "Create Route Name<br>";
                                                    } elseif ($single_permission == 9) {
                                                        echo "Create Sub-route Name<br>";
                                                    } elseif ($single_permission == 10) {
                                                        echo "Create Coach No<br>";
                                                    } elseif ($single_permission == 11) {
                                                        echo "Create Bank Name<br>";
                                                    } elseif ($single_permission == 12) {
                                                        echo "Create Head of Income<br>";
                                                    } elseif ($single_permission == 13) {
                                                        echo "Create Head of Expenditure<br>";
                                                    } elseif ($single_permission == 14) {
                                                        echo "Create Line Expense Head<br>";
                                                    } elseif ($single_permission == 15) {
                                                        echo "Create Designation<br>";
                                                    } elseif ($single_permission == 16) {
                                                        echo "Create User<br>";
                                                    } elseif ($single_permission == 17) {
                                                        echo "Insert Staff Info.<br>";
                                                    } elseif ($single_permission == 18) {
                                                        echo "Insert Transport Info.<br>";
                                                    } elseif ($single_permission == 19) {
                                                        echo "Insert Change Transport Info.<br>";
                                                    } elseif ($single_permission == 20) {
                                                        echo "Insert Papers Info.<br>";
                                                    } elseif ($single_permission == 21) {
                                                        echo "Insert Log Sheet Info.<br>";
                                                    } elseif ($single_permission == 22) {
                                                        echo "Insert Run Kilometer (KM)<br>";
                                                    } elseif ($single_permission == 23) {
                                                        echo "Insert Petty Cash<br>";
                                                    } elseif ($single_permission == 24) {
                                                        echo "Insert Parts Info.<br>";
                                                    } elseif ($single_permission == 25) {
                                                        echo "Insert Bill Register<br>";
                                                    } elseif ($single_permission == 26) {
                                                        echo "Insert Line Expense<br>";
                                                    } elseif ($single_permission == 27) {
                                                        echo "Insert Daily Cash<br>";
                                                    } elseif ($single_permission == 28) {
                                                        echo "Transport Reports<br>";
                                                    } elseif ($single_permission == 29) {
                                                        echo "Papers Report<br>";
                                                    } elseif ($single_permission == 30) {
                                                        echo "Transport Wise Run KM<br>";
                                                    } elseif ($single_permission == 31) {
                                                        echo "Lubricant Change Info.<br>";
                                                    } elseif ($single_permission == 32) {
                                                        echo "Log Sheet Report<br>";
                                                    } elseif ($single_permission == 33) {
                                                        echo "Petty Cash Report<br>";
                                                    } elseif ($single_permission == 34) {
                                                        echo "Parts Report<br>";
                                                    } elseif ($single_permission == 35) {
                                                        echo "Bill Report<br>";
                                                    } elseif ($single_permission == 36) {
                                                        echo "Income & Expenditure Summery<br>";
                                                    } elseif ($single_permission == 37) {
                                                        echo "Daily Cash Position<br>";
                                                    } elseif ($single_permission == 38) {
                                                        echo "Trial Balance<br>";
                                                    } elseif ($single_permission == 39) {
                                                        echo "Route & Trip wise Accounts<br>";
                                                    }
                                                }
                                            }
                                            ?>
                                        </td>


                                        <td style="text-align: center; color: green; font-weight: bold; white-space: nowrap;">
                                            <?php
                                            $all_route = explode('###', $single_value->route);
                                            foreach ($all_route as $single_route) {
                                                if (!empty($single_route)) {
                                                    echo $single_route . "<br>";
                                                }
                                            }
                                            ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Delete/create_user/<?php echo $single_value->record_id; ?>"
                                               class="btn btn-danger fa fa-trash-o" title="Delete">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>