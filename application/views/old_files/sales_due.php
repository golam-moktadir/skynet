<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Payment Successful";
} elseif ($msg == "edit") {
    $msg = "Edited Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
}
?>
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
<style>

    .content{ padding-top: 0px; margin-top: 0px;}
    .form-group{ margin-bottom: 5px;}
    .final_btn{margin-top: 27px; margin-bottom: 8px;}
    .table tbody tr:hover td, .table tbody tr:hover th {background-color: #76e094;}
</style>
<aside>
<div id="overlay">
    <div id="img">
        <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="">
    </div>
</div>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black;" id="no_print1">
                    <div class="box-body">
                        <p style="font-size: 20px;">Client Payment</p>
                        <div class="row">
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="search_client">Client</label>
                                <select name="search_client" id="search_client" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                    <?php foreach ($all_client as $info) { ?>
                                        <option value="<?php echo $info->name."#".$info->record_id; ?>">
                                            <?php echo "$info->name[ID: $info->record_id]"; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <label for="chalan">Invoice/Challan No.</label>
                                <select name="chalan" id="chalan" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">-- Select --</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 col-xs-12">
                                <button type="button" class="pull-left btn btn-info" style="margin-top: 24px; width: 150px;"
                                        id="search_btn">Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info"><?php for($i=1;$i<=100;$i++){echo "<br>";} ?></div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
     $('#search_client').on('change', function (e) {
        var client_id = $(this).val();
        var post_data = {
            'client_id': client_id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_sales_chalan",
            data: post_data,
            datatype:'json', 
            beforeSend: function() {
                $("#overlay").fadeIn();
            },
            success: function (data) {
                $('#chalan').find('option').remove();
                if(data!=null)
                {
                    $.each(JSON.parse(data),function(key, value)
                    {
                        $('#chalan').append('<option value=' + value + '>' + value + '</option>'); // return empty
                       
                    });
                    $(".selectpicker").selectpicker("refresh");
                }
                $("#overlay").fadeOut();
            },
            complete:function(){
                $("#overlay").fadeOut();
            }
        });
    });
    $('#search_btn').on('click', function (e) {
        var search_client = $('#search_client').val();
        var chalan = $('#chalan').val();
        var post_data = {
            'search_client': search_client,
            'chalan': chalan,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_sales_due",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    });
</script>