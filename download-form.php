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
                    <div class="download-form">
                        <div class="row">
                            <div class="col-md-8 col-xs-12">
                                <h1> <?php echo gettext('Unduh Formulir'); ?> </h1>
                                <div class="list-group">
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Pembelian'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a target="_blank" href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PEMBELIAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Penjualan'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PENJUALAN.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/id/formulir/FORM%20PENJUALAN.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Profil Pemodal'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/id/formulir/Profil%20Pemodal%20Asset%20Depan.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/id/formulir/Profil%20Pemodal%20Asset%20Depan.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Pembukaan Rekening Individu'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/CIF%20ASSET%20IND.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/CIF%20ASSET%20IND.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Pembukaan Rekening Institusi'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/CIF%20ASSET%20INS.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/CIF%20ASSET%20INS.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Pengalihan'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/formulir%20pengalihan%20reksa%20dana.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/formulir%20pengalihan%20reksa%20dana.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Perubahan/Penambahan Rekening Individu'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/form%20perubahan%20penambahan%20rekening%20individu%20ASSET.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/form%20perubahan%20penambahan%20rekening%20individu%20ASSET.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Perubahan/Penambahan Rekening Perusahaan'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/form%20perubahan%20penambahan%20rekening%20Perusahaan%20ASSET.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/form%20perubahan%20penambahan%20rekening%20Perusahaan%20ASSET.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Investasi Berkala'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/FIB.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/FIB.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Pembatalan Pendebetan Bank Sinarmas'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/Pembatalan%20pendebetan%20rekening.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/Pembatalan%20pendebetan%20rekening.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Sinarmas'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_SINARMAS.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_SINARMAS.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pencabutan Kuasa Bank BII'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20kuasa%20BII.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20kuasa%20BII.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank BII'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20pendebetan%20rekening%20BCA.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20pendebetan%20rekening%20BCA.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pencabutan Pendebetan Rekening Bank BCA'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20pendebetan%20rekening%20BCA.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/surat%20kuasa%20pencabutan%20pendebetan%20rekening%20BCA.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank BCA'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT%20KUASA%20PENDEBETAN%20REKENING%20BCA.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT%20KUASA%20PENDEBETAN%20REKENING%20BCA.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Formulir Perubahan Data Nasabah'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/Form_Perubahan_Data_Nasabah.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/Form_Perubahan_Data_Nasabah.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pencabutan Pendebetan Rekening Bank Mandiri'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENCABUTAN_PENDEBETAN_REKENING_BANK_MANDIRI.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENCABUTAN_PENDEBETAN_REKENING_BANK_MANDIRI.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Mandiri'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_MANDIRI.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_MANDIRI.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
                                        </p>
                                    </div>
    
                                    <div class="list-group-item ">
                                        <div class="list-group-item-heading"><?php echo gettext('Surat Kuasa Pendebetan Rekening Bank Danamon'); ?></div>
                                        <p class="list-group-item-text">
                                            <i class="fa fa-file-pdf-o" ></i>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_DANAMON.pdf"><?php echo gettext('Lihat'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                            <a href="http://www.sinarmas-am.co.id/formulir/SURAT_KUASA_PENDEBETAN_REKENING_BANK_DANAMON.pdf" download="form_pembelian.pdf"><?php echo gettext('Unduh'); ?></a>
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
    <script>
        $(".list-group a").attr({
            "target": "_blank",
        });
    </script>
    </body>
</html>
