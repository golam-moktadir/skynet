<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title" style="color: black;">All Info.</h3>
                    </div>

                    <div class="box-body" >
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: left;">Description</th>
                                    <th style="text-align: left;">Type</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">User Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($auditors)): ?>
                                    <?php foreach($auditors as $key=>$value): ?>
                                        <tr>
                                        <td><?= ++$key; ?></td>
                                        <td><?= $value['name']; ?></td>
                                        <td><?= $value['type']; ?></td>
                                        <td class="text-center"><?= date("d-m-Y h:i A",strtotime($value['created_at'])); ?></td>
                                        <td class="text-center"><?= $value['user_name']; ?></td>
                                        </tr>
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
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
        "paging":   true,
        "ordering": false,
        "info":     false,
    } );
} );
</script>