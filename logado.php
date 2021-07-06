<?php
/*Verifica se a sessão já foi iniciada*/
if (!isset($_SESSION)) {
    session_start();
}
require_once 'conecta.php';
$conexao = open_conexao();

//Página de redirecionamento
$redirectLogout = BASEURL . "/";

if (isset($_SESSION['email']) and isset($_SESSION['id_usuarios']) and isset($_SESSION['nome'])) {
    $idUserSession = $_SESSION['id_usuarios'];
    $emailUserSession = utf8_encode($_SESSION['email']);
    $nomeUserSession = utf8_encode($_SESSION['nome']);

    //consulta usuario no banco
    $sql = "SELECT id_usuarios, nome FROM usuarios WHERE id_usuarios = $idUserSession";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        while ($dados = $result->fetch_array()) {
            $nameUser = $dados['nome'];
        }
    }
} else {
    header('location:' . $redirectLogout);
}
