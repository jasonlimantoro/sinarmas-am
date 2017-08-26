<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>
        <?php 
            $domain = array (
                'download'
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
                    <div class="download-prospectus">
                        <div class="row">
                            <div class="col-md-8 col-xs-12">
                                <h1> <?php echo gettext('Prospektus'); ?> </h1>
                                <div class="list-group">
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Rupiah Plus</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_danamas_rupiah_plus.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Stabil</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_danamas_stabil.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Mantap Plus</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_danamas_mantap_plus.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Dollar</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_danamas_dollar.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Instrumen Negara</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_danamas_instrumen_negara.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Pasti</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_danamas_pasti.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Syariah Berkembang</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_syariah_berkembang.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Satu</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_satu.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Fleksi</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_danamas_fleksi.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Satu Prima</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_satu_prima.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Syariah Unggulan</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_syariah_unggulan.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Saham</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_danamas_saham.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Unggulan</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_saham_unggulan.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Bertumbuh</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_saham_bertumbuh.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Maksima</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk_simas_saham_maksima.php"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
                                
                                </div>
    
    
    
    
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

    <?php include "jsload.php"; ?>
    </body>
</html>
