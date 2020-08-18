<p style="font-size: 18px;">Sold Product List</p>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="text-align: center;">Product Details</th>
        <th style="text-align: center;">Quantity</th>
        <th style="text-align: center;">Action</th>
    </tr>
    </thead>
    <tbody><?php
    $total = 0;
    $count = 0;
    foreach ($return_product as $single_value) {
        $count++;
        $invoice = $single_value->invoice_no;

        ?>
        <tr>
            <td style="text-align: left; white-space: nowrap;">
                                            <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                            <b>Section: </b><?php echo $single_value->section; ?><br>
                                            <b>Parts Name: </b><?php echo $single_value->product_name; ?><br>
                                            <b>Parts No: </b><?php echo $single_value->parts_no; ?>
                                        </td>
            <td style="text-align: center;">
                <input type="text" class="form-control" max="<?php echo $single_value->product_qty ?>" value="<?php echo $single_value->product_qty; ?>" style="width: 60%;"
                        id="qty<?php echo $count; ?>">
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
            <td  colspan="3" style="text-align: center;">
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

    function cancel_full_row(record_id) {
        var post_data = {
            'record_id': record_id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/challan_return_product_full_row",
            data: post_data,
            success: function (data) {
                $('#challan_product').html(data);
            }
        });
    }

    function update_full_row(record_id, count) {
        var qty = $('#qty' + count).val();
        var total_price=0;
        var post_data = {
            'record_id': record_id, 'product_qty': qty, 'total_price': total_price,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/challan_update_product_full_row",
            data: post_data,
            success: function (data) {
                alert('Updated Successfully');
                $('#challan_product').html(data);
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
            url: "<?php echo base_url(); ?>Get_ajax_value/challan_return_product",
            data: post_data,
            success: function (data) {
                $('#challan_product').html(data);
            }
        });
    }
</script>