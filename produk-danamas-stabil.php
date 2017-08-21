<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
    </head>
    <body>
        <!-- PRIMARY NAVIGATION -->
        <?php 
            include("nav.php");
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
            putenv("LANG=$lang");
            setlocale(LC_ALL, $lang);

            $domain = array (
                'product_general',
                'navigation',
                'DS'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2>Danamas Stabil</h2>
    <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
      <tbody><tr>
        <td width="12%" ><strong><?php echo gettext('TIPE'); ?></strong></td>
        <td width="2%" >:</td>
        <td width="86%" ><?php echo dgettext('navigation', 'Reksa Dana Pendapatan Tetap'); ?></td>
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
            <input type="hidden" name="product_type" value="DNST">
          </form></td>
      </tr>
    </tbody></table>
    <h5><?php echo gettext('KINERJA'); ?></h5>
    <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
      <tbody><tr>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Stabil/Grafik%20Buat%20Web%20(Danamas%20Stabil)%20-%20YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Stabil/Grafik%20Buat%20Web%20(Danamas%20Stabil)%20-%201%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Stabil/Grafik%20Buat%20Web%20(Danamas%20Stabil)%20-%203%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Stabil/Grafik%20Buat%20Web%20(Danamas%20Stabil)%20-%206%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Stabil/Grafik%20Buat%20Web%20(Danamas%20Stabil)%20-%201%20Tahun.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Tahun'); ?></u></a></td>
      </tr>
    </tbody></table>
    <h5><?php echo gettext('NAB'); ?></h5>
    <?php include("form/nab.php"); ?>
      <input name="kode_saham" type="hidden" value="008">
      <input name="product_name" type="hidden" value="Danamas Stabil">
    </form>
    
    <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
    <p>
    <?php echo dgettext('DS','Portofolio Danamas Stabil akan dikelola secara aktif guna mendapatkan pendapatan yang stabil dan optimal dalam jangka menengah dan panjang melalui penempatan dana investasi minimum 80% (delapan puluh persen) dan maksimum 100% (seratus persen) pada Efek bersifat utang yang diterbitkan oleh perusahaan - perusahaan berbadan hukum Indonesia termasuk Obligasi Pemerintah Republik Indonesia, Obligasi Pemerintah Daerah ("Municipal Bonds") dan Efek bersifat utang lainnya, sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia, serta minimum 0% (nol persen) dan maksimum 20% (dua puluh persen) pada Instrumen Pasar Uang yang mempunyai jatuh tempo kurang dari 1 (satu) tahun, Efek Beragun Aset yang telah dijual dalam Penawaran Umum dan atau Efek Ekuitas beserta semua turunannya yang telah dijual dalam Penawaran Umum dan atau dicatatkan di Bursa Efek baik di dalam maupun di luar negeri. Semua investasi portofolio efek tersebut diatas dapat dalam denominasi Rupiah maupun mata uang asing lainnya. Khusus untuk Obligasi Pemerintah Republik Indonesia, komposisi investasinya dapat mencapai 100% (seratus persen) dengan tetap memperhatikan peraturan perundang-undangan yang berlaku. Danamas Stabil dapat mengadakan perjanjian pembelian kembali (REPO) sehubungan dengan penyelesaian transaksi Efek-efek tersebut di atas, perjanjian pembelian kembali tersebut (REPO) dapat dalam denominasi Rupiah maupun mata uang asing.'); ?>
    </p>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td width="3%" height="56">a.</td>
        <td width="38%"><?php echo gettext('Profil Investor'); ?></td>
        <td width="2%">:</td>
        <td width="57%"><?php echo dgettext('DS','Investor yang ingin mempunyai tingkat pertumbuhan dana yang relatif stabil dan optimal dalam jangka menengah dan panjang dengan tingkat resiko yang relatif rendah.'); ?></td>
      </tr><tr>
        <td>b.</td>
        <td><?php echo gettext('Investasi Minimum awal'); ?></td>
        <td>:</td>
        <td>Rp. 10.000.000,- (<?php echo gettext('sepuluh juta rupiah'); ?>)</td>
      </tr>
      <tr>
        <td>c.</td>
        <td><?php echo gettext('Investasi Selanjutnya'); ?></td>
        <td>:</td>
        <td>Rp. 5.000.000,- (<?php echo gettext('lima juta rupiah'); ?>)</td>
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
        <td><?php echo gettext('Maksimum sebesar'); ?> 1,00 %</td>
      </tr>
      <tr>
        <td>f.</td>
        <td><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
        <td>:</td>
        <td><?php echo gettext('Maksimum sebesar'); ?> 1,50%</td>
      </tr>
      <tr>
        <td>g.</td>
        <td><?php echo gettext('Biaya Manajer Investasi'); ?></td>
        <td>:</td>
        <td><?php echo gettext('Maksimum sebesar'); ?> 1,50% net p.a</td>
      </tr>
      <tr>
        <td>h.</td>
        <td><?php echo gettext('Biaya Bank Kustodian'); ?></td>
        <td>:</td>
        <td><?php echo gettext('Maksimum sebesar'); ?> 0,25% net p.a</td>
      </tr>
      <tr>
        <td>i.</td>
        <td><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
        <td>:</td>
        <td>Rp. 5.000.000,- (<?php echo gettext('lima juta rupiah'); ?>)</td>
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
              <td align="center" style="font-family:arial; font-size:12px; background-color:#CCC;"><?php echo dgettext('DS', 'Efek Hutang'); ?></td>
              <td align="center" style="font-family:arial; font-size:12px; background-color:#CCC;">80%</td>
              <td align="center" style="font-family:arial; font-size:12px; background-color:#CCC;">100%</td>
            </tr>
            <tr>
              <td align="center" >
              <?php echo dgettext('DS','Instrumen Pasar Uang, Efek Beragun Aset ataupun Efek Ekuitas beserta semua turunannya'); ?></td>
              <td align="center" >0%</td>
              <td align="center" >20%</td>
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
    <p>
    <?php echo dgettext('DS','Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama. Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.'); ?></p>

    <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
    <p><?php echo dgettext('DS', 'Sampai dengan pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama. Bila diatas pukul 13.00 WIB akan diproses dengan NAB pada akhir hari bursa berikutnya.'); ?> </p>
    <p><?php echo dgettext('DS', 'Konfirmasi dan Hasil Penjualan Kembali : Transfer / Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) hari bursa.'); ?></p>
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
        <td >Reksa Dana Danamas Stabil</td>
      </tr>
      <tr>
        <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%">:</td>
        <td width="72%">458-223-3075</td>
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
        <td >Danamas Stabil</td>
      </tr>
      <tr>
        <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%">:</td>
        <td width="72%">8000-32612-500</td>
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
        <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
        <td >:</td>
        <td >Reksadana Danamas Stabil</td>
      </tr>
      <tr>
        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%" >:</td>
        <td width="72%" >2-013-26323-2</td>
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
        <td >Reksadana Danamas Stabil</td>
      </tr>
      <tr>
        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%" >:</td>
        <td width="72%" >104-000-4032798</td>
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
        <td ><strong><?php echo gettext('Atas Nama'); ?></strong></td>
        <td >:</td>
        <td >Reksadana Danamas Stabil</td>
      </tr>
      <tr>
        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%" >:</td>
        <td width="72%" >00000-79804</td>
      </tr>
    </tbody></table>
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
    </body>
</html>
