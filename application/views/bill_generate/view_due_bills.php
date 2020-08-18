<p style="font-size: 20px; margin: 0px; padding: 0px; 
       color: purple; font-weight: bolder; text-align: center;">
        Due bill Information
    </p>
<table id="datatable" class="datatable table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">SL</th>
            <th style="text-align: center;">Month</th>
            <th style="text-align: center;">Year</th>
            <th style="text-align: center;">Dish/ISP_Client</th>
            <th style="text-align: center;">Mobile</th>
            <th style="text-align: center;">Particular</th>
            <th style="text-align: center;">Amount</th>
            <th style="text-align: center;">Paid_Status</th>
            <th style="text-align: center;">Due</th>
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
                <td style="text-align: center;"><?php echo $single_value->generate_month; ?></td>
                <td style="text-align: center;"><?php echo $single_value->generate_year; ?></td>
                <?php
                    foreach($clients as $client){
                        if($single_value->client_id == $client->record_id){
                ?>
                <td style="text-align: center;"><?php echo $client->name ?></td>
                <?php 
                        }
                } 
                ?>
                <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                <td style="text-align: center;"><?php echo $single_value->head; ?></td>
                <td style="text-align: center;"><?php echo $single_value->amount; ?></td>
                <td style="text-align: center;">
                    <?php echo $single_value->paid_status == 1 ? "Paid" : "Not Paid"; ?>
                </td>
                <td style="text-align: center;"><?php echo $single_value->partial_amount; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>