<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" class="no_print">
                    <form id="due_bill_info" action="<?php echo base_url() ?>View_data/due_bill_info" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; 
                               color: green; font-weight: bolder; text-align: center;">
                                Due Bill Information
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="area_id">Area Name</label>
                                    <select name="area_id" id="area_id" class="form-control">
                                        <option value="">Select Area</option>
                                        <?php
                                            foreach($areas as $area){
                                        ?>
                                        
                                        <option value="<?php echo $area->record_id ?>"><?php echo $area->area_name ?>></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="generate_month">Generate Month</label>
                                    <select name="generate_month" id="generate_month" class="form-control">
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
                    <select name="generate_year" id="generate_year" class="form-control">
                        <?php
                            $date = date('Y') + 1; 
                            for($year = 2015; $year<= $date; $year++){
                        ?>
                        <option <?php if($year == date('Y')) echo 'selected' ?> value="<?php echo $year ?>"><?php echo $year ?></option>
                        <?php } ?>
                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Search <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="view_table"></div>
            </section>
        </div>
    </section>
</aside>

<script>
    $("#due_bill_info").on("submit", function (e) {
        e.preventDefault();
        var url = "<?php echo base_url() ?>View_data/due_bill_info";
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: $(this).serialize(),
            success: function (response) {
                  //  console.log(response);
                 $("#view_table").html(response);
                 datatable();
            }
        });
    });
    function datatable() {
        $('#datatable').dataTable({
            //"info":false,
            "autoWidth": false,
            "order": false
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