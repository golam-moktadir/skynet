
<table id="pagination_search" class="table table-bordered table-hover list_table">
    <thead>
        <tr>
            <th style="text-align: center;">PO No.</th>
            <th style="text-align: center;">Action</th>
            <th style="text-align: center;">Machine Category</th>
            <th style="text-align: center;">Section</th>
            <th style="text-align: center;">Machine Model</th>
            <th style="text-align: center;">Chassis No.</th>
            <th style="text-align: center;">Brand</th>
            <th style="text-align: center;">Parts Name</th>
            <th style="text-align: center;">Parts No.</th>
            <th style="text-align: center;">Chinese Name</th>
            <th style="text-align: center;">Unit</th>
            <th style="text-align: center;">U.Price</th>
            <th style="text-align: center;">Discount</th>
            <th style="text-align: center;">After Discount U.P</th>
            <th style="text-align: center;">P.Type</th>
            <th style="text-align: center;">Qty</th>
            <th style="text-align: center;">Total Price</th>
            <th style="text-align: center;">R.Level</th>
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Shelf Details</th>
            <th style="text-align: center;">Selling U.Price</th>
            <th style="text-align: center;">Supplier</th>
            <th style="text-align: center;">Shipping Type</th>
            <th style="text-align: center;">Others Cost</th>
            <th style="text-align: center;">Total Cost</th>

        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= $count_it; $i++) {
//                                    $total_qty = 0;
//                                    $total_amount = 0;
            $one_time = 0;
            $row_span_count = 0;
            foreach (${'purchase_result' . $i} as $single_value) {
                $row_span_count++;
            }
            foreach (${'purchase_result' . $i} as $single_value) {
//                                        $total_qty += $single_value->quantity;
//                                        $total_amount += $single_value->amount;
                $one_time++;
                ?>
                <tr>
                    <?php if ($one_time == 1) { ?>
                        <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->po_no; ?></td>
                    <?php } ?>
        <!--                                                <td style="text-align: center;">
                    <?php
                    if ($single_value->date != "0000-00-00") {
                        echo date('d/m/Y', strtotime($single_value->date));
                    } else {
                        echo "";
                    }
                    ?>
        </td>-->
                    <td style="text-align: center;" id="no_print3">
                        <?php if ($one_time == 1) { ?>
                            <?php
                            echo anchor('Show_edit_form/purchase_product/' . $single_value->record_id.'/'.$single_value->po_no.'/'.$single_value->total_with_extra.'/'.$single_value->discount.'/'.$single_value->net_payable, '<button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button>',array('target' => '_blank')) .
                            anchor('Delete/purchase_product/' . $single_value->po_no,'<button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>',array("onclick"=>"return confirm('Are You Sure Delete This PO?')"));
                            ?>
                            <?php
                        } else {
                            echo anchor('Show_edit_form/purchase_product/' . $single_value->record_id, '<button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button>',array('target' => '_blank'));
                        }
                        ?>
                    </td>

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
                    <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->discount; ?>%</td>
                    <td style="text-align: center;"><?php echo $single_value->after_discount_unit_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->payment_type; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->quantity; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->total_price; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->reminder_level; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->description; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->shelf_details; ?></td>
                    <td style="text-align: center;"><?php echo $single_value->selling_price; ?></td>
                    <?php if ($one_time == 1) { ?>
                        <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->supplier; ?></td>
                        <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>"><?php echo $single_value->shipping_type; ?></td>
                        <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                            <b style="white-space: nowrap;">Shipping: </b><?php echo $single_value->shiping_cost; ?><br>
                            <b style="white-space: nowrap;">Custom: </b><?php echo $single_value->custom_cost; ?><br>
                            <b style="white-space: nowrap;">Transport: </b><?php echo $single_value->transport_cost; ?><br>
                            <b style="white-space: nowrap;">Mixed: </b><?php echo $single_value->misc_cost; ?>
                        </td>
                        <td style="text-align: center;" rowspan="<?php echo $row_span_count; ?>">
                            <b style="white-space: nowrap;">Total Price: </b><?php echo $single_value->total_with_extra; ?>
                            <b style="white-space: nowrap;">Discount: </b><?php echo $single_value->total_discount; ?>
                            <b style="white-space: nowrap;">Net Payable: </b><?php echo $single_value->net_payable; ?>
                        </td>
                    <?php } ?>

                </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>
