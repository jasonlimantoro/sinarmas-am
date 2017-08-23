<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <?php include "nav_structure.php"; ?>

        <?php 
            // putenv("LANG=$lang");
            // setlocale(LC_ALL, $lang);

            $domain = array (
                'management'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
        <div id="page-wrapper">
            <?php include "nav_display.php" ?>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <h3><?php echo gettext('Dewan Komisaris'); ?></h3>
                            <p><strong style="color:#900">Doddy Susanto – <?php echo gettext('Komisaris Utama'); ?></strong><br>
                            <?php echo gettext('Doddy Susanto Lulusan Fakultas Ilmu Sosial Politik, Universitas Katolik Parahyangan, Bandung, tahun 1984. Memiliki pengalaman  bekerja pada BANKAP (1984 - 1986), Bank Internasional Indonesia (1986 - 1999) terakhir menjabat sebagai Consumer Banking Director. Kemudian sebagai Chief Operating Officer pada PT  Asuransi Jiwa Eka Life (1999 - 2000). Saat ini menduduki posisi sebagai Direktur Utama pada PT Sinar Mas Multifinance sejak tahun 2000 dan  saat ini beliau menjabat sebagai Komisaris Utama pada PT Sinarmas Asset Management sejak April 2012.'); ?></p>
                            
                            <p><strong style="color:#900">Howen Widjaja – <?php echo gettext('Komisaris'); ?></strong><br>
                            <?php echo gettext('Howen Widjaja meraih gelar Master of Business Administration dari St. John’s University, 8000 Utopia Parkway, Queens, New York pada tahun 2007. Memiliki pengalaman bekerja pada Perusahaan ACE Insurance sebagai Global Research &amp; Development Intern di tahun 2006, pada tahun 2007 bekerja pada Merrill Lynch sebagai Market Risk Management, pada tahun  2008 bekerja pada PT Asuransi Sinar Mas dengan jabatan sebagai Human Capital &amp; Asset Management Director. Sejak tahun 2009 bekerja pada PT Sinar Mas Multiartha Tbk  sebagai Direktur, dan pada tahun 2010 – saat ini beliau menjabat sebagai Komisaris PT Sinar Mas Multiartha Tbk . Dan saat ini beliau menjabat sebagai Komisaris PT Sinarmas Asset Management sejak April 2012.'); ?></p>
                            
                            
                            <h3><?php echo gettext('Dewan Direksi'); ?></h3>
                            <p><strong style="color:#900">Hermawan Hosein – <?php echo gettext('Direktur Utama'); ?></strong><br>
                            <?php echo gettext('Hermawan Hosein meraih gelar Bachelor of Mathematical and Computer Sciences dari University of  Western Australia - Perth, Western Australia. Memiliki pengalaman bekerja pada PT Information For Competitive Advantage sebagai Software Engineer sejak tahun 1995 – 1996, pada PT  Askomindo Dinamika sebagai System Support Manager dari tahun 1996 – 1997, PT Bank Internasional Indonesia pada tahun 1998-1999 sebagai Kepala Bagian Electronic Banking, Sejak tahun 2000 - 2001 bekerja pada PT Sinarmas Multiartha dengan posisi terakhir sebagai General Manager. Pada tahun 2002 - 2003 menjabat sebagai General Manager PT Sinarmas Sekuritas, terakhir beliau menjabat sebagai Direktur PT Sinarmas Sekuritas pada tahun&nbsp; 2003 – April 2012. Saat ini beliau menjabat sebagai Direktur Utama PT Sinarmas Asset Management sejak April 2012, dan telah memiliki izin sebagai Manajer Investasi dari Bapepam dengan no. KEP-05/PM/WMI/2003, dan berlisensi sebagai Wakil Penjamin Emisi Efek dengan KEP-33/BL/WPEE/2010.'); ?> </p>
                            
                            <p><strong style="color:#900">Alex Setyawan WK – <?php echo gettext('Direktur'); ?></strong><br>
                            <?php echo gettext('Alex Setyawan WK meraih gelar Bachelor of Science Industrial System and Engineering dari Ohio State University, Columbus, Ohio, USA. Memiliki pengalaman bekerja pada PT Bank Internasional Indonesia Tbk. selama 4 tahun, khususnya pada Divisi Corporate Banking. Pada tahun 2000 – 2001 bekerja pada PT Sinarmas Sekuritas sebagai Asisten Manager Corporate, tahun 2001 – 2012 menjabat sebagai Fund Manager pada PT Sinarmas Sekuritas dan saat ini beliau menjabat sebagai Direktur PT Sinarmas Asset Management sejak April 2012. Beliau telah banyak mengikuti berbagai seminar dan pelatihan di bidang keuangan dan pasar modal, dan telah mendapatkan izin sebagai Wakil Manajer Investasi dari BAPEPAM dengan no. KEP-119/PM/WMI/2005.'); ?></p>
                            
                            <p><strong style="color:#900">Jamial Salim – <?php echo gettext('Direktur'); ?></strong><br>
                            <?php echo gettext('Jamial Salim meraih gelar sarjana dari Binus University, Jakarta, Indonesia. Memiliki pengalaman kerja selama 5 tahun pada PT Bank Internasional Indonesia Tbk., khususnya pada Divisi Information Technology. Pada tahun 2000 – 2004 beliau bergabung dengan PT Sinarmas Sekuritas di divisi Internal Control, di tahun 2004 – 2012 beliau menjabat sebagai Associate Director PT Sinarmas Sekuritas, Sejak tahun 2012 Beliau menjabat sebagai Direktur PT Sinarmas Asset Management, beliau telah banyak mengikuti berbagai seminar dan pelatihan di bidang keuangan dan pasar modal. dan telah mendapatkan izin sebagai Wakil Perantara Pedagang Efek dengan No. KEP-284/BL/WPPE/2010 dan Wakil Manajer Investasi dari BAPEPAM dan LK dengan Surat Keputusan Ketua BAPEPAM No. KEP-66/BL/WMI/2012.'); ?></p>
                        </div>
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>
    
    <?php include "jsload.php"; ?>
    </body>
</html>
