<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>

        <?php 
            $domain = array (
                'research'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div id="page-wrapper">
            <div class="content">
                <?php include "nav_display.php"; ?> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <h1> <?php echo gettext('Riset'); ?> </h1>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Riset Harian'); ?></h5>
                                    <span> <?php echo date('j/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe src="https://drive.google.com/file/d/0B3nOAH9ZE3nPQl9tVk96bXNFLTQ/preview" width="640" height="480"></iframe>
                                        <!-- <iframe class="embed-responsive-item" src="https://drive.google.com/viewerng/viewer?url=http://www.sinarmassekuritas.co.id/info/research/Tahun%202017/JUL/20170717/20170717%20Daily%20Research.pdf&embedded=true" frameborder="0">
                                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href="http://www.sinarmassekuritas.co.id/info/research/Tahun%202017/JUL/20170712/20170712%20Daily%20Research.pdf">click here to
                                            download the PDF file.</a>
                                            </p>
                                        </iframe> -->
                                    </div>
                                    <!-- <hr>

                                    <font color="#FF0000" style="font-size:15px;"><strong>Hari Sebelumnya</strong></font>
                                    <p style="text-align:justify; font-size:12px;">IHSG naik sebanyak 17,2 poin (0,4%) ke level 4360,47. Sementara LQ45 naik sebanyak 4,9 poin (0,67%) ke level 736,36. Foreign net sell sebesar Rp 57,58 miliar.</p><p style="font-size:15px; color:red;"><strong>Lihat Hari Ini</strong></p><p style="text-align:justify; font-size:12px;">Ketidakpastian global dan Kekhawatiran The Fed dalam rencana kenaikan suku bunga Amerika (AS) pada rapat The Fed minggu ini (16/9-17/9) turut memberikan pengaruh terhadap indeks terutama dalam fluktuasi nilai tukar Rupiah terhadap dolar AS. Selain itu, Goldman Sachs memangkas prediksi harga minyak ke posisi US$ 20 per barel pada pekan lalu. Harga minyak tersebut bisa turun akibat dari kelebihan pasokan minyak mentah. Dari jepang akan merilis data industrial production  yang diperkirakan ke level 1,1% MoM (esimasi –0,6% MoM). Begitu juga dengan Eropa akan merilis data  industrial production  yang diperkirakan ke level –0,4% MoM (estimasi 0,1% MoM). Sementara itu, Bank Indonesia (BI) memprediksikan pertumbuhan ekonomi kuartal III-2015 naik tipis meskipun dibawah 5%. Faktor eksternal dan internal tersebut memberikan sentimen negatif terhadap indeks. Secara teknikal indeks hari Senin (14/9), IHSG diprediksi bergerak mixed di kisaran level 4323-4388.Top Buy: AALI, INTP, INDF, SMBR 
                                    </p> -->
                                </div>
                            
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Perdagangan'); ?></h5>
                                    <span> <?php echo date('j/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe src="https://drive.google.com/file/d/0B3nOAH9ZE3nPQlI4VGEyUDdDc1U/preview" width="640" height="480"></iframe>
                                        
                                        <!-- <iframe class="embed-responsive-item" type='application/pdf' src="files/research/20170717 Daily Research.pdf">
                                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href="http://www.sinarmassekuritas.co.id/info/research/Tahun%202017/JUL/20170712/20170712%20Daily%20Research.pdf">click here to
                                            download the PDF file.</a>
                                            </p>
                                        </iframe> -->
                                    </div>
                                    <hr>
                                </div>
                            
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Pilihan Hari Ini'); ?></h5>
                                    <span> <?php echo date('j/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe src="https://drive.google.com/file/d/0B3nOAH9ZE3nPblc4azBHdWJwaVk/preview" width="640" height="480"></iframe>
                                        
                                        <!-- <iframe class="embed-responsive-item" type='application/pdf' src="http://www.sinarmassekuritas.co.id/info/research/Tahun%202017/JUL/20170712/20170712%20Daily%20Research.pdf">
                                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href="http://www.sinarmassekuritas.co.id/info/research/Tahun%202017/JUL/20170712/20170712%20Daily%20Research.pdf">click here to
                                            download the PDF file.</a>
                                            </p>
                                        </iframe> -->
                                    </div>
                                    <hr>
                                    <h4 style="font-size:11px;">DISCLAIMER:</h4><br><div style="font-size:11px; text-align:justify; margin-top:-22px;">This material is issued by PT Sinarmas Sekuritas, a member of Indonesia Stock Exchanges, represent the opinion of PT Sinarmas Sekuritas, derived its judgement from sources deemed reliable, however, PT Sinarmas Sekuritas and its affiliated cannot guarantee its accuracy and completeness. PT Sinarmas Sekuritas or its affiliates may be involved in transactions contrary to any opinion herein or have positions in the securities recommended herein and may seek or will seek investment banking or other business relationships with the companies in this material. PT Sinarmas Sekuritas, its employees and its affiliates, expressly disclaim any and all liability for representation or warranties, expressed or implied, here in or omission there from or for any loss how so ever arising from any use of this material or its contents or otherwise arising in connection there with. Opinion expressed in this material are our present view and are subject to change without notice.</div>
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
