<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php 
            include "nav_structure.php";
        ?>
        
        <?php 
            $domain = array (
                'product_general',
                'navigation',
                'SS'
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
                            <h2>Simas Satu</h2>
                            <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                            <tbody><tr>
                                <td width="13%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="85%" ><?php echo dgettext('navigation', 'Reksa Dana Campuran'); ?></td>
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
                                    <?php include("form/factsheet.php");?>
                                    <input type="hidden" name="product_type" value="SMST">

                                </form></td>
                            </tr>
                            </tbody></table>
                            
                            
                            <h5><?php echo gettext('KINERJA'); ?></h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                        <tbody><tr>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Satu/Grafik%20Buat%20Web%20(Simas%20Satu)%20-%20YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Satu/Grafik%20Buat%20Web%20(Simas%20Satu)%20-%201%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Satu/Grafik%20Buat%20Web%20(Simas%20Satu)%20-%203%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Satu/Grafik%20Buat%20Web%20(Simas%20Satu)%20-%206%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
                            <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Satu/Grafik%20Buat%20Web%20(Simas%20Satu)%20-%201%20Tahun.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Tahun'); ?></u></a></td>
                        </tr>
                        </tbody></table>

                        <h5>NAB</h5>
                        <?php include("form/nab.php"); ?>
                            <input name="kode_saham" type="hidden" value="002">
                            <input name="product_name" type="hidden" value="Simas Satu">              
                        </form>

                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <p><?php echo dgettext('SS', 'Portfolio Simas Satu akan dikelola secara aktif guna mendapatkan pendapatan optimal melalui investasi pada Efek Ekuitas sebesar 10% - 79%, Pendapatan Tetap 2% - 79% dan instrumen Pasar Uang sebesar 2% - 79%, baik dalam denominasi Rupiah maupun dalam mata uang asing.'); ?></p>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="56">a.</td>
                                <td width="38%"><?php echo gettext('Profil Investor'); ?></td>
                                <td width="2%">:</td>
                                <td width="57%"><?php echo dgettext('SS', 'Investor yang suka berinvestasi di saham dan menginginkan tingkat pengembalian investasi yang optimal dalam jangka panjang.'); ?></td>
                            </tr><tr>
                                <td>b.</td>
                                <td><?php echo gettext('Investasi Minimum awal'); ?></td>
                                <td>:</td>
                                <td>Rp. 200.000,- (<?php echo gettext('dua ratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td><?php echo gettext('Investasi Selanjutnya'); ?></td>
                                <td>:</td>
                                <td>Rp. 200.000,- (<?php echo gettext('dua ratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td>d.</td>
                                <td><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
                                <td>:</td>
                                <td>Rp. 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td height="14">e.</td>
                                <td><?php echo gettext('Biaya Pembelian Unit'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum'); ?> 1,00%</td>
                            </tr>
                            <tr>
                                <td>f.</td>
                                <td><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum'); ?> 1,5%</td>
                            </tr>
                            <tr>
                                <td>g.</td>
                                <td><?php echo gettext('Biaya Manajer Investasi'); ?></td>
                                <td>:</td>
                                <td>2,00% net p.a</td>
                            </tr>
                            <tr>
                                <td>h.</td>
                                <td><?php echo gettext('Biaya Bank Kustodian'); ?></td>
                                <td>:</td>
                                <td>0,25% net p.a</td>
                            </tr>
                            <tr>
                                <td>i.</td>
                                <td><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
                                <td>:</td>
                                <td>Rp. 100.000,- (<?php echo gettext('seratus ribu rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td>j.</td>
                                <td height="22"><?php echo gettext('Komposisi Portfolio'); ?></td>
                                <td>:</td>
                                <td><table class="portfolio-table" width="100%" border="1" cellspacing="1" cellpadding="0">
                                    <tbody><tr>
                                    <td width="61%" align="center"><strong><?php echo gettext('JENIS EFEK'); ?></strong></td>
                                    <td width="17%" align="center"><strong>MIN</strong></td>
                                    <td width="19%" align="center"><strong>MAX</strong></td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Efek Ekuitas'); ?></td>
                                    <td align="center" >10%</td>
                                    <td align="center" >79%</td>
                                    </tr>
                                    <tr>
                                    <td align="center" ><?php echo gettext('Pendapatan Tetap'); ?></td>
                                    <td align="center" >2%</td>
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
                                <td>k.</td>
                                <td><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali'); ?> </td>
                                <td>:</td>
                                <td><?php echo gettext('Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('Batas Waktu Pembelian'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                            
                            <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                            <?php echo gettext('<p>Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama.</p><p>Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.</p>'); ?>
                            <p><?php echo gettext('Konfirmasi dan Hasil Penjualan Kembali :'); ?> <?php echo gettext('Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) Hari Bursa.'); ?></p>
                            <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                            
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
                                <td >Reksa Dana Simas Satu</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">458-223-3016</td>
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
                                <td >Reksadana Simas Satu</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">8000-29207-200</td>
                            </tr>
                            </tbody></table>
                            
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Maybank Indonesia </strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td ><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td >:</td>
                                <td >KCU Thamrin, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td >:</td>
                                <td >Reksadana Simas Satu</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >2-003-06150-1</td>
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
                                <td >Reksadana Simas Satu</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >104-000-1025860</td>
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
                                <td >Reksadana Simas Satu</td>
                            </tr>
                            <tr>
                                <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="72%" >00000-79782</td>
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
