<?php
    $count = 0;
    foreach ($all_value as $single_value) {
        $count++;
        ?>
        <tr>
            <td style="text-align: center;"><?php echo $count; ?></td>
            <td style="text-align: center;"><?php echo $single_value->machine_category; ?></td>
            <td style="text-align: center;"><?php echo $single_value->section; ?></td>
            <td style="text-align: center;"><?php echo $single_value->product_name; ?></td>
            <td style="text-align: center;">
                <a style="margin: 5px;" class="btn btn-info fa fa-edit" title="Edit"
                    href="<?php echo base_url(); ?>show_edit_form/create_product_name/<?php echo $single_value->record_id; ?>">
                </a>
                <a style="margin: 5px;" class="btn btn-danger fa fa-trash-o" title="Delete"
                    href="<?php echo base_url(); ?>Delete/create_product_name/<?php echo $single_value->record_id; ?>">
                </a>
            </td>
        </tr>
    <?php } ?>