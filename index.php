<?php
require_once 'config.php';
require_once 'conecta.php';
require_once 'inc/header.php';
$conexao = open_conexao();

session_destroy();
session_start();
if (isset($_GET['msg']) and $_GET['msg'] == "failed") {
    echo "Dados Inválidos";
}
//Validar os Dados no formulário
if (($_POST) && (isset($_POST['insert']))) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $redirectLogin = BASEURL;

    $sql = "SELECT id_usuarios, nome, cargo, email, senha  FROM usuarios WHERE email = '" . $email . "' AND senha = '" . $senha . "'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        while ($dados = $result->fetch_array()) {
            $_SESSION['id_usuarios'] = $dados['id_usuarios'];
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['cargo'] = $dados['cargo'];
            if ($dados['cargo'] == "comercial") {
                header('Location: ' . $redirectLogin . "comercial#" . $_SESSION['cargo'] . $_SESSION['id_usuarios']);
            } elseif ($dados['cargo'] == "financeiro") {
                header('Location: ' . $redirectLogin . "financeiro#" . $_SESSION['cargo'] . $_SESSION['id_usuarios']);
            } elseif ($dados['cargo'] == "administrador") {
                header('Location: ' . $redirectLogin . "adm#" . $_SESSION['cargo'] . $_SESSION['id_usuarios']);
            } elseif ($dados['cargo'] == "ceo") {
                header('Location: ' . $redirectLogin . "ceo#" . $_SESSION['cargo'] . $_SESSION['id_usuarios']);
            }
        }
    } else {
        header('Location: ' . $redirectLogin . "/?msg=failed");
    }
}
?>
<style>
    body {
        background-color: #F3EEEE;
    }
</style>

<body>
    <div class="row d-flex justify-content-center" style="width: 30%; margin: auto; -ms-transform: translateY(50%); transform: translateY(50%);">
        <div class="card" style="height: 300px; box-shadow: 5px 1px 10px grey">
            <form action="" method="POST">
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <div class="row">
                        <div class="col text-center">
                            <img src="assets/lg2.png" style="margin-top: 10px; width: 60px;">
                            <section style="margin: 50px;">
                                <div class="content" style="margin-top: -20px;">
                                    <div class="form-row" style="margin-top: 50px;">
                                        <input type="text" name="email" class="form-control" class="validade" placeholder="E-mail" required>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <input type="password" name="senha" class="form-control" class="validade" placeholder="Senha" required>
                                    </div>
                                    <br>
                                    <div class="d-grid gap-2">
                                        <button type="submit" style="color: white;" name="insert" class="btn btns btn-info"><b>Acessar</b></button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>


<?php
include FOOTER_TEMPLATE;
?>