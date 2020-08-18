<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
        cursor: pointer;
    }
    #img{
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        }
    #img img{
        height:64px;
        width:64px;
    }

</style>
<aside>
    <section class="content">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div>
                    <div id="overlay">
                        <div id="img">
                            <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="">
                        </div>
                    </div>
                    <div style="">
                        <p style="padding: 10px;"><button id="print_button" title="Click to Print" type="button"
                                                          onclick="printDiv('searchResult')" class="btn btn-flat btn-warning">Print</button></p>
                        <h3 style="color: black; text-align: center;"><u>Product Info.</u></h3>
                        <div class="form-group col-sm-3 col-xs-12"  style="margin: 20px;">
                            <label for="search_brand_name">Select Brand Name</label>
                            <select id="search_brand_name" name="search_brand_name" class="form-control">
                                <option value="">--Select--</option>
                                <option value="XCMG">XCMG</option>
                                <option value="Sinotruk">Sinotruk</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3 col-xs-12"  style="margin: 20px;">
                            <label for="search_type">Select Count Type</label>
                            <select id="search_type" name="search_type" class="form-control">
                                <option value="1">Parts Name</option>
                                <option value="2">Part No</option>
                            </select>
                        </div>

                        <button type="button" class="pull-left btn btn-info" style="margin-top: 48px;"
                                id="search_now">Search <i class="fa fa-arrow-circle-right"></i></button>
                    </div>

                    <div class="box-body table-responsive" style="width: 98%;  color: black;">

                        <div id="searchResult">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">Sl</th>
                                    <th style="text-align: center;">Brand Name</th>
                                    <th style="text-align: center;">Part No</th>
                                    <th style="text-align: center;">Parts Name</th>
                                    <th style="text-align: center;">Add Qty</th>
                                    <th style="text-align: center;">Sales/Service Qty</th>
                                    <th style="text-align: center;">Present Qty</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </section>
</aside>
<br>
<br>
<br>
<br>

<script>
    $('#search_now').on('click', function () {
        var search_brand_name = $('#search_brand_name').val();
        var search_type = $('#search_type').val();
        var post_data = {
            'search_brand_name': search_brand_name,
            'search_type': search_type,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        $.ajax({
            type: "GET",
            url: "<?php echo base_url(); ?>Get_ajax_value/search_brand_quantity",
            data: post_data,
            beforeSend: function() {
                $("#overlay").show();
            },
            success: function (data) {
                $('#searchResult').html(data);
               $("#overlay").hide();
            },
            complete:function(){
                $("#overlay").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    function printDiv(searchResult) {
        var printContents = document.getElementById(searchResult).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
