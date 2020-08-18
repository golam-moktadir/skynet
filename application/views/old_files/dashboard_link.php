<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <?php if ($no == 1) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;">Appointment Info.</h3>
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SL</th>
                                        <th style="text-align: center;">Patient Name</th>
                                        <th style="text-align: center;">Mobile</th>
                                        <th style="text-align: center;">Address</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Doctor Name</th>
                                        <th style="text-align: center;">Doctor Fee</th>
                                        <th style="text-align: center;">Appointment Date</th>
                                        <th style="text-align: center;">Appointment Time</th>
                                        <th style="text-align: center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($appointment as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->patient_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->mobile_no; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->age; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->doctor_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->doctor_fee; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->date; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->appointment_time; ?></td>
                                            <td style="text-align: center;">
                                                <?php
                                                if ($single_value->status == 0) {
                                                    echo "Due";
                                                } else {
                                                    echo "Paid";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($no == 2) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;">Patient Info.</h3>
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SL</th>
                                        <th style="text-align: center;">Unique ID</th>
                                        <th style="text-align: center;">Patient Name</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Weight</th>
                                        <th style="text-align: center;">Height</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($patient as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->record_id; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->age; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->weight; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->height; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($no >= 3 && $no <= 5) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;"><?php echo $title; ?></h3>
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;" id="staff_by_type">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SL</th>
                                        <th style="text-align: center;">Unique ID</th>
                                        <th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Designation</th>
                                        <th style="text-align: center;">Joining Date</th>
                                        <th style="text-align: center;">Department</th>
                                        <th style="text-align: center;">Visting Hour</th>
                                        <th style="text-align: center;">Docotor Fee</th>
                                        <th style="text-align: center;">Available Days</th>
                                        <th style="text-align: center;">Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($employee as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->record_id; ?></td>
                                            <td style="text-align: center;">
                                                <img src="<?php echo base_url(); ?>assets/img/staff/<?php echo $single_value->image; ?>"
                                                     width="50" height="50">
                                            </td>
                                            <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->designation; ?></td>
                                            <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->joining_date)); ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->department; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->visiting_hour; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->doctor_fee; ?></td>
                                            <td style="text-align: center;">
                                                <?php
                                                $each_day = explode('#', $single_value->available_days);
                                                foreach ($each_day as $day) {
                                                    echo $day . "<br>";
                                                }
                                                ?>
                                            </td>
                                            <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($no == 6) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;">Enquiry Info.</h3>
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th style="text-align: center;">Date</th>
                                        <th style="text-align: center;">Title</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Mobile</th>
                                        <th style="text-align: center;">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($enquiry as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->date)); ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->title; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->email; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($no == 7) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;"><?php echo $title; ?></h3>                              
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th style="text-align: center;">Date</th>
                                        <th style="text-align: center;">Particular</th>
                                        <th style="text-align: center;">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($notice as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->date)); ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->particular; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->details; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($no == 8) { ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="color: black;"><?php echo $title; ?></h3>
                        </div>

                        <div class="box-body table-responsive" style="width: 98%; overflow: scroll; color: black;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th style="text-align: center;">Patient ID</th>
                                        <th style="text-align: center;">Patient Name</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Height</th>
                                        <th style="text-align: center;">Weight</th>
                                        <th style="text-align: center;">Admission Date</th>
                                        <th style="text-align: center;">Doctor Name</th>
                                        <th style="text-align: center;">Service Name</th>
                                        <th style="text-align: center;">Package Name</th>
                                        <th style="text-align: center;">Guardian Name</th>
                                        <th style="text-align: center;">Relation</th>
                                        <th style="text-align: center;">Contact</th>
                                        <th style="text-align: center;">Address</th>
                                        <th style="text-align: center;">Total Amount</th>
                                        <th style="text-align: center;">Due Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($admitted_patient as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->patient_id; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->patient_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->age; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->height; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->weight; ?></td>
                                            <td style="text-align: center;"><?php echo date('d F, Y', strtotime($single_value->admission_date)); ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->doctor_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->service_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->package_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->guardian_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->relation; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->contact; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->total; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->due_amount; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </div>
    </section>
</aside>
