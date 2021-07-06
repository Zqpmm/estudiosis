<?php
function open_conexao()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_erros', 1);
    error_reporting(E_ALL);

    // Conexão banco de dados estudiosis 
    if (empty($_SERVER['SERVER_NAME']) || preg_match('/.com.br/', $_SERVER['SERVER_NAME'])) {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "estudiosis";
    } else {
        // LOCALHOST
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "estudiosis";
    }

    $link_conexao = new MySQLi($hostname, $username, $password, $database);
    if ($link_conexao->connect_error) {
        echo "Erro ao conectar ao Banco de Dados";
    }

    mysqli_set_charset($link_conexao, "utf8");
    return $link_conexao;
}
