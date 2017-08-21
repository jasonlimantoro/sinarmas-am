<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
    </head>
    <body>
        <?php
            include("nav.php");
            include("carousel.php")
        ?>
        <?php 
            $domain = array (
                'about'
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
                    <h2><?php echo gettext('Tentang Kami'); ?></h2>
                    <p><?php echo gettext('PT Sinarmas Asset Management merupakan anak perusahaan dari PT Sinarmas Sekuritas, sebagai salah satu perusahaan sekuritas terkemuka dan berpengalaman di bidang pasar modal Indonesia lebih dari 23 tahun. PT Sinarmas Asset Management berdiri sejak tanggal 9 April 2012 dengan izin Bapepam-LK No. KEP-03/BL/MI/2012 dimana PT Sinarmas Asset Management fokus pada pengelolaan aset yang profesional dan pruden serta memberikan pelayanan yang terbaik kepada nasabahnya.'); ?></p>
                    <p><?php echo gettext('PT Sinarmas Asset Management menyediakan berbagai layanan produk investasi  seperti Reksa Dana Saham, Campuran, Pendapatan Tetap dan Pasar Uang  dan juga produk Discretionary Fund Eksklusif.'); ?></p>
                    <h5><?php echo gettext('Bidang Usaha'); ?></h5>
                    <ul>
                        <li><?php echo gettext('Reksa Dana'); ?></li>
                        <li><?php echo gettext('Kontrak Pengelolaan Dana'); ?></li>
                    </ul>
                    
                    <h5><?php echo gettext('Dewan Komisaris'); ?></h5>
                    <ul>
                        <li>Doddy Susanto</li>
                        <li>Howen Widjaja</li>
                    </ul>
                   
                    <h5><?php echo gettext('Dewan Direksi'); ?></h5>
                    <ul>
                        <li>Hermawan Hosein</li>
                        <li>Alex Setyawan WK</li>
                    </ul>
                    
                </div>
                <!-- SIDEBAR STARTS HERE -->
                <?php 
                    include("sidebar.php");
                ?>
                <!-- SIDEBAR ENDS HERE -->
            </div>
        </div>
        <!-- FOOTER STARTS HERE -->
        <?php 
            include("footer.php");
        ?>
        <!-- FOOTER ENDS HERE -->

    <?php
        include("jsload.php");
    ?>
    </body>


</html>