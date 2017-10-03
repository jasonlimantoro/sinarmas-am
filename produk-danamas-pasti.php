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
                'DP'
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

                            <h1>Danamas Pasti</h1>
                    <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                    <tbody><tr>
                        <td width="13%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
                        <td width="2%" >:</td>
                        <td width="85%" ><?php echo dgettext('navigation', 'Reksa Dana Pendapatan Tetap'); ?></td>
                    </tr>
                    <tr>
                        <td height="21" ><strong><?php echo gettext('RESIKO'); ?></strong></td>
                        <td >:</td>
                        <td ><?php echo gettext('Sedang - Rendah'); ?></td>
                    </tr>
                    <tr>
                        <td height="21" ><strong>Factsheet</strong></td>
                        <td >:</td>
                        <td >
                                <?php include("form/factsheet.php"); ?>
                                <input type="hidden" name="product_type" value="PASTI">

                            </form></td>
                    </tr>
                    </tbody></table>
                    
                    
                    <h5><?php echo gettext('KINERJA'); ?></h5>
                    <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                        <tbody><tr>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Pasti/Grafik%20Buat%20Web%20(Danamas%20Pasti)%20-%20YTD.pdf" target="_blank"><?php echo gettext('Kinerja Year to Date'); ?></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Pasti/Grafik%20Buat%20Web%20(Danamas%20Pasti)%20-%201%20Bulan.pdf" target="_blank"><?php echo gettext('Kinerja 1 Bulan'); ?></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Pasti/Grafik%20Buat%20Web%20(Danamas%20Pasti)%20-%203%20Bulan.pdf" target="_blank"><?php echo gettext('Kinerja 3 Bulan'); ?></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Pasti/Grafik%20Buat%20Web%20(Danamas%20Pasti)%20-%206%20Bulan.pdf" target="_blank">Kinerja 6 Bulan</a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Pasti/Grafik%20Buat%20Web%20(Danamas%20Pasti)%20-%201%20Tahun.pdf" target="_blank">Kinerja 1 Tahun</a></td>
                        </tr>
                        </tbody></table>

                    <h5><?php echo gettext('NAB'); ?></h5>
                        <?php include("form/nab.php"); ?>
                        <input name="kode_saham" type="hidden" value="005"><br><br>
                        <input name="product_name" type="hidden" value="Danamas Pasti">     
                        </form>

                    <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                    <p><?php echo dgettext('DP', 'Portofolio Danamas Pasti akan dikelola secara aktif guna mendapatkan pendapatan yang stabil dan optimal dalam jangka menengah dan panjang melalui penempatan dana investasi umum 80% (delapan puluh persen) dan maksimum 100% (seratus persen) pada Efek bersifat utang yang diterbitkan oleh perusahaan-perusahaan berbadan hukum Indonesia termasuk Obligasi Pemerintah Republik Indonesia, Obligasi Pemerintah Daerah ("Municipal Bonds") dan Efek bersifat utang lainnya sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia serta minimum 0% (nol persen) dan maksimum 20% (dua puluh persen) pada Instrumen Pasar Uang yang mempunyai jatuh tempo kurang dari 1 (satu) tahun. Khusus untuk Obligasi Pemerintah Republik Indonesia, termasuk Obligasi Pemerintah Republik Indonesia yang dilengkapi dengan REPO (Repurchase Agreement), maka komposisi investasinya dapat mencapai 100% (seratus persen) dengan tetap memperhatikan peraturan perundang-undangan yang berlaku.'); ?></p>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td width="3%" height="56" valign="top" >a.</td>
                        <td width="38%" valign="top" ><?php echo gettext('Profil Investor'); ?></td>
                        <td width="2%" valign="top" >:</td>
                        <td width="57%" valign="top" ><?php echo dgettext('DP', 'Investor yang ingin memperoleh pendapatan yang stabil dan optimal dalam jangka menengah dan panjang dengan tingkat risiko yang relatif rendah.'); ?></td>
                    </tr><tr>
                        <td valign="top" >b.</td>
                        <td valign="top" ><?php echo gettext('Investasi Minimum awal'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" >Rp. 500.000,- (<?php echo gettext('lima ratus ribu rupiah'); ?>)</td>
                    </tr>
                    <tr>
                        <td valign="top" >c.</td>
                        <td valign="top" ><?php echo gettext('Investasi Selanjutnya'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" >Rp. 500.000,- (<?php echo gettext('lima ratus ribu rupiah'); ?>)</td>
                    </tr>
                    <tr>
                        <td valign="top" >d.</td>
                        <td valign="top" ><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" >Rp 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
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
                        <td valign="top" >Biaya  Pengalihan</td>
                        <td valign="top" >:</td>
                        <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,5%</td>
                    </tr>
                    <tr>
                        <td valign="top" >h.</td>
                        <td valign="top" ><?php echo gettext('Biaya Manajer Investasi'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 1,00% net p.a</td>
                    </tr>
                    <tr>
                        <td valign="top" >i.</td>
                        <td valign="top" ><?php echo gettext('Biaya Bank Kustodian'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" ><?php echo gettext('Maksimum sebesar'); ?> 0,25% net p.a</td>
                    </tr>
                    <tr>
                        <td valign="top" >j.</td>
                        <td valign="top" ><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
                        <td valign="top" >:</td>
                        <td valign="top" >Rp. 500.000,- (<?php echo gettext('lima ratus ribu rupiah'); ?>)</td>
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
                            <td align="center" ><?php echo gettext('Efek Hutang'); ?></td>
                            <td align="center" >80%</td>
                            <td align="center" >100%</td>
                            </tr>
                            <tr>
                            <td align="center" ><?php echo gettext('Instrumen Pasar Uang'); ?></td>
                            <td align="center" >0%</td>
                            <td align="center" >20%</td>
                            </tr>
                        </tbody></table></td>
                    </tr>
                    <tr>
                        <td valign="top" >l.</td>
                        <td valign="top" ><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali'); ?> </td>
                        <td valign="top" >:</td>
                        <td valign="top" ><?php echo gettext('Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></td>
                    </tr>
                    </tbody></table>
                    <h5><?php echo gettext('Batas Waktu Pembelian'); ?> :</h5>
                    <?php echo dgettext('DP', '<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                    <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                    <?php echo dgettext('DP', '<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                    <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                    
                    <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank BCA</strong></div>
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
                        <td >Reksa dana Danamas Pasti</td>
                    </tr>
                    <tr>
                        <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                        <td width="2%">:</td>
                        <td width="72%">458-223-3083</td>
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
                        <td >Danamas Pasti</td>
                    </tr>
                    <tr>
                        <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                        <td width="2%">:</td>
                        <td width="72%">8000-33220-100</td>
                    </tr>
                    </tbody></table>
                    
                    <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Maybank Indonesia </strong></div>
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
                        <td >Reksa dana Danamas Pasti</td>
                    </tr>
                    <tr>
                        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                        <td width="2%" >:</td>
                        <td width="72%" >2-003-06475-0</td>
                    </tr>
                    </tbody></table>
                    
                    <!--<div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Mandiri</strong></div>
                    <br />
                    <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                    <tr>
                        <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                        <td >:</td>
                        <td >BEI, Jakarta</td>
                    </tr>
                    <tr>
                        <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                        <td >:</td>
                        <td >Reksa dana Danamas Pasti</td>
                    </tr>
                    <tr>
                        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                        <td width="2%" >:</td>
                        <td width="72%" >104-000-4489279</td>
                    </tr>
                    </table>-->
                    
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
                        <td >Reksa dana Danamas Pasti</td>
                    </tr>
                    <tr>
                        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                        <td width="2%" >:</td>
                        <td width="72%" >00039-59155</td>
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
