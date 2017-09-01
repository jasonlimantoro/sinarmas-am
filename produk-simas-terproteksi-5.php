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
            
                            <h2>Simas Terproteksi 5</h2>
                            <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
                            <tbody><tr>
                                <td width="12%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
                                <td width="2%" >:</td>
                                <td width="86%"><?php echo dgettext('navigation', 'Reksa Dana Terproteksi'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong><?php echo gettext('RESIKO'); ?></strong></td>
                                <td >:</td>
                                <td ><?php echo gettext('Rendah'); ?></td>
                            </tr>
                            <tr>
                                <td height="21" ><strong>Factsheet</strong></td>
                                <td >:</td>
                                <td >
                                <?php include("form/factsheet.php") ?>
                                    <input type="hidden" name="product_type" value="SMTP5">
                                </form></td>
                            </tr>
                            </tbody></table>
                            
                        <!--START KINERJA SCRIPT-->    
                        <!--<h5>KINERJA</h5>
                            <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
                            <tr>-->
                        <!--        <td align="center"><a href="../download/kinerja_produk/Simas Syariah Unggulan/Grafik Buat Web (Simas Syariah Unggulan) - YTD.pdf" target="_blank"><u>Kinerja Year to Date</u></a></td>
                        -->        
                                <!--<td align="center"><a href="../download/kinerja_produk/Simas Terproteksi 1/Grafik Buat Web (Simas Terproteksi 1) - Sejak Peluncuran.pdf" target="_blank"><u>Kinerja Sejak Peluncuran</u></a></td>
                                <td align="center"><a href="../download/kinerja_produk/Simas Terproteksi 1/Grafik Buat Web (Simas Terproteksi 1) - 1 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
                                <td align="center"><a href="../download/kinerja_produk/Simas Terproteksi 1/Grafik Buat Web (Simas Terproteksi 1) - 3 Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>-->
                                <!--<td align="center"><a href="../download/kinerja_produk/Simas Syariah Unggulan/Grafik Buat Web (Simas Syariah Unggulan) - YTD.pdf" target="_blank"><u>Kinerja Year to Date</u></a></td>-->
                                <!--<td align="center"><a href="../download/kinerja_produk/Simas Syariah Unggulan/Grafik Buat Web (Simas Syariah Unggulan) - 6 Bulan.pdf" target="_blank"><u>Kinerja 6 Bulan</u></a></td>-->
                            <!--</tr>
                            </table>-->
                        <!--END KINERJA SCRIPT-->
                            
                            <h5>NAB</h5>
                            <?php include("form/nab.php");?>
                            <input name="kode_saham" type="hidden" value="113">
                            <input name="product_name" type="hidden" value="Simas Terproteksi 5">

                            </form>
                            
                            <h5><?php echo gettext('TUJUAN INVESTASI'); ?></h5>
                            <p>Simas Terproteksi 5 <?php echo gettext('bertujuan untuk memberikan proteksi sebesar 100% (seratus persen) terhadap Pokok Investasi atas Unit Penyertaan yang akan dicapai secara keseluruhan pada Tanggal Pelunasan Akhir dan memberikan potensi tambahan hasil investasi pada Tanggal Pembagian Hasil Investasi melalui investasi pada Efek Bersifat Utang yang diterbitkan oleh Pemerintah Republik Indonesia dan/atau korporasi berbadan hukum Indonesia yang telah dijual dalam Penawaran Umum dan/atau diperdagangkan di Bursa Efek Indonesia yang telah diperingkat oleh perusahaan pemeringkat Efek yang terdaftar di OJK dan masuk dalam kategori layak investasi (investment grade) dan Instrumen Pasar Uang dalam negeri dan/atau deposito, sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia.'); ?></p>
                            <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
                            <p>Simas Terproteksi 5 <?php echo gettext('akan berinvestasi sampai dengan Tanggal Pelunasan Akhir dengan komposisi portofolio investasi'); ?> : </p>
                            <ul>
                                <li><?php echo gettext('Minimum 80% (delapan puluh persen) dan maksimum 99% (Sembilan puluh Sembilan persen) dari Nilai Aktiva Bersih pada Efek Bersifat Utang yang diterbitkan oleh Pemerintah Republik Indonesia dan/ atau korporasi berbadan hukum Indonesia yang telah dijual dalam Penawaran Umum dan/atau diperdagangkan di Bursa Efek Indonesia yang telah diperingkat oleh perusahaan pemeringkat Efek yang telah terdaftar di OJK dan masuk dalam kategori layak investasi (investment grade).'); ?></li>

                                <li><?php echo gettext('Minimum 1% (satu persen) dan maksimum 20% (dua puluh persen) dari Nilai Aktiva Bersih pada Instrumen Pasar Uang dalam negeri dan/atau deposito; sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia.'); ?></li>
                            </ul>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3%" height="20" valign="top" >a.</td>
                                <td width="38%" valign="top" ><?php echo gettext('Tanggal Peluncuran'); ?></td>
                                <td width="2%" valign="top" >:</td>
                                <td width="57%" valign="top" >07 September 2016</td>
                            </tr><tr>
                                <td valign="top" >b.</td>
                                <td valign="top" ><?php echo gettext('Investasi Minimum awal'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >Rp. 100.000.000,- (<?php echo gettext('seratus juta rupiah'); ?>)</td>
                            </tr>
                            <!--<tr>
                                <td valign="top" >c.</td>
                                <td valign="top" >Underlying Asset</td>
                                <td valign="top" >:</td>
                                <td valign="top" >- Obligasi PT Waskita Karya (Persero) Tbk<br />
                                (A- Rating by Pefindo)
                                <br />
                                - Obligasi TPS Food<br />
                                (A Rating by Pefindo)
                                </td>
                            </tr>-->
                            <tr>
                                <td valign="top" >c.</td>
                                <td valign="top" ><?php echo gettext('Manajer Investasi'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >PT Sinarmas Asset Management</td>
                            </tr>
                            <tr>
                                <td height="14" valign="top" >d.</td>
                                <td valign="top" ><?php echo gettext('Bank Kustodian'); ?></td>
                                <td valign="top" >:</td>
                                <td valign="top" >PT Bank CIMB Niaga Tbk</td>
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
