 <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">PO No.</th>
            <th style="text-align: center;">Machine Category</th>
            <th style="text-align: center;">Section</th>
            <th style="text-align: center;">Machine Model</th>
            <th style="text-align: center;">Chassis No.</th>
            <th style="text-align: center;">Brand</th>
            <th style="text-align: center;">Parts Name</th>
            <th style="text-align: center;">Part No.</th>
            <th style="text-align: center;">Chinese Name</th>
            <th style="text-align: center;">Unit</th>
            <th style="text-align: center;">U.Price</th>
            <th style="text-align: center;">P.Type</th>
            <th style="text-align: center;">Qty</th>
            <th style="text-align: center;">Total Price</th>
            <th style="text-align: center;">R.Level</th>
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Shelf Details</th>
            <th style="text-align: center;">Selling U.Price</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_value as $single_value) {
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $single_value->po_no; ?></td>

                <td style="text-align: center;"><?php echo $single_value->machine_category; ?></td>
                <td style="text-align: center;"><?php echo $single_value->section; ?></td>
                <td style="text-align: center;"><?php echo $single_value->machine_model; ?></td>
                <td style="text-align: center;"><?php echo $single_value->chassis; ?></td>
                <td style="text-align: center;"><?php echo $single_value->brand; ?></td>
                <td style="text-align: center;"><?php echo $single_value->parts_name; ?></td>
                <td style="text-align: center; white-space: nowrap;">
                    <?php echo $single_value->parts_no; ?><br>
                    <b>Alt.No: </b><?php echo $single_value->alternative_parts_no; ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->chinese_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->unit; ?></td>
                <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td><td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                <td style="text-align: center;"><?php echo $single_value->total_price; ?></td>
                <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                <td style="text-align: center;"><?php echo $single_value->description; ?></td>
                <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                <td style="text-align: center;"><?php echo $single_value->selling_price; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
