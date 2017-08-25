<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <?php include "nav_structure.php";?>

        <?php 
            $domain = array (
                'product_general',
                'navigation',
                'SDMP'
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
                            <h2>Simas Danamas Mantap Plus</h2>
                            <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                            <tbody><tr>
                                <td width="12%"><strong><?php echo gettext('TIPE'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="86%"><?php echo dgettext('navigation','Reksa Dana Pendapatan Tetap'); ?></td>
                            </tr>
                            <tr>
                                <td height="21"><strong><?php echo gettext('RESIKO'); ?></strong></td>
                                <td>:</td>
                                <td><?php echo gettext('Rendah'); ?></td>
                            </tr>
                            <tr>
                                <td height="21"><strong>Factsheet</strong></td>
                                <td>:</td>
                                <td>
                                    <?php include("form/factsheet.php") ?>
                                    <input type="hidden" name="product_type" value="DMPL">
                                </form></td>
                            </tr>
                            </tbody></table>
                            <h5><?php echo gettext('KINERJA'); ?></h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                            <tbody><tr>
                                <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Danamas%20Mantap%20Plus/Grafik%20Buat%20Web%20(Danamas%20Mantap%20Plus)%20-%20YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
                                <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Danamas%20Mantap%20Plus/Grafik%20Buat%20Web%20(Danamas%20Mantap%20Plus)%20-%201%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Danamas%20Mantap%20Plus/Grafik%20Buat%20Web%20(Danamas%20Mantap%20Plus)%20-%203%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Danamas%20Mantap%20Plus/Grafik%20Buat%20Web%20(Danamas%20Mantap%20Plus)%20-%206%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
                                <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Simas%20Danamas%20Mantap%20Plus/Grafik%20Buat%20Web%20(Danamas%20Mantap%20Plus)%20-%201%20Tahun.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Tahun'); ?></u></a></td>
                            </tr>
                            </tbody></table>
                            <h5>NAB</h5>
                            <?php include("form/nab.php"); ?>
                            <input name="kode_saham" type="hidden" value="019">
                            <input name="product_name" type="hidden" value="Simas Danamas Mantap Plus">
                            
                            </form>
                            
                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <p>
                            <?php echo dgettext('SDMP', 'Portofolio Danamas Mantap Plus akan dikelola secara aktif guna mendapatkan pendapatan yang optimal dalam jangka menengah dan panjang melalui penempatan dana investasi minimum 80% (delapan puluh persen) dan maksimum 98% (sembilan puluh delapan persen) pada Efek bersifat utang yang diterbitkan oleh perusahaan-perusahaan berbadan hukum Indonesia dan atau Obligasi Pemerintah Republik Indonesia, Obligasi Pemerintah Daerah ("Municipal Bonds") dan atau Efek bersifat utang lainnya, sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia, serta minimum 2% (dua persen) dan maksimum 20% (dua puluh persen) pada Instrumen Pasar Uang yang mempunyai jatuh tempo kurang dari 1 (satu) tahun, Efek ekuitas dan atau Efek Beragun Aset yang diterbitkan sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia. Khusus untuk Obligasi Pemerintah Republik Indonesia, maka komposisi investasinya dapat mencapai 100% (seratus persen) dengan tetap memperhatikan perundang-undangan yang berlaku.'); ?>
                            </p>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="56">a.</td>
                                <td width="38%"><?php echo gettext('Profil Investor'); ?></td>
                                <td width="2%">:</td>
                                <td width="57%"><?php echo dgettext('SDMP', 'Investor yang ingin mempunyai tingkat pertumbuhan dana yang relatif stabil dan optimal dalam jangka menengah dan panjang dengan tingkat resiko yang relatif rendah.'); ?>
                                </td>
                            </tr><tr>
                                <td>b.</td>
                                <td><?php echo gettext('Investasi Minimum awal'); ?></td>
                                <td>:</td>
                                <td>Rp. 100.000.000,- (<?php echo gettext('seratus juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td><?php echo gettext('Investasi Selanjutnya'); ?></td>
                                <td>:</td>
                                <td>Rp. 50.000.000,- (<?php echo gettext('lima puluh juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td>d.</td>
                                <td><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
                                <td>:</td>
                                <td>Rp. 1.000.000,- (<?php echo gettext('satu juta rupiah'); ?>)</td>
                            </tr>
                            <tr>
                                <td height="14">e.</td>
                                <td><?php echo gettext('Biaya Pembelian Unit'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum sebesar'); ?> 1,00%</td>
                            </tr>
                            <tr>
                                <td>f.</td>
                                <td><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum sebesar'); ?> 1,00%</td>
                            </tr>
                            <tr>
                                <td>g.</td>
                                <td><?php echo gettext('Biaya Manajer Investasi'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum sebesar'); ?> 1,00% net p.a</td>
                            </tr>
                            <tr>
                                <td>h.</td>
                                <td><?php echo gettext('Biaya Bank Kustodian'); ?></td>
                                <td>:</td>
                                <td><?php echo gettext('Maksimum sebesar'); ?> 0,20% net p.a </td>
                            </tr>
                            <tr>
                                <td>i.</td>
                                <td><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
                                <td>:</td>
                                <td>Rp. 100.000.000,- (<?php echo gettext('seratus juta rupiah'); ?>)</td>
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
                                    <td align="center"><?php echo gettext('Efek Hutang'); ?></td>
                                    <td align="center">80%</td>
                                    <td align="center">98%</td>
                                    </tr>
                                    <tr>
                                    <td align="center"><?php echo dgettext('SDMP', 'Instrumen Pasar Uang, Efek Ekuitas dan/atau Efek Beragun Aset'); ?></td>
                                    <td align="center">2%</td>
                                    <td align="center">20%</td>
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
                            <p><?php echo dgettext('SDMP','Sampai dengan pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama. Bila diatas pukul 12.00 WIB akan diproses dengan NAB pada akhir hari  bursa berikutnya.'); ?></p>

                            <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
                            <p>
                            <?php echo dgettext('SDMP','Sampai dengan pukul 12.00 WIB akan diproses dengan NAB pada akhir hari  bursa yang sama. Bila diatas pukul 12.00 WIB akan diproses dengan NAB pada  akhir hari bursa berikutnya.'); ?></p>

                            <p><?php echo dgettext('SDMP', 'Konfirmasi dan Hasil Penjualan Kembali : Transfer / Giro /  Pemindahbukuan tidak lebih dari 7 (tujuh) hari bursa.'); ?></p>

                            <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
                            <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank CIMB Niaga</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td>:</td>
                                <td>Sudirman, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td>:</td>
                                <td>Simas Danamas Mantap Plus</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">8000-32717-200</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Maybank Indonesia </strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td>:</td>
                                <td>Thamrin, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td>:</td>
                                <td>Reksadana Simas Danamas Mantap Plus</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">2-003-037596</td>
                            </tr>
                            </tbody></table>
                            <div  style="background-color:#666"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Sinarmas</strong></div>
                            <br>
                            <table class="payment-instruction-table" width="100%" border="0" style="line-height:12px; margin-top:-15px;">
                            <tbody><tr>
                                <td><strong><?php echo gettext('Cabang'); ?></strong></td>
                                <td>:</td>
                                <td>Thamrin, Jakarta</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo gettext('Atas Nama'); ?></strong></td>
                                <td>:</td>
                                <td>Reksadana Simas Danamas Mantap Plus</td>
                            </tr>
                            <tr>
                                <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
                                <td width="2%">:</td>
                                <td width="72%">00005-49789</td>
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
