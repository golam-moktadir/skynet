<?php
//require __DIR__ .'/escpos-php/autoload.php';
$user_type = $this->session->ses_user_type;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EARTHMOVING SOLUTION LIMITED</title>
        <link rel="Tab Icon" type="image/png" href="<?php echo base_url(); ?>assets/img/fab.jpg"/>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url(); ?>adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>adminlte/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/fixedHeader.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
        <!--Live Search-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    </head>

    <body>
        <div class="container-fluid" style="position: fixed; z-index: 50; width: 100%;">
            <div class="row">
                <div class="navbar navbar-inverse" style="background-color: #066;
                     color: white; border: 0px; margin-left: 20px; margin-right: 20px;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse row" style="padding: 8px; font-size: 16px; font-weight: bold;">
                            <?php if ($user_type == "admin") { ?>
                                <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a class="sub_hide" style="color: white;" href="<?php echo base_url(); ?>Log_in_out">Dashboard</a>
                                </div>
                                <div class="col-sm-2 col-xs-12"
                                     style="color: #066; text-align: center; padding-top: 3px; padding-right: 0px;">
                                    <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                       data-toggle="dropdown">Create Options<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/create_product_type/main"><i
                                                    class="fa fa-th text-olive"></i> Machine Category</a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/create_section/main"><i
                                                    class="fa fa-th text-purple"></i> Section</a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/create_product_name/main"><i
                                                    class="fa fa-th text-yellow"></i> Parts Name</a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/create_manufacture_company/main"><i
                                                    class="fa fa-th text-blue"></i> Supplier</a>
                                        </li>
<!--                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/create_user/main">
                                                <i class="fa fa-th text-red"></i>
                                                <span>Create User</span>
                                            </a>
                                        </li>-->
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                       data-toggle="dropdown">Inventory Part
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/purchase_product/main">
                                                <i class="fa fa-th text-green"></i>
                                                <span>Insert Product Info.</span>
                                            </a>
                                        </li>
<!--                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/search_product">
                                                <i class="fa fa-th text-red"></i>
                                                <span>Search Product</span>
                                            </a>
                                        </li>-->
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/purchase_statement/main">
                                                <i class="fa fa-th text-teal"></i>
                                                <span>Purchase Statement</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/product_inout/main">
                                                <i class="fa fa-th text-black"></i>
                                                <span>Product In & Out Info.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="
                                               <?php echo base_url(); ?>Show_form/delivered_product/main">
                                                <i class="fa fa-th text-blue"></i>
                                                <span>Delivered Product</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a class="test" href="#">
                                                <i class="fa fa-th text-yellow"></i>Supplier<span class="caret"></span>
                                            </a>
                                            <ul class="subtog dropdown-menu">
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/purchase_due/main"><i
                                                            class="fa fa-angle-double-right text-yellow"></i>Supplier Payment</a>
                                                </li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/purchase_due_statement"><i
                                                            class="fa fa-angle-double-right text-yellow"></i>Supplier
                                                        Ledger</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a class="test" href="#">
                                                <i class="fa fa-th text-purple"></i>Return<span class="caret"></span>
                                            </a>
                                            <ul class="subtog dropdown-menu">
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/manufacturer_return/main"><i
                                                            class="fa fa-angle-double-right text-purple"></i>Supplier Return</a></li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/manufacturer_return_list/main"><i
                                                            class="fa fa-angle-double-right text-purple"></i>Return Info.</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="
                                               <?php echo base_url(); ?>Show_form/purchase_order/main">
                                                <i class="fa fa-th text-blue"></i>
                                                <span>Purchase Order</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                       data-toggle="dropdown">Sales Part
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/sales/main">
                                                <i class="fa fa-th text-orange"></i>
                                                <span>Sales Product</span>
                                            </a>
                                        </li>
<!--                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/sales_warranty/main">
                                                <i class="fa fa-th text-aqua"></i>
                                                <span>Search Product</span>
                                            </a>
                                        </li>-->
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/sales_statement/main">
                                                <i class="fa fa-th text-maroon"></i>
                                                <span>Sales Statement</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a class="test" href="#">
                                                <i class="fa fa-th text-olive"></i>Client<span class="caret"></span>
                                            </a>
                                            <ul class="subtog dropdown-menu">
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/add_client/main">
                                                        <i class="fa fa-angle-double-right text-olive"></i>
                                                        <span>Insert Client Info.</span>
                                                    </a>
                                                </li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/sales_due/main"><i
                                                            class="fa fa-angle-double-right text-olive"></i>Client Payment</a>
                                                </li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/sales_due_statement"><i
                                                            class="fa fa-angle-double-right text-olive"></i>Client Ledger</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a class="test" href="#">
                                                <i class="fa fa-th text-fuchsia"></i>Return<span class="caret"></span>
                                            </a>
                                            <ul class="subtog dropdown-menu">
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/return_product/main"><i
                                                            class="fa fa-angle-double-right text-fuchsia"></i>Sales Return</a></li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/sales_return_info/main"><i
                                                            class="fa fa-angle-double-right text-fuchsia"></i>Return
                                                        Info.</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: wheat;" href="<?php echo base_url(); ?>Show_form/create_user/main">Create User</a>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: white;" href="<?php echo base_url(); ?>Log_in_out/logout">Logout</a>
                                </div>
                                <!--                        <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                                            <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                                               data-toggle="dropdown">Accounting Part
                                                                <span class="caret"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a class="test" href="#">
                                                                        <i class="fa fa-th text-red"></i>Income<span class="caret"></span>
                                                                    </a>
                                                                    <ul class="subtog dropdown-menu">
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/income/main"><i
                                                                                        class="fa fa-angle-double-right text-red"></i>Income Entry</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/income_head/main"><i
                                                                                        class="fa fa-angle-double-right text-red"></i>Create Income Head</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/search_income"><i
                                                                                        class="fa fa-angle-double-right text-red"></i>Search Income</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a class="test" href="#">
                                                                        <i class="fa fa-th text-blue"></i>Expense<span class="caret"></span>
                                                                    </a>
                                                                    <ul class="subtog dropdown-menu">
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/expense/main"><i
                                                                                        class="fa fa-angle-double-right text-blue"></i>Expense Entry</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/expense_head/main"><i
                                                                                        class="fa fa-angle-double-right text-blue"></i>Create Expense
                                                                                Head</a></li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/search_expense"><i
                                                                                        class="fa fa-angle-double-right text-blue"></i>Search
                                                                                Expense</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a href="<?php echo base_url(); ?>Show_form/ledger/main">
                                                                        <i class="fa fa-th text-lime"></i>
                                                                        <span>Ledger</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a href="<?php echo base_url(); ?>Show_form/report/main">
                                                                        <i class="fa fa-th text-aqua"></i>
                                                                        <span>Report</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a href="<?php echo base_url(); ?>Show_form/profit_loss/main">
                                                                        <i class="fa fa-th text-fuchsia"></i>
                                                                        <span>Product-wise Profit / Loss</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a href="<?php echo base_url(); ?>Show_form/create_salary_sheet/main">
                                                                        <i class="fa fa-th text-orange"></i>
                                                                        <span>Salary Payment</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                                    <a class="test" href="#">
                                                                        <i class="fa fa-th text-green"></i>Bank History<span class="caret"></span>
                                                                    </a>
                                                                    <ul class="subtog dropdown-menu">
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/create_bank_name/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i> Create Bank
                                                                                Name</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/bank_deposit/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i> Bank
                                                                                Deposit</a></li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/bank_withdraw/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i> Bank
                                                                                Withdraw</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/bank_report/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i> Report</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                                            <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                                               data-toggle="dropdown">HR Part
                                                                <span class="caret"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px;
                                                                            text-align: left;">
                                                                    <a class="test" href="#">
                                                                        <i class="fa fa-th text-yellow"></i>Employee Info.<span class="caret"></span>
                                                                    </a>
                                                                    <ul class="subtog dropdown-menu extra_right">
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/create_employee/main"><i
                                                                                        class="fa fa-angle-double-right text-yellow"></i>Insert Employee
                                                                                Info.</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/create_department/main"><i
                                                                                        class="fa fa-angle-double-right text-yellow"></i>Create
                                                                                Department</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/create_designation/main"><i
                                                                                        class="fa fa-angle-double-right text-yellow"></i>Create
                                                                                Designation</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu" style="margin: 10px; font-size: 15px;
                                                                            text-align: left;">
                                                                    <a class="test" href="#">
                                                                        <i class="fa fa-th text-green"></i>Attendance<span class="caret"></span>
                                                                    </a>
                                                                    <ul class="subtog dropdown-menu extra_right">
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/employee_attendance/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i>Employee
                                                                                Attendance</a>
                                                                        </li>
                                                                        <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                                            <a href="<?php echo base_url(); ?>Show_form/attendance_report/main"><i
                                                                                        class="fa fa-angle-double-right text-green"></i>Attendance
                                                                                Report</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>-->
                            <?php } ?>

                            <?php if ($user_type == "staff") { ?>
                                <div class="col-sm-2 col-xs-12" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/banner.jpg"  
                                         style="width: 80px; height: 40px; border-radius: 5px;"
                                         alt="Logo">
                                </div>
                                <div class="col-sm-3 col-xs-12" style="color: #066; text-align: center; padding: 8px 0px 0px 0px;">
                                    <a style="color: wheat;" href="<?php echo base_url(); ?>Log_in_out">Dashboard</a>
                                </div>
                                <div class="col-sm-3 col-xs-12" style="color: #066; text-align: center; padding: 8px 0px 0px 0px;">
                                    <a style="color: wheat; cursor: pointer;" class="dropdown-toggle" 
                                       data-toggle="dropdown">SELECT MENU<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $permission = explode('#', $this->session->ses_permission);
                                        foreach ($permission as $single_permission) {
                                            if (!empty($single_permission)) {
                                                ?>
                                                <?php if ($single_permission == 1) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_vehicle_type/main">
                                                            <i class="fa fa-plus-square text-yellow"></i>Create Transport Type</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 2) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_owner_user_unit/main">
                                                            <i class="fa fa-plus-square text-grey"></i>Create Owner/User Unit</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 3) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_papers_name/main">
                                                            <i class="fa fa-plus-square text-aqua"></i>Create Papers Name</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 4) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_product_type/main">
                                                            <i class="fa fa-plus-square text-olive"></i>Create Parts Category</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 5) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_parts_name/main">
                                                            <i class="fa fa-plus-square text-fuchsia"></i>Create Parts Name </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 6) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_supplier/main">
                                                            <i class="fa fa-plus-square text-yellow"></i>Create Supplier name </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 7) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_counter/main">
                                                            <i class="fa fa-plus-square text-green"></i>Create Counter name </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 8) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_root/main">
                                                            <i class="fa fa-plus-square text-orange"></i>Create Route Name</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 9) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_sub_root/main">
                                                            <i class="fa fa-plus-square text-orange"></i>Create Sub-route Name</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 10) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_coach/main">
                                                            <i class="fa fa-plus-square text-blue"></i>Create Coach No</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 11) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_bank/main">
                                                            <i class="fa fa-plus-square text-grey"></i>Create Bank Name</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 12) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/income_head/main"><i
                                                                class="fa fa-plus-square text-purple"></i>Create Head of Income</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 13) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/expense_head/main"><i
                                                                class="fa fa-plus-square text-lime"></i>Create Head of Expenditure</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 14) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/route_line_expenses/main"><i
                                                                class="fa fa-plus-square text-lime"></i>Line Expense Head</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 15) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_designation/main">
                                                            <i class="fa fa-plus-square text-red"></i>Create Designation</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 16) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_user/main">
                                                            <i class="fa fa-plus-square text-light-blue"></i>Create User</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 17) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/insert_staff/main">
                                                            <i class="fa fa-pencil-square-o text-light-blue"></i>Insert Staff Info.</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 18) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/vehicle_details/main">
                                                            <i class="fa fa-pencil-square-o text-red"></i>Insert Transport Info.</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 19) { ?>
                                                    <li class="dropdown-submenu" style="margin: 5px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/change_vehicle_info/main">
                                                            <i class="fa fa-pencil-square-o text-green"></i>Insert Change Transport Info.</a>
                                                    </li>
                                                <?php } ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding: 8px 0px 0px 0px;">
                                    <a style="color: wheat;" href="<?php echo base_url(); ?>Log_in_out/logout">Logout</a>
                                </div>
                                <div class="col-sm-2 col-xs-12" style="text-align: center; font-size: 15px;">
                                    <?php echo date('l'); ?><br><?php echo date('d-M-y'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 55px;"></div>
        <script>
            $('.sub_hide').on("click", function () {
                $('.subtog').hide();
            });

            $('.dropdown-submenu a.test').on("click", function (e) {
                $('.subtog').hide();
                $(this).next('ul').show();
                e.stopPropagation();
                e.preventDefault();
            });
        </script>