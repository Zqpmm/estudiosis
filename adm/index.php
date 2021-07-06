<?php
require_once '../config.php';
require_once '../conecta.php';
require_once '../logado.php';
require_once '../inc/header.php';
include HEADER_TEMPLATE;
include MAINNAVBAR;
include NAVBAR;
$conexao = open_conexao();

if (($_POST) && (isset($_POST['insert']))) {

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $localizacao = $_POST['localizacao'];
    $comprimento = $_POST['comprimento'];

    $query_c = "INSERT INTO imoveis VALUES (NULL, '" . $nome . "','" . $valor . "','" . $localizacao . "','" . $comprimento . "')";
    $up_exec = $conexao->query($query_c);
    echo  "<script>alert('Cadastro do imóvel efetuado com Sucesso!');</script>";
};

?>

<style>
    body {
        background-color: #F4F5F4;
    }

    .active-nav {
        background-color: #141515;
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

    .lter {
        background-color: #F8F7F7;
        height: 80px;
        margin-left: 50px;
        box-shadow: 0px 1px 5px grey;
        color: #323030;
    }

    .home {
        font-weight: 300;
        margin-left: 10px;
    }

    .btns {
        color: white;
        font-weight: 700;
        margin-top: 20px;
    }
</style>

<body>
    <div class="bg lter b-b wrapper-md">
        <br>
        <a href="<?php echo BASEURL; ?>adm/#<?php echo $_SESSION['id_usuarios']; ?>" style="color: black; text-decoration: none;">
            <h3 class="home"> Home</h3>
        </a>
    </div>
    <div class="row d-flex justify-content-center ">
        <div class="card">
            <form action="" method="POST">
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <div class="col text-center">
                        <h4 style="margin-bottom: 20px;">Cadastro de imóveis</h4>
                        <section>
                            <div class="form-row">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="form-row">
                                <input type="text" name="valor" class="form-control" placeholder="Valor" required>
                            </div>
                            <div class="form-row">
                                <input type="text" name="localizacao" class="form-control" placeholder="Localização" required>
                            </div>
                            <div class="form-row">
                                <input type="text" name="comprimento" class="form-control" placeholder="Comprimento em M²" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="insert" class="btn btns btn-info"><i class="fas fa-arrow-right"></i> Salvar</button>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<?php include FOOTER_TEMPLATE; ?>