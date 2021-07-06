<?php
require_once '../config.php';
require_once '../conecta.php';
require_once '../logado.php';
require_once '../inc/header.php';
include MAINNAVBAR;
$conexao = open_conexao();

$query = "SELECT cod_proposta, nome_cliente_proposta, valor, imovel_proposta FROM propostas";
$exec = $conexao->query($query);

// botão insert

if (($_POST) && (isset($_POST['insert']))) {
    $cod_proposta = $_POST['cod_proposta'];
    $imovel_aprovado = $_POST['imovel_aprovado'];
    $valor_aprovado = $_POST['valor_aprovado'];
    $nome_cliente_aprovado = $_POST['nome_cliente_aprovado'];

    $query_c = "INSERT INTO aprovados VALUES (NULL, '" . $nome_cliente_aprovado . "','" . $valor_aprovado . "','" . $imovel_aprovado . "')";
    $up_exec = $conexao->query($query_c);

    $delete_c = "DELETE FROM propostas WHERE cod_proposta='$cod_proposta'";
    $up_exec1 = $conexao->query($delete_c);

    header("Refresh: 0");
};

// botão delete
if (($_POST) && (isset($_POST['delete']))) {
    $cod_proposta = $_POST['cod_proposta'];

    $delete_c = "DELETE FROM propostas WHERE cod_proposta='$cod_proposta'";
    $up_exec1 = $conexao->query($delete_c);

    header("Refresh: 0");
};

include NAVBAR;
?>

<style>
    html {
        overflow: hidden;
    }

    body {
        background-color: #F4F5F4;
    }

    .active-nav {
        background-color: #141515;
    }

    .adicionar {
        margin-top: -50px;
        margin-left: 1050px;
        background-color: #28A37F;
        color: white;
    }

    .adicionar:hover {
        transition-duration: 0.4s;
        background-color: #2A8167;
        color: white;
    }

    .st_viewport {
        max-height: 420px;
        overflow: auto;
    }


    ._rank {
        min-width: 150px;
    }

    ._name {
        min-width: 230px;
    }

    ._surname {
        min-width: 250px;
    }

    ._valor {
        margin-left: 150px;
    }

    /** Sticky table styles **/
    .st_viewport {
        background-color: #D5D5D6;
        color: rgb(27, 30, 36);
    }

    /* ##   header */
    .st_table_header {
        position: -webkit-sticky;
        position: sticky;
        top: 0px;
        z-index: 1;
        background-color: #414143;
    }

    .st_table_header h2 {
        font-weight: 400;
        margin: 0 20px;
        padding: 20px 0 0;
    }

    .st_table_header .st_row {
        color: white;
    }

    /* ##  table */
    .st_table {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    /* #   row */
    .st_row {
        border-color: #EDEDEE;
        border-left: 0.1px solid grey;
        border-right: 0.1px solid grey;
        border-bottom: 0.1px solid grey;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
    }

    .st_table .st_row:nth-child(even) {
        background-color: #ECECEC;
    }

    /* #   column */
    .st_column {
        padding: 10px 20px;
    }

    .editar {
        margin-left: -30px;
        background-color: #F7780E;
        color: white;
    }

    .editar:hover {
        background-color: #C16110;
        color: white;
    }
</style>

<body>
    <div class="bg lter b-b wrapper-md" style="background-color: #F8F7F7; height: 80px; margin-left: 50px; box-shadow: 0px 1px 5px grey; color: #323030;">
        <br>
        <a style="color: black; text-decoration: none;">
            <h3 style="font-weight: 300; margin-left: 10px;"> Home - Vendas</h3>
        </a>
    </div>


    <div id="content" class="app-content" role="main">
        <div class="center" style="margin-top: -35px;">
            <div class="row py-5 w3-animate-opacity">
                <div class="col-lg-10 mx-auto">
                    <main class="st_viewport">
                        <div class="st_wrap_table" data-table_id="0">
                            <form method="post" action="">
                                <header class="st_table_header">
                                    <div class="st_row">
                                        <div class="st_column _name">Nome do cliente - CPF</div>
                                        <div class="st_column _surname">Valor do imóvel</div>
                                        <div class="st_column _rank">Imóvel</div>
                                        <div class="st_column _valor"></div>
                                    </div>
                                </header>
                                <?php if ($exec->num_rows == 0) { ?>
                                    <div class="st_row">
                                        <div class="st_column _rank">Nenhum registro encontrado!</div>
                                    </div>
                                    <?php } else {
                                    foreach ($exec as $result) { ?>
                                        <div class="st_row">
                                            <input type="hidden" name="cod_proposta" value="<?php echo $result['cod_proposta']; ?>">
                                            <div class="st_column _name"><input type="hidden" name="nome_cliente_aprovado" value="<?php echo $result['nome_cliente_proposta']; ?>"><?php echo $result['nome_cliente_proposta']; ?></div>
                                            <div class="st_column _surname"><input type="hidden" name="valor_aprovado" value="<?php echo $result['valor']; ?>"><?php echo $result['valor']; ?></div>
                                            <div class="st_column _rank "><input type="hidden" name="imovel_aprovado" value="<?php echo $result['imovel_proposta']; ?>"><?php echo $result['imovel_proposta']; ?></div>
                                            <div class="st_column _valor"><button class="btn btn-success" type="submit" name="insert"><i class="far fa-check-square"></i></button></div>
                                            <div class="st_column"><button class="btn btn-danger" name="delete"><i class="fas fa-trash-alt"></i></button></div>
                                        </div>
                                <?php }
                                } ?>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include FOOTER_TEMPLATE;
    ?>