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
            // putenv("LANG=$lang");
            // setlocale(LC_ALL, $lang);

            $domain = array (
                'vision_mission'
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
                            <h1><?php echo gettext('Visi dan Misi'); ?></h1>
                            <h3><?php echo gettext('Visi'); ?></h3>
                            <p><?php echo gettext('PT Sinarmas Asset Management selalu berinovasi dan mengembangkan produk – produk investasi yang ada guna memberikan hasil yang optimal kepada nasabah, serta dapat disesuaikan dengan kebutuhan nasabah dan calon nasabah baik nasabah individu maupun nasabah korporasi, lembaga keuangan, asuransi dan dana pensiun.'); ?></p>
                            <p><?php echo gettext('PT Sinarmas Asset Management selalu berusaha untuk menjadi partner yang baik bagi nasabah dan calon nasabahnya dalam berinvestasi dengan terus meningkatkan kualitas dan jangkauan pelayanan melalui seluruh kantor cabang yang ada.'); ?></p>
                            <h3><?php echo gettext('Misi'); ?></h3>
                            

                            <ol>
                                <li> <?php echo gettext('Memberikan kepercayaan dan kenyamanan bagi nasabah dengan menggunakan sumber daya manusia yang handal dan professional.'); ?></li>
                                <li><?php echo gettext('Menyediakan beragam produk investasi yang menguntungkan bagi para nasabah dan investor.'); ?> </li>
                                <li><?php echo gettext('Meningkatkan teknologi informasi dan komunikasi untuk mendukung pelayanan kepada nasabah.'); ?> </li>
                                <li><?php echo gettext('Melakukan kerjasama dengan mitra usaha dan aliansi bisnis didalam maupun luar negeri.'); ?> </li>
                            </ol>
                            
                        </div>
                        
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

        

    <?php include "jsload.php"; ?>
    </body>


</html>