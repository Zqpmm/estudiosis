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
    $imovel_proposta = $_POST['imovel_proposta'];
    $valor = $_POST['valor'];
    $nome_cliente_proposta = $_POST['nome_cliente_proposta'];

    $query_c = "INSERT INTO propostas VALUES (NULL, '" . $nome_cliente_proposta . "','" . $valor . "','" . $imovel_proposta . "')";
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

    .venda-text {
        margin-bottom: 20px;
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
        <a href="<?php echo BASEURL; ?>" style="color: black; text-decoration: none;">
            <h3 class="home"> Home</h3>
        </a>
    </div>
    <div class="row d-flex justify-content-center ">
        <div class="card">
            <form action="" method="POST">
                <div id="wizard">
                    <div class="col text-center">
                        <h4 class="venda-text">Venda de imóveis</h4>
                        <section>
                            <div class="form-row">
                                <select name="imovel_proposta" class="form-control" required>
                                    <?php
                                    $query_cc = "SELECT cod_imovel, nome FROM imoveis";
                                    $exec_cc = $conexao->query($query_cc);
                                    while ($dados = $exec_cc->fetch_array()) {
                                        $cod_imovel = $dados['cod_imovel'];
                                        $nome = $dados['nome'];
                                        echo "<option value=\"$cod_imovel - $nome\">$cod_imovel - $nome</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-row" style="margin-top: 10px;">
                                <input type="text" name="valor" class="form-control" placeholder="Valor" required>
                            </div>
                            <div class="form-row">
                                <select class="form-control" name="nome_cliente_proposta" required>
                                    <?php
                                    $query_cliente = "SELECT cpf, nome_cliente FROM clientes";
                                    $exec_cliente = $conexao->query($query_cliente);
                                    while ($dados1 = $exec_cliente->fetch_array()) {
                                        $cpf = $dados1['cpf'];
                                        $nome_cliente = $dados1['nome_cliente'];
                                        echo "<option value=\"$nome_cliente - $cpf\">$nome_cliente - $cpf</option>";
                                    }
                                    ?>
                                </select>
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