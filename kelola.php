<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <?php
            include "nav_structure.php";
            include("carousel.php")
        ?>
        <?php 
            $domain = array (
                'kelola'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-xs-12">
                    <h1> Kelola </h1>
                    <h3> <?php echo gettext('Apa itu Kelola?'); ?> </h3>
                    <p><?php echo gettext('Kelola adalah Aplikasi digital untuk berinvestasi reksa dana tanpa perantara, dimana saja dan kapan saja. Melalui aplikasi ini, kami bercita - cita untuk memajukan literasi keuangan Indonesia sehingga setiap orang memiliki kesempatan untuk meningkatkan standar hidup melalui investasi yang mudah.'); ?></p>
                    
                    <h3> <?php echo gettext('Keuntungan Berinvestasi Reksa Dana Melalui Kelola'); ?> </h3>
                    <ol type="1">
                        <li><?php echo gettext('Mulai dari'); ?> Rp 100,000.00 </li>
                        <li><?php echo gettext('Gratis buat akun investasi'); ?></li>
                        <li><?php echo gettext('Pantau investasi setiap hari'); ?></li>
                        <li><?php echo gettext('Tanpa komitmen jangka waktu'); ?></li>
                        <li><?php echo gettext('Produk pilihan resiko rendah'); ?></li>
                        <li><?php echo gettext('Produk terdaftar di OJK'); ?></li>
                    </ol>

                    <p><?php echo gettext('Untuk informasi lebih lanjut dapat dilihat di <a href="http://www.kelolaapp.com" target="_blank">www.kelolaapp.com</a>'); ?></p>

                </div>
                <!-- SIDEBAR STARTS HERE -->
                <?php 
                    include("sidebar.php");
                ?>
                <!-- SIDEBAR ENDS HERE -->
            </div>
        </div>
        
        <?php 
            include("footer.php");
        ?>
        

    <?php
        include("jsload.php");
    ?>
    </body>


</html>