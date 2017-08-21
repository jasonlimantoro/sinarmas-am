<?php 

$GLOBALS['lang'] = 'id_ID';

if (isset($_GET['lang']) ) {
    // the locale can be changed via query strings
    $lang = $_GET['lang']; //assign the variable
    setcookie('lang', $lang); // Set it as a cookie

} 
// cookie is present
elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}

elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    // default: look for the languages the browser says the user accepts
    $langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    array_walk($langs, function (&$lang) { $lang = strtr(strtok($lang, ';'), ['-' => '_']); });
    foreach ($langs as $browser_lang) {
        $lang = $browser_lang;
        break;
        
    }
}
?>