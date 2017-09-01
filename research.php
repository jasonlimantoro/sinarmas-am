<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <script src="modules/js/assets/research.js"></script>
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
                        <div class="col-md-offset-1 col-md-10 col-xs-12">
                            <h1> <?php echo gettext('Riset'); ?> </h1>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Riset Harian'); ?></h5>
                                    <span> <?php echo date('d/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="http://www.sinarmassekuritas.co.id/info/research/Tahun <?php echo date('Y/M/Ymd/Ymd'); ?> Daily Research.pdf" frameborder="0">
                                        </iframe>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Perdagangan'); ?></h5>
                                    <span> <?php echo date('d/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        
                                        <iframe class="embed-responsive-item" type='application/pdf' src="http://www.sinarmassekuritas.co.id/info/research/Tahun <?php echo date('Y/M/Ymd/Ymd'); ?> Daily Research.pdf">
                                        </iframe>
                                    </div>
                                    <hr>
                                </div>
                            
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title" style="color:#900"><?php echo gettext('Pilihan Hari Ini'); ?></h5>
                                    <span> <?php echo date('d/m/Y'); ?> </span>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" type='application/pdf' src="http://www.sinarmassekuritas.co.id/info/research/Tahun <?php echo date('Y/M/Ymd/Ymd'); ?> picks of the day.pdf">
                                        </iframe>
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
