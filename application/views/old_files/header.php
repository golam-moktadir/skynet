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
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a style="" href="<?php echo base_url(); ?>Show_form/create_user/main"><i
                                                    class="fa fa-th text-blue"></i> Create User</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                       data-toggle="dropdown">Inventory Part
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/add_product/main">
                                                <i class="fa fa-th text-green"></i>
                                                <span>Add Product</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/purchase_product/main">
                                                <i class="fa fa-th text-green"></i>
                                                <span>Insert Product Info.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>avarage-price">
                                                <i class="fa fa-th text-green"></i>
                                                <span>Average Price</span>
                                            </a>
                                        </li>
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
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/service_bill">
                                                <i class="fa fa-th text-blue"></i>
                                                <span>Service Bill</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/sales_statement/main">
                                                <i class="fa fa-th text-maroon"></i>
                                                <span>Sales Statement</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/sales_report/main">
                                                <i class="fa fa-th text-maroon"></i>
                                                <span>Present Report</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a class="test" href="#">
                                                <i class="fa fa-th text-olive"></i>Common Bill<span class="caret"></span>
                                            </a>
                                            <ul class="subtog dropdown-menu">
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/bill">
                                                        <i class="fa fa-angle-double-right text-olive"></i>
                                                        <span>Bill Generate</span>
                                                    </a>
                                                </li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/all_bill"><i
                                                            class="fa fa-angle-double-right text-olive"></i>Show Bill</a>
                                                </li>
                                            </ul>
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
                                                    <a href="<?php echo base_url(); ?>Show_form/return_challan_product"><i
                                                            class="fa fa-angle-double-right text-fuchsia"></i>Challan Return</a></li>
                                                <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                    <a href="<?php echo base_url(); ?>Show_form/sales_return_info/main"><i
                                                            class="fa fa-angle-double-right text-fuchsia"></i>Return
                                                        Info.</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/profit_loss/main">
                                                <i class="fa fa-th text-maroon"></i>
                                                <span>Profit & Loss Info</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: wheat;" href="<?php echo base_url(); ?>Show_form/auditors">Auditors</a>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                    <a style="color: white;" href="<?php echo base_url(); ?>Log_in_out/logout">Logout</a>
                                </div>
                            <?php } ?>

                            <?php if ($user_type == "staff") { ?>
                                <div class="col-sm-2 col-xs-12" style="text-align: center;">
                                    <a class="sub_hide" style="color: white;" href="<?php echo base_url(); ?>Log_in_out"><img src="<?php echo base_url(); ?>assets/img/logo.jpg"  
                                                                                                                              style="width: 100px; height: 40px; border-radius: 5px;"
                                                                                                                              alt="Logo"></a>
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
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_product_type/main"><i
                                                                class="fa fa-th text-olive"></i> Machine Category</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 2) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_section/main"><i
                                                                class="fa fa-th text-purple"></i> Section</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 3) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_product_name/main"><i
                                                                class="fa fa-th text-yellow"></i> Parts Name</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 4) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/create_manufacture_company/main"><i
                                                                class="fa fa-th text-blue"></i> Supplier</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 5) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/purchase_product/main">
                                                            <i class="fa fa-th text-green"></i>
                                                            <span>Insert Product Info.</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 6) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/purchase_statement/main">
                                                            <i class="fa fa-th text-teal"></i>
                                                            <span>Purchase Statement</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 7) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/product_inout/main">
                                                            <i class="fa fa-th text-black"></i>
                                                            <span>Product In & Out Info.</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 8) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="
                                                           <?php echo base_url(); ?>Show_form/delivered_product/main">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Delivered Product</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 9) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/purchase_due/main"><i
                                                                class="fa fa-angle-double-right text-yellow"></i>Supplier Payment</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 10) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/purchase_due_statement"><i
                                                                class="fa fa-angle-double-right text-yellow"></i>Supplier
                                                            Ledger</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 11) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/manufacturer_return/main"><i
                                                                class="fa fa-angle-double-right text-purple"></i>Supplier Return</a></li>
                                                    <?php } ?>
                                                    <?php if ($single_permission == 12) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/manufacturer_return_list/main"><i
                                                                class="fa fa-angle-double-right text-purple"></i>Supplier Return Info.</a>
                                                    </li>
                                                <?php } ?>

                                                <?php if ($single_permission == 20) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="
                                                           <?php echo base_url(); ?>Show_form/purchase_order/main">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Purchase Order</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 13) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/sales/main">
                                                            <i class="fa fa-th text-orange"></i>
                                                            <span>Sales Product</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 26) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/service_bill">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Service Bill</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 14) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/sales_statement/main">
                                                            <i class="fa fa-th text-maroon"></i>
                                                            <span>Sales Statement</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 24) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/bill">
                                                            <i class="fa fa-th text-maroon"></i>
                                                            <span>Bill Generate</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 25) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/all_bill">
                                                            <i class="fa fa-th text-maroon"></i>
                                                            <span>Show Bill</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 15) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/add_client/main">
                                                            <i class="fa fa-angle-double-right text-olive"></i>
                                                            <span>Insert Client Info.</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 16) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/sales_due/main"><i
                                                                class="fa fa-angle-double-right text-olive"></i>Client Payment</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 17) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/sales_due_statement"><i
                                                                class="fa fa-angle-double-right text-olive"></i>Client Ledger</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 18) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/return_product/main"><i
                                                                class="fa fa-angle-double-right text-fuchsia"></i>Sales Return</a></li>
                                                    <?php } ?>
                                                <?php if ($single_permission == 26) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/return_challan_product"><i
                                                                class="fa fa-angle-double-right text-fuchsia"></i>Challan Return</a></li>
                                                    <?php } ?>
                                                    <?php if ($single_permission == 19) { ?>
                                                    <li style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="<?php echo base_url(); ?>Show_form/sales_return_info/main"><i
                                                                class="fa fa-angle-double-right text-fuchsia"></i>Return
                                                            Info.</a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 21) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="
                                                           <?php echo base_url(); ?>Show_form/add_product/main">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Add Product</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 22) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="
                                                           <?php echo base_url(); ?>avarage-price">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Avarage Price</span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($single_permission == 23) { ?>
                                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                                        <a href="
                                                           <?php echo base_url(); ?>Show_form/profit_loss/main">
                                                            <i class="fa fa-th text-blue"></i>
                                                            <span>Profit & Loss Info</span>
                                                        </a>
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