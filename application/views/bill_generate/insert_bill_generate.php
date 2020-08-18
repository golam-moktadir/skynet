<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
        cursor: pointer;
    }
    #img{
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    #img img{
        height:64px;
        width:64px;
    }

</style>
<aside>
 <section class="content" style="padding: 10px;">
  <div class="row">
   <section class="col-xs-12 connectedSortable">
    <div id="overlay">
        <div id="img">
            <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="">
        </div>
    </div>
    <div style="color: black;" class="no_print">
     <form id="bill_form" method="post" action="<?php echo base_url() ?>Insert_data/bill_generate">
      <div class="box-body">
        <p style="font-size: 20px; margin: 0px; padding: 0px; 
           color: green; font-weight: bolder; text-align: center;">
            Welcome to Bill Generate Options
        </p>
        <div class="row">
            <div class="form-group col-sm-2 col-xs-12">
                <label for="client_reseller">Dish Client / ISP Client</label>
                <select name="client_reseller" id="client_reseller" class="form-control selectpicker"
                        data-live-search="true">
                    <option value="">-- Select --</option>
                    <option value="Client">Dish Client</option>
                    <option value="Reseller">ISP Client</option>
                </select>
            </div>
            <div class="form-group col-sm-1 col-xs-12" style="margin-top: 30px; display: none;" id="s_all_dish">
                <input type="radio" id="s_all_dish_btn">
                <label>Select All</label>
            </div>
            <div class="form-group col-sm-1 col-xs-12" style="margin-top: 30px; display: none;" id="s_all_isp">
                <input type="radio" id="s_all_isp_btn">
                <label>Select All</label>
            </div>
            <div class="form-group col-sm-3 col-xs-12" id="client_field" style="display: none;">
                <label for="client_list">Dish Client</label>
                <select name="client_list[]" id="client_list" class="form-control selectpicker"
                        data-live-search="true" multiple>
                            <?php 
                                $count = 1; 
                                foreach ($all_client as $info) { 
                            ?>
                        <option value="<?php echo $info->record_id; ?>">
                            <?php echo $count++.") ".$info->name . " (" . $info->record_id . ")"; ?>
                        </option>
                            <?php 
                                } 
                            ?>
                </select>
            </div>
            <div class="form-group col-sm-3 col-xs-12" id="reseller_field" style="display: none;">
                <label for="reseller_list">ISP Client</label>
                <select name="reseller_list[]" id="reseller_list" class="form-control selectpicker"
                        data-live-search="true" multiple>
                            <?php 
                                $count = 1; 
                                foreach ($all_reseller as $info) { 
                            ?>
                        <option value="<?php echo $info->record_id; ?>">
                            <?php echo $count++.") ".$info->name . " (" . $info->record_id . ")"; ?>
                        </option>
                            <?php 
                                } 
                            ?>
                </select>
            </div>
            <div class="form-group col-sm-2 col-xs-12">
                <label for="generate_month">Generate Month</label>
                <select name="generate_month" id="generate_month" class="form-control selectpicker"
                        data-live-search="true">
                    <option selected value="<?php echo date('F'); ?>"><?php echo date('F'); ?></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="form-group col-sm-2 col-xs-12">
                <label for="generate_year">Generate Year</label>
                <select name="generate_year" id="generate_year" class="form-control selectpicker">
                    <?php
                        $date = date('Y') + 1;
                        for($year = 2015; $year <= $date; $year++){
                    ?>
                    <option <?php if($year == date('Y')) echo 'selected' ?> value="<?php echo $year ?>"><?php echo $year ?></option>
                <?php } ?>
                    
                </select>
            </div>
            <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px;">
                <button type="submit" class="pull-left btn btn-success">Insert <i
                        class="fa fa-arrow-circle-right"></i></button>
            </div>
       </div>
      </div>
     </form>
    </div>

    <div>
        <div class="box-header">
            <div style="text-align: right; padding-right: 27px;" class="no_print">
                <button  id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light">
                    <i class="fa fa-print"></i>
                </button>
            </div>
            <p style="font-size: 20px; margin: 0px; padding: 0px; 
               color: purple; font-weight: bolder; text-align: center;">
                Generated All Bill Info
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
    $("#client_reseller").on("change paste keyup", function () {
        var client_reseller = $("#client_reseller").val();
        //alert(service_type);
        if (client_reseller === "Client") {
            $("#s_all_dish").show();
            $("#s_all_isp").hide();
            $("#s_all_isp_btn").prop('checked', false);
            $("#client_field").show();
//                 $('#client_list option').prop('selected', true);
            $("#client_list").selectpicker('refresh');
            $('#reseller_list').val("");
            $("#reseller_list").selectpicker('refresh');
            $("#reseller_field").hide();
        } else if (client_reseller === "Reseller") {
            $("#s_all_isp").show();
            $("#s_all_dish").hide();
            $("#s_all_dish_btn").prop('checked', false);
            $("#reseller_field").show();
//                 $('#reseller_list option').prop('selected', true);
            $("#reseller_list").selectpicker('refresh');
            $('#client_list').val("");
            $("#client_list").selectpicker('refresh');
            $("#client_field").hide();
        } else {
            $("#s_all_dish").hide();
            $("#s_all_isp").hide();
            $("#s_all_isp_btn").prop('checked', false);
            $("#s_all_dish_btn").prop('checked', false);
            $('#client_list').val("");
            $("#client_list").selectpicker('refresh');
            $("#client_field").hide();
            $('#reseller_list').val("");
            $("#reseller_list").selectpicker('refresh');
            $("#reseller_field").hide();
        }
    });
    $("#s_all_dish_btn").on("click", function (e) {
        $('#s_all_dish_btn option').prop('checked', true);
        $('#client_list option').prop('selected', true);
        $("#client_list").selectpicker('refresh');
    });
    $("#s_all_isp_btn").on("click", function (e) {
        $('#s_all_isp_btn option').prop('checked', true);
        $('#reseller_list option').prop('selected', true);
        $("#reseller_list").selectpicker('refresh');
    });
    $("#bill_form").on("submit", function (e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
        var client_reseller =$("#client_reseller").val();
        var client_list =$("#client_list").val();
        var reseller_list = $("#reseller_list").val();
        var generate_month = $("#generate_month").val();
        var generate_year = $("#generate_year").val();
        var url = "<?php echo base_url() ?>Insert_data/bill_generate";

        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {'client_reseller': client_reseller, 'generate_month': generate_month, 'generate_year': generate_year, 
                'client_list': client_list, 'reseller_list': reseller_list
            },
            beforeSend: function () {
                $("#overlay").show();
            },
           success: function(response) {
               console.log(response);
                $("#overlay").hide();
                $('#client_list').val("");
                $('#reseller_list').val("");
                $('#client_reseller').val("");
                $("#client_list").selectpicker('refresh');
                $("#reseller_list").selectpicker('refresh');
                $("#client_reseller").selectpicker('refresh');
                $("#bill_form")[0].reset();
                alert(response);
                view();
           }
       });
      }
    });

    function delete_data(id) {
        if (confirm("Are you sure?")) {
            var url = "<?php echo base_url() ?>Delete_data/bill_generate";
            $.ajax({
                url: url,
                type: "post",
                dataType: "json",
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

    function view() {
        $.ajax({
            url: "<?php echo base_url() ?>View_data/bill_generate",
            dataType: "json",
            beforeSend: function () {
                $("#overlay").show();
            },
            success: function (data) {
                $("#overlay").hide();
                $("#view_table").html(data);
                datatable();
            }
        });
    }

    function datatable() {
        $('#datatable').dataTable({
            //"info":false,
            "autoWidth": false,
            "order": false,
             "oSearch": {"bSmart": false}
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