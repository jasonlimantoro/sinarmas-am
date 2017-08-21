<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
        <style>
        .list-group a:hover {
            color: #900;
        }
        .list-group a {
            color: black;
        }
        </style>
    </head>
    <body>
        <!-- PRIMARY NAVIGATION -->
        <?php 
            include("nav_structure.php");
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
            $domain = array (
                'download'
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
                    <h1> <?php echo gettext('Prospektus'); ?> </h1>
                    <div class="list-group">
                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Danamas Rupiah Plus</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_danamas_rupiah_plus.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Danamas Stabil</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_danamas_stabil.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Danamas Mantap Plus</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_danamas_mantap_plus.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Danamas Dollar</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_danamas_dollar.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Danamas Instrumen Negara</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_danamas_instrumen_negara.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Danamas Pasti</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_danamas_pasti.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Syariah Berkembang</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_syariah_berkembang.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Satu</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_satu.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Danamas Fleksi</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_danamas_fleksi.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Satu Prima</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_satu_prima.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Syariah Unggulan</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_syariah_unggulan.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Danamas Saham</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_danamas_saham.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Saham Unggulan</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_saham_unggulan.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Saham Bertumbuh</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_saham_bertumbuh.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>

                        <div class="list-group-item ">
                            <div class="list-group-item-heading" style="font-weight:bold;">Simas Saham Maksima</div>
                            <p class="list-group-item-text">
                                <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                <a href="#"><?php echo gettext('Prospektus'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="fa fa-line-chart" style="font-size:24px;color:#900"></i>
                                <a href="produk_simas_saham_maksima.php"><?php echo gettext('Kinerja'); ?> </a>
                            </p>
                        </div>
                    
                    </div>




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
