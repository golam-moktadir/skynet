<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info">
                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <p style="font-size: 20px;">Sales Return Info.</p>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">Invoice No.</th>
                                    <th style="text-align: center;">Product Details</th>
                                    <th style="text-align: center;">Issue Quantity</th>
                                    <th style="text-align: center;">Returned Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_value as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->invoice_no; ?></td>
                                        <td style="text-align: center; white-space: nowrap;">
                                            <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                            <b>Parts Name: </b><?php echo $single_value->product_name; ?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $single_value->orginal_quantity; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->returned_qty; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>