<!--<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
                <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_staff">
                    <p style="color: wheat; font-size: 20px;"><?php echo $total_staff; ?></p>
                    <p style="color: white; font-size: 20px;">Staff Qty</p>
                </a>
        </div>
    </div>
</div>-->
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_active_client">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_active_client; ?></p>
                <p style="color: white; font-size: 20px;">Active Dish Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_active_reseller">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_active_reseller; ?></p>
                <p style="color: white; font-size: 20px;">Active ISP Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_bill">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_bill; ?></p>
                <p style="color: white; font-size: 20px;">Total Bill</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_collection">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_collection; ?></p>
                <p style="color: white; font-size: 20px;">Total Collection</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_discount">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_discount; ?></p>
                <p style="color: white; font-size: 20px;">Total Discount</p>
            </a>
        </div>
    </div>
</div>

<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_due">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_bill - ($total_collection + $total_discount); ?></p>
                <p style="color: white; font-size: 20px;">Total Due</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_inactive_client">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_inactive_client; ?></p>
                <p style="color: white; font-size: 20px;">Inactive Dish Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_inactive_reseller">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_inactive_reseller; ?></p> 
                <p style="color: white; font-size: 20px;">Inactive ISP Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="<?php echo base_url(); ?>Dashboard/total_validity_over">
                <p style="color: wheat; font-size: 20px;"><?php echo $total_validity_over; ?></p> 
                <p style="color: white; font-size: 20px;">Total Validity Over</p>
            </a>
        </div>
    </div>
</div>

<div class="footer" style="font-size: 16px; font-weight: bolder; padding-top: 200px;">
    <p style="text-align: center; color: green;">Copyright &copy; 2020. Designed & Developed by
        <a href="http://www.greensoftechbd.com/" target="_blank" style="color: brown;">GREEN SOFTWARE &
            TECHNOLOGY</a>. All rights reserved</p>
</div>

