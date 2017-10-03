<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>

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

        <div id="page-wrapper">
            <?php include "nav_display.php"; ?>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 col-xs-12" style="text-align:justify;">
                            <h1>Simas <?php echo gettext('Kalkulator'); ?> - <?php echo dgettext('navigation', 'Investasi Masa Depan'); ?></h1>
                            <h3><?php echo gettext('Dapat menghitung hasil investasi masa depan'); ?></h3>
                            <?php echo gettext('<p>Simas Kalkulator dibuat untuk mensimulasikan Hasil Investasi Anda pada beberapa jenis Reksa Dana. Simulasi ini dapat memberikan gambaran kepada Anda mengenai hasil investasi dari sejumlah dana yang Anda investasikan.</p><p>Pada Simas Kalkulator, Anda cukup mengisikan Jumlah Investasi dan Jangka Waktu Investasi yang Anda inginkan pada kolom yang tersedia.</p><p><strong>Simulasi Investasi :</strong> <br> Anda ingin mulai melakukan investasi dengan jumlah investasi sebesar Rp 10 juta pada Reksa Dana Saham. Berapakah hasil investasi Anda dalam waktu 5 tahun yang akan datang ?</p>'); ?>

                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="field_invest_ro"> <?php echo gettext('Jumlah Investasi'); ?> </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Rp</div>
                                        <input class="form-control" id="field_invest_ro" value="10,000,000" disabled>
                                        <div class="input-group-addon">.00</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="field_jangka_ro"> <?php echo gettext('Jangka Waktu Investasi'); ?> </label>
                                    <div class="input-group">
                                        <input class="form-control" id="field_jangka_ro" value="5" disabled>
                                        <div class="input-group-addon"><?php echo gettext('Tahun'); ?></div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" onclick="count_try();" type="button"><?php echo gettext('Coba Hitung'); ?> </button>
                            </form>
                            <p><?php echo gettext('Setelah 5 Tahun dengan Anda berinvestasi sebesar Rp. 10,000,000.00 Anda akan mendapatkan hasil investasi sebesar <code>Rp 24,883,200.00</code>.'); ?></p>

                            <!-- PANEL KALKULATOR STARTS HERE  -->
                            <?php include('panel_kalkulator.php') ?>
                            <!-- PANEL KALKULATOR ENDS HERE  -->

                        </div>
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

    <?php include "jsload.php"; ?>
    <script>
        function addCommas(nStr)
        // THOUSAND SEPARATOR
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        } 
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
                    exp = Math.pow((1+indikasi[i]),jangka); // powering to jangka
                    result = (exp * investasi).toFixed(2); // round it to two decimals
                    result = addCommas(result);  // and thousand separators;
                    $("#result" + i).html("<td><strong style='word-wrap:break-word;word-break:break-all;'>" + result + "</strong></td>"); // add to specific id 
                }
            }
        }
        function count_try() {
            var investasi = 10000000;
            var jangka = document.getElementById('field_jangka_ro').value;
            var indikasi = 0.2; // Reksa Dana Saham
            exp = Math.pow(1+indikasi,jangka); // powering to jangka x 12
            result = (exp * investasi).toFixed(2); // round it to two decimals
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
