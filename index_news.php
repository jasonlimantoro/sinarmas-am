<!DOCTYPE html>
<html lang='id'>
    <head>
        <?php include "header.php"; ?>
    </head>

    <body>
        <?php include "nav_structure.php"; ?>
        <?php 
            $domain = array (
                'index'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
         <!-- The page -->
        <div id="page-wrapper">
            
            <?php include "nav_display.php"; ?>

            <div class="content">
                <h1>What To Do</h1>
            </div>
            <?php include "footer.php"; ?>
        </div>
        <?php include "jsload.php"; ?>
    </body>
</html>
