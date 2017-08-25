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
                'DF'
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
                        <div class="col-md-8 col-xs-12">
                            <h2>Danamas Fleksi</h2>
                            <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                            <tbody><tr>
                                <td width="12%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="86%" ><?php echo dgettext('navigation', 'Reksa Dana Campuran'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong><?php echo gettext('RESIKO'); ?></strong></td>
                                <td >:</td>
                                <td ><?php echo gettext('Sedang'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong>Factsheet</strong></td>
                                <td >:</td>
                                <td >
                                    <?php include("form/factsheet.php") ?>
                                    <input type="hidden" name="product_type" value="DNFL">
                                </form></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('KINERJA'); ?></h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                            <tbody><tr>
                                <td width="15%" align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Danamas Fleksi/Grafik Buat Web (Danamas Fleksi) - YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
                                <td width="15%" align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Danamas Fleksi/Grafik Buat Web (Danamas Fleksi) - 1 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Danamas Fleksi/Grafik Buat Web (Danamas Fleksi) - 3 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Danamas Fleksi/Grafik Buat Web (Danamas Fleksi) - 6 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Danamas Fleksi/Grafik Buat Web (Danamas Fleksi) - 1 Tahun.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Tahun'); ?></u></a></td>
                            </tr>
                            </tbody></table>
                            <h5>NAB</h5>
                                <?php include("form/nab.php") ?>
                                <input name="kode_saham" type="hidden" value="009">
                                <input name="product_name" type="hidden" value="Danamas Fleksi">
                            </form>
                            
                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <p><?php echo dgettext('DF', 'Portfolio Danamas Fleksi akan dikelola secara aktif guna mendapatkan pendapatan optimal melalui investasi pada Efek Ekuitas sebesar 2% - 79%, Pendapatan Tetap 10% - 79% dan instrumen Pasar Uang sebesar 2% - 79%, baik dalam denominasi Rupiah maupun mata uang asing.'); ?></p>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="56" valign="top" >a.</td>
                                <td width="38%" valign="top" ><?php echo gettext('Profil Investor'); ?></td>
                                <td width="2%" valign="top" >:</td>
                                <td width="57%" valign="top" ><?php echo dgettext('DF', 'Investor yang ingin mempunyai tingkat pertumbuhan dana yang optimal dalam jangka panjang dengan fleksibilitas investasi yang cukup tinggi dalam pengelolaan portofolio efek investasinya sehingga dapat mengurangi resiko.'); ?></td>
                            </tr><tr>
                                <td valign="top" >b.</td>
                                <td valign="top" ><?php echo gettext('Investasi Minimum awal'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 25.000.000,- (<?php echo gettext('dua puluh lima juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >c.</td>
                                <td valign="top" ><?php echo gettext('Investasi Selanjutnya'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 25.000.000,- (<?php echo gettext('dua puluh lima juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >d.</td>
                                <td valign="top" ><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp 100.000,- (seratus ribu rupiah)</td>
                            </tr>
                            <tr>
                                <td height="14" valign="top" >e.</td>
                                <td valign="top" ><?php echo gettext('Biaya Pembelian Unit'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,00%</td>
                            </tr>
                            <tr>
                                <td valign="top" >f.</td>
                                <td valign="top" ><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,50%</td>
                            </tr>
                            <tr>
                                <td valign="top" >g.</td>
                                <td valign="top" ><?php echo gettext('Biaya Manajer Investasi'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 2,00% net p.a</td>
                            </tr>
                            <tr>
                                <td valign="top" >h.</td>
                                <td valign="top" ><?php echo gettext('Biaya Bank Kustodian'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 0,25% net p.a</td>
                            </tr>
                            <tr>
                                <td valign="top" >i.</td>
                                <td valign="top" ><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 25.000.000,- (<?php echo gettext('dua puluh lima juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td valign="top" >j.</td>
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
                                    <td align="center" >2%</td>
                                    <td align="center" >79%</td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Pendapatan Tetap'); ?></td>
                                    <td align="center" >10%</td>
                                    <td align="center" >79%</td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Instrumen Pasar Uang'); ?></td>
                                    <td align="center" >2%</td>
                                    <td align="center" >79%</td>
                                    </tr>
                                </tbody></table></td>
                            </tr>
                            <tr>
                                <td valign="top" >k.</td>
                                <td valign="top" ><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali'); ?> </td>
                                <td valign="top" >:</td>
                                <td valign="top" ><?php echo gettext('Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('Batas Waktu Pembelian'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>

                            <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                            <p><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali :'); ?> <?php echo gettext('Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></p>
                            <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank CIMB Niaga</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Sudirman, Jakarta</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Danamas Fleksi</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">8000-32614-900</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Maybank Indonesia </strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Mangga Besar, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Danamas Fleksi</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >2-013-26326-3</td>
                            </tr>
                            </tbody></table>
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Mandiri</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >BEJ, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Danamas Fleksi</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >104-000-4032889</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Sinarmas</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Thamrin, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Danamas Fleksi</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >00000-79758</td>
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
