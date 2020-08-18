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
                    <?php echo form_open('edit/edit_user/'.$single['record_id']); ?>
                    <div class="box-body" id="all_field" style="margin-top: 40px; padding: 20px;">
                        <p class="page_title">Edit User (Permission)</p>
                        <p class="msg_title"><?php echo $this->session->flashdata("msg"); ?></p>
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
                                    <option value="21">Add Product</option>
                                    <option value="5">Insert Product Info.</option>
                                    <option value="22">Avarage Price</option>
                                    <option value="6">Purchase Statement</option>
                                    <option value="7">Product In & Out Info.</option>
                                    <option value="8">Delivered Product</option>
                                    <option value="9">Supplier Payment</option>
                                    <option value="10">Supplier Ledger</option>
                                    <option value="11">Supplier Return</option>
                                    <option value="12">Supplier Return Info.</option>
                                    <option value="20">Purchase Order</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Sales Part</label>
                                <select name="report[]" id="report" class="form-control selectpicker"
                                        multiple>
                                    <option value="13">Sales Product</option>
                                    <option value="26">Service Bill</option>
                                    <option value="14">Sales Statement</option>
                                    <option value="24">Bill Generate</option>
                                    <option value="25">Show Bill</option>
                                    <option value="15">Insert Client Info.</option>
                                    <option value="16">Client Payment</option>
                                    <option value="17">Client Ledger</option>
                                    <option value="18">Sales Return</option>
                                    <option value="26">Challan Return</option>
                                    <option value="19">Sales Return Info.</option>
                                    <option value="23">Profit & Loss Info</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" 
                                       placeholder="" value="<?= $single['name'] ?>" name="name" autocomplete="off">
                                <div id="show_info" style="color: black;
                                     font-size: 15px; z-index: 200; background: #fcfcfc; display: none; position: absolute;
                                     border-radius: 10px; padding: 10px; box-shadow:0 0 4px 0 rgba(0,0,0,1)">
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" value="<?= $single['mobile'] ?>" class="form-control" id="mobile" placeholder="" name="mobile">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="email">Email</label>
                                <input type="email" value="<?= $single['email'] ?>" class="form-control" id="email" name="email" placeholder="">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"
                                value="<?= $single['address'] ?>" placeholder="" name="address">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="username">Username</label>
                                <input type="text" value="<?= $single['username'] ?>" class="form-control" id="username" name="username" placeholder="">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="" name="password">
                            </div>
                            <div class="form-group col-sm-5 col-xs-12"></div>
                            <div class="form-group col-sm-2 col-xs-12" style="padding-top: 20px;">
                                <button type="submit" style="width: 100%;" class="pull-left btn btn-success">Update <i class="fa fa-arrow-circle-right"></i></button>
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
                                    <th style="text-align: center;">Address</th>
                                    <th style="text-align: center;">Username</th>
                                    <th style="text-align: center;">Permission</th>
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
                                        <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->username; ?></td>

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
                                                        echo "Insert Product Info.<br>";
                                                    } elseif ($single_permission == 6) {
                                                        echo "Purchase Statement<br>";
                                                    } elseif ($single_permission == 7) {
                                                        echo "Product In & Out Info.<br>";
                                                    } elseif ($single_permission == 8) {
                                                        echo "Delivered Product<br>";
                                                    } elseif ($single_permission == 9) {
                                                        echo "Supplier Payment<br>";
                                                    } elseif ($single_permission == 10) {
                                                        echo "Supplier Ledger<br>";
                                                    } elseif ($single_permission == 11) {
                                                        echo "Supplier Return<br>";
                                                    } elseif ($single_permission == 12) {
                                                        echo "Supplier Return Info.<br>";
                                                    } elseif ($single_permission == 20) {
                                                        echo "Purchase Product<br>";
                                                    } elseif ($single_permission == 13) {
                                                        echo "Sales Product<br>";
                                                    } elseif ($single_permission == 14) {
                                                        echo "Sales Statement<br>";
                                                    } elseif ($single_permission == 15) {
                                                        echo "Insert Client Info.<br>";
                                                    } elseif ($single_permission == 16) {
                                                        echo "Client Payment<br>";
                                                    } elseif ($single_permission == 17) {
                                                        echo "Client Ledger<br>";
                                                    } elseif ($single_permission == 18) {
                                                        echo "Sales Return<br>";
                                                    } elseif ($single_permission == 26) {
                                                        echo "Service Bill<br>";
                                                    }elseif ($single_permission == 26) {
                                                        echo "Challan Return<br>";
                                                    }elseif ($single_permission == 19) {
                                                        echo "Sales Return Info.<br>";
                                                    } elseif ($single_permission == 21) {
                                                        echo "Add Product<br>";
                                                    }  elseif ($single_permission == 24) {
                                                        echo "Bill Generate<br>";
                                                    }  elseif ($single_permission == 25) {
                                                        echo "Show Bill<br>";
                                                    }  elseif ($single_permission == 26) {
                                                        echo "Challan Return<br>";
                                                    } 
                                                }
                                            }
                                            ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Edit/update_status/<?php echo $single_value->record_id; ?>"
                                               class="fa-2x fa fa-<?php if($single_value->status==1) echo "eye"; else echo "eye-slash"; ?>" title="<?php if($single_value->status==1) echo "Active"; else echo "Inactive"; ?>">
                                            </a>
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Edit/edit_user/<?php echo $single_value->record_id; ?>"
                                               class="fa-2x fa fa-edit" title="<?php if($single_value->status==1) echo "Active"; else echo "Inactive"; ?>">
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
<script>
        var data="<?= $single['permission'] ?>";
        var split_data=data.split("#");
        $('#create_options option').each(function() {
            if (jQuery.inArray($(this).val(), split_data) !== -1) {
                this.selected = true;
            }
        });
        $('#information_entry option').each(function() {
            if (jQuery.inArray($(this).val(), split_data) !== -1) {
                this.selected = true;
            }
        });
        $('#report option').each(function() {
            if (jQuery.inArray($(this).val(), split_data) !== -1) {
                this.selected = true;
            }
        });
</script>