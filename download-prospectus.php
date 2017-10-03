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
                            <div class="col-md-offset-1 col-md-10 col-xs-12">
                                <h1> <?php echo gettext('Prospektus'); ?> </h1>
                                <div class="list-group">
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Rupiah Plus</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/danamas_rupiah_plus.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-danamas-rupiah-plus" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Stabil</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/danamas_stabil.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-danamas-stabil" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Mantap Plus</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_danamas_mantap_plus.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-danamas-mantap-plus" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Dollar</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/danamas_dollar.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-danamas-dollar" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Instrumen Negara</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_danamas_instrumen_negara.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-danamas-instrumen-negara" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Pasti</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/danamas_pasti.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-danamas-pasti" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Syariah Berkembang</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_syariah_berkembang.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-syariah-berkembang" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Satu</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_satu.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-satu" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Danamas Fleksi</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/danamas_fleksi.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-danamas-fleksi" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Satu Prima</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_satu_prima.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-satu-prima" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Syariah Unggulan</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_syariah_unggulan.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-syariah-unggulan" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Danamas Saham</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_danamas_saham.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-danamas-saham" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Unggulan</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_saham_unggulan.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-saham-unggulan" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Bertumbuh</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/simas_saham_bertumbuh.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-saham-bertumbuh" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading">Simas Saham Maksima</div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a href="http://www.sinarmas-am.co.id/download/kinerja_produk/prospektus/Simas_Saham_Maksima.pdf" target=_blank"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fa fa-line-chart"></i>
                                            <a href="produk-simas-saham-maksima" target=_blank"><?php echo gettext('Kinerja'); ?> </a>
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
