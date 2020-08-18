<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="">
                    <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
                        <p style="font-size: 20px;">Supplier Return Info.</p>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">PO No.</th>
                                    <th style="text-align: center;">Supplier</th>
                                    <th style="text-align: center;">Product Details</th>
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
                                        <td style="text-align: center;"><?php echo $single_value->manufacture_company; ?></td>
                                        <td style="text-align: center; white-space: nowrap;">
                                            <?php echo $single_value->product_name; ?><br>
                                            <!--                                            <b>S.Category: </b>--><?php //echo $single_value->sub_category;   ?><!--<br>-->
                                            <b>Category: </b><?php echo $single_value->product_type; ?><br>
                                            <!--                                            <b>Brand: </b>--><?php //echo $single_value->brand_name;   ?><!--<br>-->
                                            <!--                                            <b>Model: </b>--><?php //echo $single_value->product_model;   ?>
                                        </td>
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