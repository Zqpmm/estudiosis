<?php
if (!isset($_SESSION)) {
    session_start();
}

/*Caminho absoluto para a pasta no sistema*/
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/*Caminho no server para o sistema*/
if (empty($_SERVER['SERVER_NAME']) || preg_match('/.com.br/', $_SERVER['SERVER_NAME'])) {
    if (!defined('BASEURL'))
        define('BASEURL', '/');
} else {
    // LOCALHOST
    if (!defined('BASEURL'))
        define('BASEURL', '/estudiosis/');
}

//Define fuso horário local
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

/*Caminhos dos Templates de Header e Footer*/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('NAVBAR', ABSPATH . 'inc/navbar.php');
define('MAINNAVBAR', ABSPATH . 'inc/navbar1.php');
define('SIDENAVBAR', ABSPATH . 'inc/sidenav.php');
