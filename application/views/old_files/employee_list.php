<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info">
                    <div class="box box-info">
                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <p style="font-size: 20px;">Employee List</p>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">ID</th>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Department</th>
                                    <th style="text-align: center;">Designation</th>
                                    <th style="text-align: center;">Mobile</th>
                                    <th style="text-align: center;">Address</th>
                                    <th style="text-align: center;">Joining Date</th>
                                    <th style="text-align: center;">Image</th>
                                    <th style="text-align: center;">Bank Name</th>
                                    <th style="text-align: center;">A/C</th>
                                    <th style="text-align: center;">Total Salary</th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count = 0;
                                foreach ($all_employee as $single_value) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;">E-<?php echo $single_value->record_id; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->department; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                        <td style="text-align: center;">
                                            <?php
                                            echo date('d F, Y', strtotime($single_value->joining_date));
                                            ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php if (file_exists('./assets/img/employee/' . $single_value->image)) { ?>
                                                <img src="<?php echo base_url(); ?>assets/img/employee/<?php echo $single_value->image; ?>"
                                                     width="50" height="50">
                                            <?php } ?>
                                        </td>
                                        <td style="text-align: center;"><?php echo $single_value->bank_name; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->account; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->total_salary; ?></td>
                                        <td style="text-align: center;">
                                            <?php
                                            if ($single_value->block_status == 0) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle">
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Show_edit_form/employee_list/<?php echo $single_value->record_id; ?>"
                                               class="btn btn-info fa fa-edit" title="Edit">
                                            </a>
                                            <a style="margin: 5px;"
                                               href="<?php echo base_url(); ?>Delete/employee_list/<?php echo $single_value->record_id; ?>"
                                               class="btn btn-danger fa fa-trash-o" title="Delete">
                                            </a>
                                            <?php if ($single_value->block_status == 1) { ?>
                                                <a style="margin: 5px;"
                                                   href="<?php echo base_url(); ?>Edit/employee_active/<?php echo $single_value->record_id; ?>"
                                                   class="btn btn-success fa fa-eye" title="Active">
                                                </a>
                                            <?php } else { ?>
                                                <a style="margin: 5px;"
                                                   href="<?php echo base_url(); ?>Edit/employee_inactive/<?php echo $single_value->record_id; ?>"
                                                   class="btn btn-danger fa fa-eye-slash" title="Inactive">
                                                </a>
                                            <?php } ?>
                                        </td>
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

<script type="text/javascript">
    $("#staff_type").on("change paste keyup", function () {
        var input_data = $('#staff_type').val();
        if (input_data == "Doctor") {
            $('#doctor_extra').show();
        } else {
            $('#doctor_extra').hide();
        }
    });

    $('#search_staff').on('click', function () {
        var staff = $('#staff_type2').val();
        var post_data = {
            'staff': staff,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        console.log(post_data);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_staff",
            data: post_data,
            success: function (data) {
                console.log(data);
                $('#staff_by_type').html(data);
            }
        });
    });
</script>