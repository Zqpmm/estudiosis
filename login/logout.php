<?php
require_once '../config.php';
$redirectLogout = BASEURL . 'login';

//Encerrando sessao
if (isset($_GET['logout']) and $_GET['logout'] == "true") {
    $_SESSION['id_usuarios'] = "";
    $_SESSION['email'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['cargo'] = "";

    unset($_SESSION['id_usuarios']);
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['cargo']);

    header('location: ' . $redirectLogout);
}
