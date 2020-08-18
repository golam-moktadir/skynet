<style>
    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" id="no_print1">
                    <div class="box-body" style="margin-top: 10px">
                        <div class="row">
                        <form id="bill_generate">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="invoice_no">Select Reference No.</label>
                                <select id="invoice_no" required name="invoice_no[]" multiple data-live-search=true class="form-control selectpicker"
                                        data-live-search="true" data-container="body">
                                    <?php if(isset($referance_no)): ?>
                                        <?php foreach($referance_no as $value): ?>
                                            <option value="<?= $value["invoice_no"] ?>"><?= $value["invoice_no"] ?></option>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <button type="submit" class="pull-left btn btn-success final_btn" 
                                        id="">Bill Generate <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <div id="show_invoice">
            </div>
        </div>
    </section>
</aside>

<script type="text/javascript">
        $("#bill_generate").on("submit",function(e){
            e.preventDefault();
            var url="<?php echo base_url(); ?>show_form/generate_bill";
            $.ajax({
                type:"post",
                url:url,
                dataType:"json",
                data:$(this).serialize(),
                success:function(data)
                {
                    $("#invoice_no").selectpicker("val",'');
                    $("#invoice_no").selectpicker("refresh");
                    if(data.msg=="success")
                    {
                        $("#show_invoice").html(data.result_data);
                    }else{
                        $("#show_invoice").html('<div class="alert alert-danger">Some Invoice Already Exit.</div>');
                    }
                }
            });
        });
</script>