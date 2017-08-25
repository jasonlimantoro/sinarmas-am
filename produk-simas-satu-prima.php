<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>

        <?php 
            
            

            $domain = array (
                'product_general',
                'navigation',
                'SSP'
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
                            <h2>Simas Satu Prima</h2>
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
                                    <input type="hidden" name="product_type" value="SMSP">
                                </form></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('KINERJA'); ?></h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                            <tbody><tr>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Satu Prima/Grafik Buat Web (Simas Satu Prima) - YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Satu Prima/Grafik Buat Web (Simas Satu Prima) - Sejak Peluncuran.pdf" target="_blank"><u><?php echo gettext('Kinerja Sejak Peluncuran'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Satu Prima/Grafik Buat Web (Simas Satu Prima) - 1 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Satu Prima/Grafik Buat Web (Simas Satu Prima) - 3 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
                                <td align="center"><a href="//www.sinarmas-am.co.id/download/kinerja_produk/Simas Satu Prima/Grafik Buat Web (Simas Satu Prima) - 6 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('NAB'); ?></h5>
                            <?php include("form/nab.php"); ?>

                            <input name="kode_saham" type="hidden" value="049">
                            <input name="product_name" type="hidden" value="Simas Satu Prima">
                            </form>

                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <?php echo dgettext('SSP', '<p>Simas Satu Prima bertujuan untuk mencapai tingkat pendapatan yang optimal dalam jangka panjang melalui peningkatan nilai modal, penghasilan dividen dan pendapatan bunga, serta mengurangi risiko investasi dengan mengalokasikan kekayaan Simas Satu Prima ke dalam berbagai jenis efek yang terdiri dari Efek Ekuitas, Efek bersifat utang dan/atau Efek Beragun Aset serta Instrumen Pasar Uang.</p><p>Simas Satu Prima akan melakukan investasi dengan komposisi portofolio investasi minimum 5% (lima persen) dan maksimum 79% (tujuh puluh sembilan persen) pada Efek bersifat ekuitas yang diterbitkan oleh korporasi yang dijual dalam Penawaran Umum dan/atau diperdagangkan di Bursa Efek Indonesia; dan minimum 5% (lima persen) dan maksimum 79% (tujuh puluh sembilan persen) pada Efek bersifat utang yang diterbitkan oleh Pemerintah Republik Indonesia dan/atau korporasi yang  dijual dalam Penawaran Umum dan/atau diperdagangkan di Bursa Efek Indonesia, Efek Beragun Aset, instrumen pasar uang dalam negeri yang mempunyai jatuh tempo kurang dari 1 (satu) tahun dan/atau deposito; sesuai peraturan perundang-undangan yang berlaku di Indonesia.</p>'); ?>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="40" valign="top" >a.</td>
                                <td width="38%" valign="top" ><?php echo gettext('Profil Investor'); ?></td>
                                <td width="2%" valign="top" >:</td>
                                <td width="57%" valign="top" ><?php echo dgettext('SSP', 'Investor yang ingin mempunyai tingkat pertumbuhan dana yang optimal dengan tingkat resiko yang moderat dalam jangka waktu menengah.'); ?></td>
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
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 2,00 %</td>
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
                                <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 2,50% net p.a</td>
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
                                <td valign="top" >Rp. 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
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
                                    <td align="center" >5%</td>
                                    <td align="center" >79%</td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo dgettext('SSP', 'Efek Bersifat Utang, Efek Beragun Aset, Instrumen Pasar Uang dan/atau Deposito'); ?>
                        </td>
                                    <td align="center" >5%</td>
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
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                            <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                        
                            <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                            
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Mandiri</strong></div>
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
                                <td >Reksa Dana Simas Satu Prima</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">104-000-4489089</td>
                            </tr>
                            </tbody></table>
                            
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank BCA</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >BEJ, Jakarta</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Satu Prima</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">458-223-3024</td>
                            </tr>
                            </tbody></table>
                            
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
                                <td >Simas Satu Prima</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">8000-33144-200</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Maybank Indonesia </strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Jatinegara, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Satu Prima</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >2-024-166748</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Sinarmas</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >Samanhudi, Jakarta</td>
                            </tr>
                            <tr>
                                <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksa Dana Simas Satu Prima</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">002-6788-285</td>
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
