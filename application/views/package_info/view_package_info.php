<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Company Name</th>
            <th style="text-align: center;">Service Type</th>
            <!--<th style="text-align: center;">Package Code</th>-->
            <th style="text-align: center;">Package Name</th>
            <th style="text-align: center;">Bandwidth</th>
            <!--<th style="text-align: center;">Package Price</th>-->
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($all_value as $single_value) {
            $count++;
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $count; ?></td>
                <td style="text-align: center;"><?php echo $single_value->branch_name; ?></td>
                <td style="text-align: center;"><?php echo $single_value->service_type; ?></td>
                <!--<td style="text-align: center;"><?php echo $single_value->package_code; ?></td>-->
                <td style="text-align: center;"><?php echo $single_value->package_name; ?></td>
                <td style="text-align: center;">
                    <?php 
                    if($single_value->bandwidth){
                        echo $single_value->bandwidth; 
                    }else{
                        echo "N/A";
                    }
                    ?>
                </td>
                <!--<td style="text-align: center;"><?php echo $single_value->price; ?></td>-->
                <td style="text-align: center;">
                    <button class="btn btn-danger" onclick="delete_data(<?php echo $single_value->record_id; ?>)">
                        <i class="fa fa-trash-o"></i>
                    </button> 
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>