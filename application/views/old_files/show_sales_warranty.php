<div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
    <p style="padding-left: 10px;">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-flat btn-warning">Print
        </button>
    </p>
    <div class="box-header" style="color: black; text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg"
             alt="Logo" width="40%" height="80px" style="border-radius: 15px;">
    </div>
    <br>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="text-align: center;">No.</th>
            <th style="text-align: center;">Product</th>
            <th style="text-align: center;">Client[ID]</th>
            <th style="text-align: center;">Sold Date</th>
            <th style="text-align: center;">Warranty Date</th>
            <th style="text-align: center;">Due Days</th>
            <th style="text-align: center;">Comments</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        $today_date = date('Y-m-d');
        foreach (${"all_value"} as $single_value) {
            if ($single_value->warranty == '1 Month') {
                $warranty_date = date('d/m/y', strtotime('+1 months', strtotime($single_value->date)));

                $earlier = new DateTime($today_date);
                $later = new DateTime(date('Y-m-d', strtotime('+1 months', strtotime($single_value->date))));
                $diff = $later->diff($earlier)->format("%a");

            } elseif ($single_value->warranty == '3 Month') {
                $warranty_date = date('d/m/y', strtotime('+3 months', strtotime($single_value->date)));

                $earlier = new DateTime($today_date);
                $later = new DateTime(date('Y-m-d', strtotime('+3 months', strtotime($single_value->date))));
                $diff = $later->diff($earlier)->format("%a");
            } elseif ($single_value->warranty == '6 Month') {
                $warranty_date = date('d/m/y', strtotime('+6 months', strtotime($single_value->date)));

                $earlier = new DateTime($today_date);
                $later = new DateTime(date('Y-m-d', strtotime('+6 months', strtotime($single_value->date))));
                $diff = $later->diff($earlier)->format("%a");
            } elseif ($single_value->warranty == '1 Year') {
                $warranty_date = date('d/m/y', strtotime('+1 year', strtotime($single_value->date)));

                $earlier = new DateTime($today_date);
                $later = new DateTime(date('Y-m-d', strtotime('+1 year', strtotime($single_value->date))));
                $diff = $later->diff($earlier)->format("%a");
            } elseif ($single_value->warranty == '2 Year') {
                $warranty_date = date('d/m/y', strtotime('+2 years', strtotime($single_value->date)));

                $earlier = new DateTime($today_date);
                $later = new DateTime(date('Y-m-d', strtotime('+2 years', strtotime($single_value->date))));
                $diff = $later->diff($earlier)->format("%a");
            } else {
                $warranty_date = $single_value->warranty;
                $datediff = 'N/A';
                $diff = 'N/A';
            }
            $comment = explode('###', $single_value->comment);
            $count++; ?>
            <tr>
                <td style="text-align: center;"><?php echo $count; ?></td>
                <td style="text-align: center;">
                    <?php echo $single_value->product_name . ' [ID: ' . 'RTB'.sprintf('%04d', $single_value->product_id) . ']'; ?><br>
                    <b>Category: </b><?php echo $single_value->product_type; ?><br>
                    <!--<b>Model: </b>-->
                    <!--                    --><?php //echo $single_value->product_model; ?><!--<!--<br>-->
                    <b>Serial: </b>
                    <?php if ($serial != '') {
                        echo $serial;
                    } else {
                        $se = explode('###', $single_value->serial);
                        foreach ($se as $s) {
                            echo $s . ' ';
                        }
                    } ?><br>
                    <b>Invoice No.: </b><?php echo $single_value->invoice_no; ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    if ($single_value->client_id == "New") {
                        echo $single_value->client_name;
                    } else {
                        echo $single_value->client_name . ' [ID: ' . $single_value->client_id . ']';
                    }
                    ?>
                </td>
                <td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
                <td style="text-align: center;"><?php echo $warranty_date; ?></td>
                <td style="text-align: center;"><?php echo $diff; ?></td>
                <td style="text-align: center;">
                    <?php foreach ($comment as $c){
                        echo $c.'<br>';
                    } if($single_value->service_date != '0000-00-00'){
                        echo 'Last Service Date: '.$single_value->service_date.'<br>';
                    }?>
<!--                    <br>-->
                    <input type="text" class="form-control" name="comment" id="comment<?php echo $count; ?>"
                           style="display: none;">
                    <button style="margin: 5px;" type="button"
                            class="btn btn-success fa fa-comment"
                            id="c1<?php echo $count; ?>"
                            onclick="comment1('<?php echo $count; ?>')">
                    </button>
                    <button style="display: none;" type="button"
                            class="btn btn-danger fa fa-comment"
                            id="c2<?php echo $count; ?>"
                            onclick="comment2('<?php echo $count; ?>')">
                    </button>
                </td>
                <td style="text-align: center;">
                    <button style="margin: 5px;" type="button"
                            class="btn btn-info" id="service"
                            onclick="warranty('<?php echo $single_value->record_id; ?>','<?php echo $count; ?>')">
                        Service
                    </button>
                </td>

            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<style>
    @media print {
        a[href]:after {
            content: none !important;
        }

        #print_button {
            display: none;
        }

        #no_print1 {
            display: none;
        }

        #no_print2 {
            display: none;
        }

        #no_print3 {
            display: none;
        }

        #no_print4 {
            display: none;
        }
    }

    .zoom {
        width: 80px;
        height: 80px;
    }

    /*    .zoom:hover {
            -ms-transform: scale(2.5);  IE 9
            -webkit-transform: scale(2.5);  Safari 3-8
            transform: scale(2.5);
        }*/
</style>

<script>
    function comment1(c) {
        $('#comment' + c).show();
        $('#c2' + c).show();
        $('#c1' + c).hide();
    }


    function comment2(c) {
        $('#comment' + c).hide();
        $('#c2' + c).hide();
        $('#c1' + c).show();
    }

    function warranty(id, c) {
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        var search_serial = $('#search_serial').val();
        var comment = $('#comment' + c).val();
        var post_data = {
            'date_from': date_from, 'date_to': date_to, 'serial_no': search_serial,
            'record_id': id, 'comment': comment,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/show_sold_product_warranty2",
            data: post_data,
            success: function (data) {
                $('#show_info').html(data);
            }
        });
    }
</script>