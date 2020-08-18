
<div style="width: 98%; overflow-x: scroll; color: black;">
    <table id="pagination_search" class="table table-bordered table-hover list_table">
        <thead>
            <tr>
                <th style="text-align: center;">Parts No.</th>
                <th style="text-align: center;">Parts Name</th>
                <th style="text-align: center;">Supplier</th>
                <th style="text-align: center;">PO No.</th>
                <th style="text-align: center;">Unit Price</th>
                <th style="text-align: center;">After Discount U.P</th>
                <th style="text-align: center;">Quantity</th>
                <th style="text-align: center;">Total Price</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $t_qty = 0;
            $t_price = 0;
            foreach ($result as $single_data) {
                ?>
                <tr>
                    <td style="text-align: center;"><?php echo $single_data->parts_no; ?></td>
                    <td style="text-align: center;"><?php echo $single_data->parts_name; ?></td>
                    <td style="text-align: center;"><?php echo $single_data->supplier; ?></td>
                    <td style="text-align: center;"><?php echo $single_data->po_no; ?></td>
                    <td style="text-align: center;"><?php echo $single_data->unit_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_data->after_discount_unit_price; ?></td>
                    <td style="text-align: center;"><?php
                        $t_qty += $single_data->quantity;
                        echo $single_data->quantity;
                        ?></td>
                    <td style="text-align: center;"><?php
                        $t_price += $single_data->total_price;
                        echo round($single_data->total_price, 2);
                        ?></td>
                </tr>
            <?php } ?>
        <tfoot>
        <th colspan="6"></th>
        <th style="text-align: center;">Average Price</th>
        <th style="text-align: center;"><?php
            $avg = $t_qty == 0 ?  0 : $t_price / $t_qty;
            echo round($avg, 2);
            ?></th>
        </tfoot>
        </tbody>
    </table>
</div>