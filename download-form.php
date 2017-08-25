<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
        <style>
        .list-group a:hover {
            color: #900;
        }
        .list-group a {
            color: black;
        }
        span.glyphicon.glyphicon-save-file {
            color: #900;
            font-size: 24px;
        }
        </style>
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
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <h1> <?php echo gettext('Unduh Formulir'); ?> </h1>
                            <div class="list-group">
                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Pembelian'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a target="_blank" href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Penjualan'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Profil Pemodal'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Pembukaan Rekening Individu'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Pembukaan Rekening Institusi'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Pengalihan'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Perubahan/Penambahan Rekening Individu'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Perubahan/Penambahan Rekening Perusahaan'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Investasi Berkala'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Pembatalan Pendebetan Bank Sinarmas'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Sinarmas'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pencabutan Kuasa Bank BII'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank BII'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pencabutan Pendebetan Rekening Bank BCA'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank BCA'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Formulir Perubahan Data Nasabah'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pencabutan Pendebetan Rekening Bank Mandiri'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Mandiri'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>

                                <div class="list-group-item ">
                                    <div class="list-group-item-heading" style="font-weight:bold;"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Danamon'); ?></div>
                                    <p class="list-group-item-text">
                                        <i class="fa fa-file-pdf-o" style="font-size:24px;color:#900"></i>
                                        <a href="#"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                        <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

    <?php include "jsload.php"; ?>
    <script>
        $(".list-group a").attr({
            "target": "_blank",
            "href": "http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf"
            
        });
    </script>
    </body>
</html>
