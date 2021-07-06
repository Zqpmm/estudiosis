<?php
require_once '../../config.php';
require_once '../../conecta.php';
require_once '../../logado.php';
include HEADER_TEMPLATE;
include MAINNAVBAR;
$conexao = open_conexao();
// $id = $_GET['id_usuarios'];

if (($_POST) && (isset($_POST['insert']))) {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query_c = "INSERT INTO usuarios VALUES (NULL, '" . $nome . "','" . $cargo . "','" . $email . "','" . $email . "')";
    $up_exec = $conexao->query($query_c);
    header('Location: ' . BASEURL . 'adm/cadastro-usuario/');
};
?>

<style>
    body {
        background-color: #F4F5F4;
        overflow: hidden;
    }

    .row {
        margin-top: 60px;
    }

    .card {
        height: 350px;
        width: 450px;
        padding: 30px 40px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
    }

    input[type=text],
    .txtarea {
        margin-bottom: 10px;

    }
</style>

<div id="content" class="app-content" role="main">
    <!-- Trigger the modal with a button -->
    <div class="bg lter b-b wrapper-md" style="background-color: #F8F7F7; height: 80px; box-shadow: 0px 1px 5px grey; color: #323030;">
        <br>
        <a href="<?php echo BASEURL; ?>adm/cadastro-usuario/" style="color: black; text-decoration: none;">
            <h3 style="font-weight: 300;"><i class="fas fa-arrow-left"></i> Editar usuário</h3>
        </a>
    </div>

    <div class="row d-flex justify-content-center ">
        <div class="card">
            <form action="" method="POST">
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <div class="col text-center">
                        <h4 style="margin-bottom: 20px;">Edição de usuários</h4>
                        <section>
                            <div class="form-row">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                            </div>
                            <div class="form-row">
                                <input type="text" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-row">
                                <input type="text" class="form-control" name="senha" placeholder="Senha" required>
                            </div>
                            <div class="form-row">
                                <select class="form-control" name="cargo" aria-label="Default select example" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="comercial">Comercial</option>
                                    <option value="financeiro">Financeiro</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="insert" style="color: white; font-weight: 700; margin-top: 20px;" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include FOOTER_TEMPLATE;
?>