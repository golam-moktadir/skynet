<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Dish Line & ISP Billing</title>
<link rel="Tab Icon" type="image/png" href="<?php echo base_url(); ?>assets/img/fab.jpg"/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="<?php echo base_url(); ?>adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>adminlte/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>assets/css/w3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/fixedHeader.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!--Live Search-->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.js"></script>
</head>
 <body>
    <div class="container-fluid" style="position: fixed; z-index: 50; width: 100%;">
        <div class="row">
            <div class="navbar navbar-inverse" style="background-color: #077FC9;
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
                    <?php
                    $view_menu = $this->session->ses_view_menu_id;
                    $view_id = explode(",", $view_menu);
                    ?>
                    <div class="collapse navbar-collapse row" style="padding: 8px; font-size: 16px; font-weight: bold;">

                            <div class="col-sm-1 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                <a class="sub_hide" style="color: white;" href="<?php echo base_url(); ?>Log_in_out">Dashboard</a>
                            </div>
                            <div class="col-sm-2 col-xs-12"
                                 style="color: #066; text-align: center; padding-top: 3px; padding-right: 0px;">
                                <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                   data-toggle="dropdown">Create Options<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php if(in_array("1", $view_id) || in_array("all", $view_id)){ ?>
                                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                            <a href="<?php echo base_url(); ?>Show_form/branch_name"><i
                                                    class="fa fa-th text-red"></i> Company Name</a>
                                        </li>
                                    <?php } ?>
                                    
                                    <?php if(in_array("2", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/service_type"><i
                                                class="fa fa-th text-purple"></i> Service Type</a>
                                    </li>
                                    <?php } ?>
                                    
                                    <?php if(in_array("3", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/package_info"><i
                                                class="fa fa-th text-yellow"></i> Package Info</a>
                                    </li>
                                    <?php } ?>
                                    
                                    <?php if(in_array("4", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/area_info"><i
                                                class="fa fa-th text-blue"></i> Area Info</a>
                                    </li>
                                    <?php } ?>
                                    
                                    <?php if(in_array("5", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/expense_head"><i
                                                class="fa fa-th text-green"></i> Expense Head</a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("5", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/income_head"><i
                                                class="fa fa-th text-purple"></i> Income Head</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            
                            <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                   data-toggle="dropdown">Insert Options
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php if(in_array("6", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/client_info">
                                            <i class="fa fa-th text-yellow"></i>
                                            <span>Dish Client Info</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("7", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/reseller_info">
                                            <i class="fa fa-th text-green"></i>
                                            <span>ISP Client Info</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("8", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/staff_info">
                                            <i class="fa fa-th text-red"></i>
                                            <span>Staff Info</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("9", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/expense">
                                            <i class="fa fa-th text-purple"></i>
                                            <span>Expense Entry</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("9", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/income">
                                            <i class="fa fa-th text-green"></i>
                                            <span>Income Entry</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-sm-2 col-xs-12"
                                 style="color: #066; text-align: center; padding-top: 3px; padding-right: 0px;">
                                <a style="color: wheat; cursor: pointer;" class="dropdown-toggle sub_hide"
                                   data-toggle="dropdown">Generate Report<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php if(in_array("10", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/bill_generate"><i
                                                class="fa fa-th text-olive"></i> Bill Generate</a>
                                    </li>
                                    <?php } ?>
                                    <?php if(in_array("11", $view_id) || in_array("all", $view_id)){ ?>
                                    <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                                        <a href="<?php echo base_url(); ?>Show_form/invoice_generate"><i
                                                class="fa fa-th text-purple"></i> Bill Collection</a>
                                    </li>
                                    <?php } ?>
                        <?php if(in_array("12", $view_id) || in_array("all", $view_id)){ ?>
                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                            <a href="<?php echo base_url(); ?>Show_form/balance_sheet"><i
                                    class="fa fa-th text-yellow"></i> Balance Sheet</a>
                        </li>
                                    <?php } ?>
                        <?php if(in_array("12", $view_id) || in_array("all", $view_id)){ ?>
                        <li class="dropdown-submenu" style="margin: 10px; font-size: 15px; text-align: left;">
                            <a href="<?php echo base_url(); ?>Show_form/due_bill_info"><i
                                    class="fa fa-th text-red"></i> Due Bill Info</a>
                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php if(in_array("13", $view_id) || in_array("all", $view_id)){ ?>
                            <div class="col-sm-2 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                <a style="color: wheat;" href="<?php echo base_url(); ?>Show_form/role_setting">User Setting</a>
                            </div>
                            <?php } ?>
                            <div class="col-sm-1 col-xs-12" style="color: #066; text-align: center; padding-top: 3px;">
                                <a style="color: white;" href="<?php echo base_url(); ?>Log_in_out/logout">Logout</a>
                            </div>
                            <div class="col-sm-2 col-xs-12" style="text-align: center; font-size: 15px;">
                                <?php echo date('l'); ?><br><?php echo date('d-M-y'); ?>
                            </div>
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