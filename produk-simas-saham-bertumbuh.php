<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>
        <?php 
            $domain = array (
                'product_general',
                'navigation',
                'SShB'
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
                        <div class="col-md-offset-1 col-md-10 col-xs-12">
                            <h2>Simas Saham Bertumbuh</h2>
                            <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                            <tbody><tr>
                                <td width="12%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="86%" ><?php echo dgettext('navigation', 'Reksa Dana Saham'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong><?php echo gettext('RESIKO'); ?></strong></td>
                                <td >:</td>
                                <td ><?php echo gettext('Tinggi'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong>Factsheet</strong></td>
                                <td >:</td>
                                <td >
                                    <?php include('form/factsheet.php') ?>
                                    <input type="hidden" name="product_type" value="SSB">
                                </form></td>
                            </tr>
                            </tbody></table>
                            
                        <!--START KINERJA SCRIPT-->    
                        <h5><?php echo gettext('KINERJA'); ?></h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                            <tbody><tr>
                        <!--        <td align="center"><a href="../download/kinerja_produk/Simas Syariah Unggulan/Grafik Buat Web (Simas Syariah Unggulan) - YTD.pdf" target="_blank"><u>Kinerja Year to Date</u></a></td>
                        -->        
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Saham Bertumbuh/Grafik Buat Web (Simas Saham Bertumbuh) - Sejak Peluncuran.pdf" target="_blank"><u><?php echo gettext('Kinerja Sejak Peluncuran'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Saham Bertumbuh/Grafik Buat Web (Simas Saham Bertumbuh) - 1 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Saham Bertumbuh/Grafik Buat Web (Simas Saham Bertumbuh) - 3 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Saham Bertumbuh/Grafik Buat Web (Simas Saham Bertumbuh) - 6 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Saham Bertumbuh/Grafik Buat Web (Simas Saham Bertumbuh) - YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
                                
                            </tr>
                            </tbody></table>
                        <!--END KINERJA SCRIPT-->
                            
                            <h5><?php echo gettext('NAB'); ?></h5>
                            <?php include("form/nab.php") ?>
                            <input name="kode_saham" type="hidden" value="108">
                            <input name="product_name" type="hidden" value="Simas Saham Bertumbuh">
                            </form>

                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <?php echo dgettext('SShB', '<p>Simas Saham Bertumbuh bertujuan memperoleh pendapatan yang optimal dalam jangka panjang dengan tingkat fleksibilitas investasi yang cukup tinggi serta mengurangi risiko dengan berbagai jenis investasi portofolio yang terdiri dari Efek bersifat Ekuitas, Efek bersifat Utang dan/ atau Efek Beragunan Aset serta Instrumen Pasar Uang dan/atas Deposito sesuai dengan peraturan perundang-undangan yang berlaku.</p><p>Portofolio Simas Saham Bertumbuh akan dikelola secara aktif guna mendapatkan pendapatan yang optimal dalam jangka panjang melalui penempatan portofolio investasi minimum 80% (delapan puluh persen) dan maksimum 98% (Sembilan puluh delapan persen) dari Nilai Aktiva Bersih pada Efek bersifat Ekuitas yang diterbikan oleh korporasi berbadan hukum Indonesia yang telah dijual dalam Penawaran Umum dan/ atau diperdagangkan di Bursa Efek Indonesia; serta minimum 2% (dua persen) dan maksimum 20% (dua puluh persen) dari Nilai Aktiva Bersih pada efek bersifat utang yang diterbitkan oleh Negara Republik Indonesia dan/atau korporasi berbadan hukum Indonesia yang telah dijual dalam Penawaran Umum dan/ atau diperdagangkan di Bursa Efek baik di dalam maupun luar negeri, Efek Beragunan Aset dan/ atau instrument pasar uang dalam negeri yang mempunyai jatuh tempo kurang dari 1 (satu) tahun dan/atau deposito sesuai peraturan perundang-undangan yang berlaku di Indonesia.</p>'); ?>

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="40" valign="top" >a.</td>
                                <td width="38%" valign="top" ><?php echo gettext('Profil Investor'); ?></td>
                                <td width="2%" valign="top" >:</td>
                                <td width="57%" valign="top" ><?php echo dgettext('SShB', 'Investor yang ingin memperoleh tingkat pertumbuhan nilai investasi yang optimal dalam jangka panjang.'); ?></td>
                            </tr><tr>
                                <td valign="top" >b.</td>
                                <td valign="top" ><?php echo gettext('Investasi Minimum awal'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 200.000,- (<?php echo gettext('dua ratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >c.</td>
                                <td valign="top" ><?php echo gettext('Investasi Selanjutnya'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 200.000,- (<?php echo gettext('dua ratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >d.</td>
                                <td valign="top" ><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td height="14" valign="top" >e.</td>
                                <td valign="top" ><?php echo gettext('Biaya Pembelian Unit'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 2,00%</td>
                            </tr>
                            <tr>
                                <td valign="top" >f.</td>
                                <td valign="top" ><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,50%</td>
                            </tr>
                            <tr>
                                <td valign="top" >g.</td>
                                <td valign="top" ><?php echo gettext('Biaya Pengalihan'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,50%</td>
                            </tr>
                            <tr>
                                <td valign="top" >h.</td>
                                <td valign="top" ><?php echo gettext('Biaya Manajer Investasi'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 3,00%</td>
                            </tr>
                            <tr>
                                <td valign="top" >i.</td>
                                <td valign="top" ><?php echo gettext('Biaya Bank Kustodian'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 0,25%</td>
                            </tr>
                            <tr>
                                <td valign="top" >j.</td>
                                <td valign="top" ><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >k.</td>
                                <td height="22" valign="top" ><?php echo gettext('Komposisi Portfolio'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><table class="portfolio-table" width="100%" border="1" cellspacing="1" cellpadding="0">
                                    <tbody><tr>
                                    <td width="61%" align="center"><strong><?php echo gettext('JENIS EFEK'); ?></strong></td>
                                    <td width="17%" align="center"><strong>MIN</strong></td>
                                    <td width="19%" align="center"><strong>MAX</strong></td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Efek Ekuitas'); ?></td>
                                    <td align="center" >80%</td>
                                    <td align="center" >98%</td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Efek Bersifat Utang Syariah, Efek Beragunan Aset Syariah, Instrumen Pasar Uang dan/atau Deposito Syariah'); ?></td>
                                    <td align="center" >2%</td>
                                    <td align="center" >20%</td>
                                    </tr>
                                </tbody></table></td>
                            </tr>
                            <tr>
                                <td valign="top" >l.</td>
                                <td valign="top" ><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali'); ?> </td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Transfer / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('Batas Waktu Pembelian'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                            
                            <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>

                            <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">Bank Sinarmas</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >KFO Thamrin</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Saham Bertumbuh</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">0035818901</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">Bank CIMB Niaga</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Sudirman</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Saham Bertumbuh</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">8000-33287-500</td>
                            </tr>
                            </tbody></table>
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Mandiri</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >BEI, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Saham Bertumbuh</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >104-000-463-9196</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">Bank BCA</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >BEI, Jakarta</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Saham Bertumbuh</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">458-258-3823</td>
                            </tr>
                            </tbody></table>
                            <!--<div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank International Indonesia (BII)</strong></div>
                            <br />-->
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                            <!-- <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Thamrin, Jakarta</td>-->
                            </tr>
                            <tr>
                                <!--<td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Syariah Unggulan</td>-->
                            </tr>
                            <tr>
                                <!--<td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">2-703-000370</td>-->
                            </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

    <?php include "jsload.php"; ?>
    </body>
</html>
