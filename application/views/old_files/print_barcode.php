<?php
foreach($one_value as $one_info){
    $record_id = $one_info->record_id;
    $product_name = $one_info->product_type.': '.$one_info->product_name ." [ID: RTB" .sprintf('%04d', $one_info->record_id). "]";
}
?>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div id="no_print1" style="color: black;">
                    <div class="box-body">
                        <p style="font-size: 20px;">Print Barcode</p>
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12" style="text-align: left;">
                                <b class="text-primary" id="available_qty"><?php echo $product_name;?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                <label for="product_id">Product ID</label>
                                <input type="hidden" class="form-control" id="product_id" placeholder=""
                                       name="product_id" readonly value="<?php echo $record_id; ?>">
                            </div>
                            <div class="form-group col-sm-3 col-xs-12">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" placeholder=""
                                       name="quantity">
                            </div>
                            <div class="box-footer col-sm-3 clearfix">
                                <button style="margin-top: 27px" type="button" id="generate"
                                        class="pull-left btn btn-success">Generate &nbsp;<i
                                            class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="show_info"></div>
            </section>
        </div>
    </section>
</aside>

<style>
    .zoom {
        width: 80px;
        height: 80px;
    }
    .zoom:hover {
        -ms-transform: scale(2.5); /* IE 9 */
        -webkit-transform: scale(2.5); /* Safari 3-8 */
        transform: scale(2.5);
    }
</style>


<script type="text/javascript">
    $('#generate').on('click', function (e) {
        var product_id = $('#product_id').val();
        var quantity = $('#quantity').val();

        var post_data = {
            'product_id': product_id, 'quantity': quantity,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        console.log(post_data);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/generate_barcode",
            data: post_data,
            success: function (data) {
                
                $('#show_info').html(data);
            }
        });
    });
</script>