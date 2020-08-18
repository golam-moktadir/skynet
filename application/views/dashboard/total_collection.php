<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <?php
                $view_menu = $this->session->ses_view_menu_id;
                $insert_menu = $this->session->ses_insert_menu_id;
                $edit_menu = $this->session->ses_edit_menu_id;
                $delete_menu = $this->session->ses_delete_menu_id;
                $view_id = explode(",", $view_menu);
                $insert_id = explode(",", $insert_menu);
                $edit_id = explode(",", $edit_menu);
                $delete_id = explode(",", $delete_menu);
                ?>
                <?php if (in_array("all", $view_id)) { ?>
                    <style>
                        @media print {
                            @page 
                            {
                                size: A4 landscape;   /* auto is the current printer page size */
                                margin: -5mm 0mm 0mm 10mm;
                            }
                            textarea {
                                height: auto;
                                overflow: visible!important;
                                page-break-inside: avoid !important;
                            } 
                            html
                            {
                                background-color: #FFFFFF; 
                                margin: 0px;  /* this affects the margin on the html before sending to printer */
                            }
                            .no_print {
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
                        /*     table.table-bordered{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }
                            table.table-bordered > thead > tr > th{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }
                            table.table-bordered > tbody > tr > td{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }*/
                    </style>
                    <button  id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light no_print">
                        <i class="fa fa-print"></i>
                    </button>
                    <table id="datatable" class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">SL</th>
                                <th style="text-align: center;">Invoice</th>
                                <th style="text-align: center;">Paid_Date</th>
                        <!--        <th style="text-align: center;">Branch</th>
                                <th style="text-align: center;">Service</th>-->
                                <th style="text-align: center;">Dish/ISP_Client</th>
                                <!--<th style="text-align: center;">Area</th>-->
                                <th style="text-align: center;">Mobile</th>
                                <!-- <th style="text-align: center;">Address</th> -->
<!--                                <th style="text-align: center;">Payable</th>
                                <th style="text-align: center;">Discount</th>-->
                                <th style="text-align: center;">Sub_Total</th>
                                <th style="text-align: center;">Paid</th>
<!--                                <th style="text-align: center;">Due</th>
                                <th style="text-align: center;">Advance</th>-->
                                <!--<th style="text-align: center;">Remarks</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($all_value as $single_value) {
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;">
<!--                                        <button class="btn btn-info no_print" onclick="show_invoice(<?php echo $single_value->record_id; ?>)">
                                            <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                        </button>-->
                                        <?php echo " INV" . $single_value->record_id; ?>
                                    </td>
                                    <td style="text-align: center;"><?php echo $single_value->paid_date; ?></td>

            <!--                <td style="text-align: center;"><?php echo $single_value->branch_name; ?></td>
                            <td style="text-align: center;"><?php echo $single_value->service_type; ?></td>-->
                                    <td style="text-align: center;">
                                        <?php
                                        if ($single_value->client_reseller == "Client") {
                                            echo $single_value->client_name . " (" . $single_value->client_id . ")";
                                        } else {
                                            echo $single_value->reseller_name . " (" . $single_value->reseller_id . ")";
                                        }
                                        ?>
                                    </td>
                                    <!--<td style="text-align: center;"><?php echo $single_value->area_name; ?></td>-->
                                    <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                    <!-- <td style="text-align: center;"><?php echo $single_value->address; ?></td> -->
<!--                                    <td style="text-align: center;"><?php echo $single_value->due_mon_amount; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->discount; ?></td>-->
                                    <td style="text-align: center;"><?php echo $single_value->sub_total; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->paid_amount; ?></td>
<!--                                    <td style="text-align: center;"><?php echo $single_value->due; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->advance; ?></td>-->
                                        <!--                <td style="text-align: center;"  class="no_print">
                                    <?php if (in_array("13", $edit_id) || in_array("all", $edit_id)) { ?>
                                                                                    <button class="btn btn-info" onclick="edit_data('<?php echo $single_value->record_id; ?>')">
                                                                                        <i class="fa fa-edit"></i>
                                                                                    </button>
                                    <?php } ?>
                                    <?php if (in_array("13", $delete_id) || in_array("all", $delete_id)) { ?>
                                                                                    <button class="btn btn-danger" onclick="delete_data('<?php echo $single_value->record_id; ?>')">
                                                                                        <i class="fa fa-trash-o"></i>
                                                                                    </button> 
                                    <?php } ?>
                                    <?php if (!in_array("13", $edit_id) && !in_array("13", $delete_id) && !in_array("all", $edit_id) && !in_array("all", $delete_id)) { ?>
                                                                                    <b>N/A</b>
                                    <?php } ?>
                                                        </td>-->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <!--<div class="row">
                        <div class="col-xs-6" style="text-align: left;">
                            <br>
                            <b>In-charge Signature ___________________________</b>
                        </div>
                        <div class="col-xs-6"  style="text-align: right;">
                            <br>
                            <b>Cashier Signature ___________________________</b>
                        </div> 
                    </div>-->
                <?php } ?>
            </section>
        </div>
    </section>
</aside>