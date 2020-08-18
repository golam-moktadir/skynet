<aside>
    <section class="content">
        <div class="row">
        <?php echo $this->session->flashdata("msg"); ?>
            <section class="col-xs-12 connectedSortable">

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>

                    <div class="box-body" >
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th class="text-center">Common Bill Id</th>
                                    <th class="text-center">Invoice No</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php $j=0; ?>
                                <?php if(isset($bill)): ?>
                                    <?php foreach($bill as $key=>$value): ?>
                                        <?php foreach($value['invoice_no'] as $key=>$in_value): ?>
                                            <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <?php if($j==0): ?>
                                                <td rowspan="<?= $value['bill_count'] ?>" style="vertical-align : middle;text-align:center;"><a href="<?php echo  base_url() ?>Show_form/generate_bill/<?= $value['bill_id'] ?>"><?= $value['bill_id']; ?></a> </td>
                                            <?php endif; ?>
                                            <td class="text-center"><a href="<?php echo  base_url() ?>Show_edit_form/print_sales_invoice/<?= $in_value['invoice_no'] ?>/invoice_btn"><?= $in_value['invoice_no']; ?></a></td>
                                            <td class="text-center"><a href="<?php echo site_url("Delete/bill_delete/".$in_value['invoice_no']) ?>" onclick="return confirm('Are You Sure')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                            <?php $j=1; ?>
                                        <?php endforeach;?>
                                            <?php $j=0; ?>
                                    <?php endforeach;?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>