<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div class="box box-info" style="color: black;">
                    <div class="box-body">
                        <p style="font-size: 20px;">Officer List</p>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="department">Select Department</label>
                                <select id="department" name="department" class="form-control selectpicker"
                                        data-live-search="true">
                                    <option value="">--Select--</option>
                                    <?php foreach ($all_value as $info) { ?>
                                        <option value="<?php echo $info->department ?>"><?php
                                            echo $info->department;?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div id="show_list"></div>
                </div>
            </section>
        </div>
    </section>
</aside>

<script type="text/javascript">
    $("#department").on("change paste keyup", function () {
        var department = $('#department').val();
        var post_data = {
            'department': department,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Get_ajax_value/get_officer_list",
            data: post_data,
            success: function (data) {
                $('#show_list').html(data);
            }
        });
    });
</script>