<p style="font-size: 18px;">Sold Product List</p>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="text-align: center;">Product Details</th>
        <th style="text-align: center;">Unit Price</th>
        <th style="text-align: center;">Quantity</th>
        <th style="text-align: center;">Sub Total</th>
        <th style="text-align: center;">Action</th>
    </tr>
    </thead>
    <tbody><?php
    $total = 0;
    $count = 0;
    foreach ($return_product as $single_value) {
        $count++;
        $invoice = $single_value->invoice_no;
        $sub_total=($single_value->price_per_unit*$single_value->product_qty)-($single_value->product_qty*($single_value->price_per_unit*$single_value->ind_discount/100));
        $total += $sub_total;

        ?>
        <tr>
            <td style="text-align: left; white-space: nowrap;">
                                            <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                            <b>Section: </b><?php echo $single_value->section; ?><br>
                                            <b>Parts Name: </b><?php echo $single_value->product_name; ?><br>
                                            <b>Parts No: </b><?php echo $single_value->parts_no; ?>
                                        </td>
            <td style="text-align: center;"><?php echo $single_value->price_per_unit . '<br>' . '[' . $single_value->sales_type . ']'; ?></td>
            <td style="text-align: center;">
                <input type="text" class="form-control" value="<?php echo $single_value->product_qty; ?>" style="width: 60%;"
                       onkeyup="sub_total(<?php echo $single_value->price_per_unit; ?>,
                       <?php echo $count; ?>,<?php echo $single_value->ind_discount; ?>)" id="qty<?php echo $count; ?>">
            </td>
            <td style="text-align: center;">
                <input type="number" class="form-control total_price" value="<?php echo $sub_total; ?>" style="width: 100%;"
                       max="<?php echo $single_value->product_qty; ?>" min="0"
                       id="total_price<?php echo $count; ?>" readonly>
            </td>
            <td style="text-align: center;">
                <button type="button" style="margin: 5px;" class="btn btn-info"
                        onclick="update_full_row('<?php echo $single_value->record_id; ?>', '<?php echo $count; ?>')">
                    Update
                </button>
                <button type="button" style="margin: 5px;" class="btn btn-danger"
                        onclick="cancel_full_row('<?php echo $single_value->record_id; ?>')">
                    Cancel
                </button>
            </td>
        </tr>
        <?php
    }
    if (!empty($return_product)) {
        ?>
        <tr>
            <td colspan="3" style="text-align: right;">Total</td>
            <td style="text-align: center;">
                <input type="number" value="<?php echo $total; ?>" style="width: 100%;"
                       max="<?php echo $total; ?>" min="0" id="total" readonly>
            </td>
            <td style="text-align: center;">
                <button type="button" style="margin: 5px;" class="btn btn-danger"
                        onclick="cancel('<?php echo $single_value->invoice_no; ?>')">
                    Cancel Invoice
                </button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>


<script type="text/javascript">
    function sub_total(price, count,discount) {
        var total_price = price * $('#qty' + count).val()-$('#qty' + count).val()*(price*discount/100);
        // var diff = $('#total_price' + count).val() - total_price;
        // var newTotal = $('#total').val() - diff;
        $('#total_price' + count).val(total_price);
        var newTotal=0;
        $(".total_price").each(function(){
            newTotal+=parseFloat($(this).val());
        });
        $('#total').val(newTotal);
    }

    function cancel_full_row(record_id) {
        var post_data = {
            'record_id': record_id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/return_product_full_row",
            data: post_data,
            success: function (data) {
                $('#sold_product').html(data);
            }
        });
    }

    function update_full_row(record_id, count) {
        var qty = $('#qty' + count).val();
        var total_price = $('#total_price' + count).val()
        var post_data = {
            'record_id': record_id, 'product_qty': qty, 'total_price': total_price,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/update_product_full_row",
            data: post_data,
            success: function (data) {
                console.log(data);
                alert('Updated Successfully');
                $('#sold_product').html(data);
            }
        });

    }

    function cancel(invoice) {
        var post_data = {
            'invoice_no': invoice,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/return_product",
            data: post_data,
            success: function (data) {
                $('#sold_product').html(data);
            }
        });
    }
</script>