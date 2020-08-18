<div class="">
    <p style="padding-left: 10px; margin-top: -80px;" align="center">
        <button id="print_button" title="Click to Print" type="button"
                onClick="window.print()" class="btn btn-primary fa fa-print"> &nbsp; Print
        </button>
    </p>
        <table id="example2" class="" align="center">
            <tbody>
            <?php
            for ($i = 1; $i <= $quantity; $i++) {
                ?>
                <tr style="margin-bottom: 10px;">

                    <td style="text-align: center;">
                        <div style="text-align: center; width:3.8cm; height: 2.2cm; margin-bottom:2.5em; margin-top: -10px; margin-right: 300px; margin-left: -10px;">
                            <?php
                            echo "<b style='font-size: 10px;'>" . $name . "</b><br>";
                            if (file_exists('./assets/img/barcode/' . $product_id)) { ?>
                                <img src="<?php echo base_url(); ?>assets/img/barcode/<?php echo $product_id; ?>"
                                     style='height: 75%;'>
                            <?php }
                            echo "<p style='margin-top: -5px; font-size: 14px;'>TK $r_price</p>";
                            echo "<p style='margin-top: -18px; font-size: 10px;'>Remax Technology Bangladesh</p>";
                            ?>
                        </div>
                    </td>
                </tr>
                <!--            --><?php //if($i%8 == 0){ echo '</tr>';}?>
            <?php } ?>
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

</style>