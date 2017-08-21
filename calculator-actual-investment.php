<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
    </head>
    <body>
        <!-- PRIMARY NAVIGATION -->
        <?php 
            include("nav_structure.php");
        ?>
        <!--PRIMARY NAVIGATION ENDS HERE -->

        <!-- CAROUSEL STARTS HERE -->
        <?php
            include("carousel.php");
        ?>
        <!-- CAROUSEL ENDS HERE -->
        <!-- START CONTENT -->
        <!-- SOCIAL MEDIA ICONS FLOATING -->
        <?php 
            include("social_float.php");
        ?>
        <?php 
            $domain = array (
                'calculator',
                'navigation'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12" style="text-align:justify;">
                    <h2>Simas <?php echo gettext('Kalkulator'); ?> - <?php echo gettext('Investasi Aktual'); ?></h2>
                    <h4 style="color:#900;"><strong><?php echo gettext('Dapat Menghitung Nilai Investasi yang diperlukan untuk pencapaian suatu Target Investasi'); ?></strong></h4>

                    <?php echo gettext('<p>Simulasi ini bertujuan untuk memberikan gambaran kepada Anda mengenai <strong>Nilai investasi</strong> yang diperlukan untuk mencapai <strong>Target Investasi</strong>yang Anda inginkan dalam jangka waktu tertentu.</p><p>Pada Simas Kalkulator, Anda cukup mengisikan <strong>Target Dana Investasi</strong> dan <strong>Jangka Waktu Investasi</strong> yang Anda inginkan pada kolom yang tersedia.</p><p><strong>Simulasi Investasi :</strong> <br> Anda ingin membeli sebuah rumah seharga Rp 2 Milyar, dan Anda berencana untuk membeli rumah tersebut dalam jangka waktu 8 tahun mendatang. Berapakah uang yang Anda harus investasikan dalam waktu 8 tahun yang akan datang ?</p>'); ?>
                    
                    <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="field_invest_ro"> <?php echo gettext('Jumlah Investasi'); ?> </label>
                                <div class="input-group">
                                    <div class="input-group-addon">Rp</div>
                                    <input class="form-control" id="field_invest_ro" value="2,000,000,000" disabled>
                                    <div class="input-group-addon">.00</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="field_jangka_ro"> <?php echo gettext('Jangka Waktu Investasi'); ?> </label>
                                <div class="input-group">
                                    <input class="form-control" id="field_jangka_ro" value="8" disabled>
                                    <div class="input-group-addon"><?php echo gettext('Tahun'); ?></div>
                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="count_try();" type="button"><?php echo gettext('Coba Hitung'); ?> </button>
                    </form>
                    
                    <p><?php echo gettext('Melihat dari Simas Kalkulator, untuk dapat membeli rumah seharga Rp 2 Milyar dalam waktu 8 tahun Anda perlu berinvestasi sebesar <code>Rp 465,136,078.72</code> pada Reksa Dana Saham.'); ?></p>
                    <!-- PANEL KALKULATOR STARTS HERE  -->
                    <?php include('panel_kalkulator.php') ?>
                    <!-- PANEL KALKULATOR ENDS HERE  -->

                </div>
                <!-- SIDEBAR STARTS HERE -->
                <?php 
                    include("sidebar.php"); 
                ?>
                <!-- SIDEBAR ENDS HERE -->
            </div>
        </div>
        <!-- CONTENT ENDS HERE -->

        <!-- FOOTER STARTS HERE -->
        <?php include("footer.php") ?>
        <!-- FOOTER ENDS HERE -->
    
    <!-- To load jQuery and Javascript -->
    <?php include("jsload.php"); ?>
    <script> 
        function count() {
            // Validate it first
            var investasi = document.getElementById('field_invest').value;
            var jangka = document.getElementById('field_jangka').value;
            if (investasi == "" || jangka == "") {
                alert('Masukkan data dengan benar');
            }
            else {
                var indikasi = [0.2, 0.15, 0.07, 0.04];
                for (i=0; i < indikasi.length; i++) {
                    exp = Math.pow(1+indikasi[i],jangka); // powering to jangka
                    result = (investasi/exp).toFixed(2); // round it to two decimals
                    result = addCommas(result);  // and thousand separators;
                    $("#result" + i).html("<td style='word-wrap:break-word; word-break:break-all;' ><strong>" + result + "</strong></td>"); // add the result to specific id 
                }
            }
        }
        function count_try() {
            var investasi = 2000000000;
            var jangka = document.getElementById('field_jangka_ro').value;
            var indikasi = 0.2; // Reksa Dana Saham
            exp = Math.pow(1+indikasi,jangka); // powering to jangka x 12
            result = (investasi/exp).toFixed(2); // round it to two decimals
            result = addCommas(result);  // and thousand separators;
            // Remove Existing Results (if any)
            for (i = 1; i < 4; i++){
                $("#result"+i).html("<td></td>");
            }
            $("#result0").html("<td style='word-wrap:break-word; word-break:break-all;'><code>" + result + "</code>"+"</td>"); // add the result to specific id 

        }
    </script>
    </body>
</html>
