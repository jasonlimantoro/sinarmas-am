<?php 
    if (!function_exists('gettext')) {
        echo "gettext is not installed";
    } else {
        echo "gettest is successfully installed!";
    }


?>

<?php 
    // I18N support info here
    $language = "en_US";
    putenv("LANG=".$language);
    setlocale(LC_ALL, $language);

    // set the text domain as messages
    $domain = 'messages';
    bindtextdomain($domain, "Locale");
    textdomain($domain);
    echo gettext("halo dunia");

?>