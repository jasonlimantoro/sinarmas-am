
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
        
    </head>
    <body>

        <?php include "nav_structure.php" ;?>
        <?php 

            // putenv("LANG=$lang");
            // setlocale(LC_ALL, $lang);

            $domain = array (
                'award'
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

                            <h1> <?php echo gettext('Penghargaan'); ?> </h1>
                            <h3> <?php echo gettext('Tahun'); ?> </h3>
                            <ol class="breadcrumb">
                                <li><a class="award_year" href="ajax/Penghargaan/2017.php">2017</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2016.php">2016</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2015.php">2015</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2014.php">2014</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2013.php">2013</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2012.php">2012</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2011.php">2011</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2010.php">2010</a></li>
                                <li><a class="award_year" href="ajax/Penghargaan/2009.php">2009 - 2005</a></li>
                            </ol>
                            <div class="award-list">
                                <?php include("ajax/Penghargaan/2017.php") ?>
                            
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <?php include "footer.php"; ?>

    
    
    <?php include "jsload.php"; ?>
    <script>
        $(document).ready(function(){
            $(".award_year").on("click", function(event){
                event.preventDefault();
                $(".award-list").load($(this).attr('href'));
            })
        });    
    </script>
    </body>
</html>
