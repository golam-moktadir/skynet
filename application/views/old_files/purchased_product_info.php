<p style="font-size: 20px; color: black;">Purchased Product List</p>
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">Product Details</th>
<!--            <th style="text-align: center;">Purchase Price (per Unit)</th>-->
            <th style="text-align: center;">Quantity</th>
<!--            <th style="text-align: center;">Total</th>-->
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total = 0;
        $invoice = '';
        $count = 0;
        if (!empty($return_product)) {
            foreach ($return_product as $single_value) {
                $count++;
//                $total += $single_value->sub_total;
                $invoice = $single_value->po_no;
                ?>
                <tr>
                    <td style="text-align: left; white-space: nowrap;">
                        <?php echo $single_value->machine_category; ?>
                        <b>Category: </b><?php echo $single_value->parts_name; ?><br>
                        <b>Supplier: </b><?php echo $single_value->supplier; ?>
                    </td>
<!--                    <td style="text-align: center;"><?php echo $single_value->purchase_price; ?></td>-->
                    <td style="text-align: center;">
                        <input type="text" value="<?php echo $single_value->quantity; ?>" style="width: 90%;"
                               id="qty<?php echo $count; ?>"> Pcs
                    </td>
<!--                    <td style="text-align: center;">
                        <input type="text" value="<?php echo $single_value->total_price; ?>" style="width: 90%;"
                               min="0" id="total_price<?php echo $count; ?>" readonly>
                    </td>-->
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
        }
        if (!empty($return_product)) {
            ?>
            <tr>
                <td colspan="2" style="text-align: right;">Total</td>
<!--                <td style="text-align: center;">
                    <input type="number" value="<?php echo $total; ?>" style="width: 100%;"
                           max="<?php echo $total; ?>" min="0" id="total" readonly>
                </td>-->
                <td colspan="4" style="text-align: center;">
                    <button type="button" style="margin: 5px;" class="btn btn-danger"
                            onclick="cancel('<?php echo $single_value->po_no; ?>')">
                        Cancel
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    function total_price(price, count) {
        var total_price = price * $('#qty' + count).val();
        var diff = $('#total_price' + count).val() - total_price;
        var newTotal = $('#total').val() - diff;
        $('#total_price' + count).val(total_price);
        $('#total').val(newTotal);
    }

    function cancel_full_row(record_id) {
        var post_data = {
            'record_id': record_id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/return_to_manufacture_full_row",
            data: post_data,
            success: function (data) {
                $('#purchased_product').html(data);
            }
        });

    }

    function update_full_row(record_id, count) {
        var qty = $('#qty' + count).val();
        var post_data = {
            'record_id': record_id, 'product_qty': qty, 
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/return_to_manufacture_update_full_row",
            data: post_data,
            success: function (data) {
                alert('Updated Successfully');
                $('#purchased_product').html(data);
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
            url: "<?php echo base_url(); ?>Get_ajax_value/return_to_manufacture",
            data: post_data,
            success: function (data) {
                $('#purchased_product').html(data);
            }
        });
    }
</script>