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
        
        <?php 
            putenv("LANG=$lang");
            setlocale(LC_ALL, $lang);

            $domain = array (
                'product_general',
                'navigation',
                'DD'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
        <!-- START CONTENT -->
        <!-- SOCIAL MEDIA ICONS FLOATING -->
        <?php 
            include("social_float.php");
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2>Danamas Dollar</h2>
    <table width="100%" border="0" style="line-height:3px; margin-top:5px;">
      <tbody><tr>
        <td width="12%"><strong><?php echo gettext('TIPE'); ?></strong></td>
        <td width="2%">:</td>
        <td width="86%"><?php echo dgettext('navigation','Reksa Dana Pendapatan Tetap'); ?></td>
      </tr>
      <tr>
        <td height="21"><strong><?php echo gettext('RESIKO'); ?></strong></td>
        <td>:</td>
        <td><?php echo gettext('Rendah - Sedang'); ?></td>
      </tr>
      <tr>
        <td height="21"><strong>Factsheet</strong></td>
        <td>:</td>
        <td>
            <?php include("form/factsheet.php") ?>
            <input type="hidden" name="product_type" value="DNDL">
          </form></td>
      </tr>
    </tbody></table>
    <h5><?php echo gettext('KINERJA'); ?></h5>
    <table class="performance-table" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolorlight="#999999" bordercolordark="white" bgcolor="#ededed">
      <tbody><tr>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Dollar/Grafik%20Buat%20Web%20(Danamas%20Dollar)%20-%20YTD.pdf" target="_blank"><u><?php echo gettext('Kinerja Year to Date'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Dollar/Grafik%20Buat%20Web%20(Danamas%20Dollar)%20-%201%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Dollar/Grafik%20Buat%20Web%20(Danamas%20Dollar)%20-%203%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 3 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Dollar/Grafik%20Buat%20Web%20(Danamas%20Dollar)%20-%206%20Bulan.pdf" target="_blank"><u><?php echo gettext('Kinerja 6 Bulan'); ?></u></a></td>
        <td width="15%" align="center"><a href="http://www.sinarmas-am.co.id/download/kinerja_produk/Danamas%20Dollar/Grafik%20Buat%20Web%20(Danamas%20Dollar)%20-%201%20Tahun.pdf" target="_blank"><u><?php echo gettext('Kinerja 1 Tahun'); ?></u></a></td>
      </tr>
    </tbody></table>
    <h5>NAB</h5>
        <?php include("form/nab.php") ?>
        <input name="kode_saham" type="hidden" value="007">
        <input name="product_name" type="hidden" value="Danamas Dollar">
    </form>
    
    <h5><?php echo gettext('KEBIJAKAN INVESTASI'); ?></h5>
    <p><?php echo dgettext('DD','Portofolio Danamas Dollar akan dikelola secara aktif guna mendapatkan pendapatan yang optimal dalam jangka menengah dan panjang melalui penempatan dana investasi minimum 80% (delapan puluh persen) dan maksimum 100% (seratus persen) pada Efek bersifat Hutang serta minimum 0% (nol persen) dan maksimum 20% (dua puluh persen) pada Instrumen Pasar Uang yang mempunyai jatuh tempo kurang dari 1 (satu) tahun, dalam denominasi Dollar Amerika Serikat maupun mata uang asing lainnya.'); ?></p>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td width="3%" height="56" valign="top" >a.</td>
        <td width="38%" valign="top" ><?php echo gettext('Profil Investor'); ?></td>
        <td width="2%" valign="top" >:</td>
        <td width="57%" valign="top"><?php echo dgettext('DD','Investor yang ingin mempunya tingkat pertumbuhan dana yang optimal serta mempunyai fleksibilitas tinggi terhadap perubahan nilai tukar mata uang asing.'); ?></td>
      </tr><tr>
        <td valign="top" >b.</td>
        <td valign="top" ><?php echo gettext('Investasi Minimum awal'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" >US$ 10.000</td>
      </tr>
      <tr>
        <td valign="top" >c.</td>
        <td valign="top" ><?php echo gettext('Investasi Selanjutnya'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" >US$ 1.000</td>
      </tr>
      <tr>
        <td valign="top" >d.</td>
        <td valign="top" ><?php echo gettext('Minimum Penjualan Kembali'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" >US$ 100</td>
      </tr>
      <tr>
        <td height="14" valign="top" >e.</td>
        <td valign="top" ><?php echo gettext('Biaya Pembelian Unit'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" ><?php echo gettext('Maksimum'); ?> 1%</td>
      </tr>
      <tr>
        <td valign="top" >f.</td>
        <td valign="top" ><?php echo gettext('Biaya Penjualan Kembali'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" ><?php echo dgettext('DD','Maksimum 1,00% dari Nilai Penjualan Kembali, untuk penjualan kembali kurang dari 2 tahun. 0,00% apabila Penjualan Kembali dilakukan setelah 2 tahun.'); ?> </td>
      </tr>
      <tr>
        <td valign="top" >g.</td>
        <td valign="top" ><?php echo gettext('Biaya Manajer Investasi'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" ><?php echo gettext('Maksimum'); ?> 1,00% net p.a</td>
      </tr>
      <tr>
        <td valign="top" >h.</td>
        <td valign="top" ><?php echo gettext('Biaya Bank Kustodian'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" ><?php echo gettext('Maksimum'); ?> 0,20% net p.a</td>
      </tr>
      <tr>
        <td valign="top" >i.</td>
        <td valign="top" ><?php echo gettext('Batas Minimum Kepemilikan'); ?></td>
        <td valign="top" >:</td>
        <td valign="top" >US$ 5.000</td>
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
              <td align="center" ><?php echo gettext('Efek Hutang'); ?></td>
              <td align="center" >80%</td>
              <td align="center" >100%</td>
            </tr>
            <tr>
              <td align="center"><?php echo dgettext('DD','Instrumen Pasar Uang, Efek Beragun Aset ataupun Efek Ekuitas ataupun semua turunannya'); ?></td>
              <td align="center">0%</td>
              <td align="center">20%</td>
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
    <p><?php echo dgettext('DD', 'Sampai dengan pukul 12.00 WIB akan diproses dengan NAB  pada akhir hari bursa yang sama. Bila diatas pukul 12.00 WIB akan diproses dengan NAB  pada akhir hari bursa berikutnya.'); ?></p>

    <h5><?php echo gettext('Batas Waktu Penjualan Kembali'); ?> :</h5>
    <p><?php echo dgettext('DD', 'Sampai dengan pukul 12.00 WIB akan diproses dengan NAB pada akhir hari bursa yang sama. Bila diatas pukul 12.00 WIB akan diproses  dengan NAB pada akhir hari bursa berikutnya.'); ?></p>
    <p><?php echo dgettext('DD', 'Konfirmasi dan Hasil Penjualan Kembali : Transfer /  Giro / Pemindahbukuan tidak lebih dari 7 (tujuh) hari bursa.'); ?></p>
    <h5><?php echo gettext('Pembayaran Ditujukan'); ?> :</h5>
    <div style="background-color:#666; margin-top:10px;"><strong style="color:#FFF;">&nbsp;&nbsp;Bank Sinarmas</strong></div>
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
        <td >Reksadana Danamas Dollar</td>
      </tr>
      <tr>
        <td width="26%"><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%">:</td>
        <td width="72%">00000-79774</td>
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
        <td >Reksadana Danamas Dollar</td>
      </tr>
      <tr>
        <td width="26%" ><strong><?php echo gettext('No. Rekening'); ?></strong></td>
        <td width="2%" >:</td>
        <td width="72%" >2-003-11476-0</td>
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
