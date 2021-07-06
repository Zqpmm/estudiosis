<?php
require_once '../../config.php';
require_once '../../conecta.php';
require_once '../../logado.php';
include HEADER_TEMPLATE;
include MAINNAVBAR;
$conexao = open_conexao();

$query = "SELECT * FROM clientes";
$exec = $conexao->query($query);
?>

<style>
    html {
        overflow: hidden;
    }

    body {
        background-color: #F4F5F4;
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

    ._opcao {
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

<div id="content" class="app-content" role="main">
    <!-- Trigger the modal with a button -->
    <div class="bg lter b-b wrapper-md" style="background-color: #F8F7F7; height: 80px; box-shadow: 0px 1px 5px grey; color: #323030;">
        <br>
        <a href="<?php echo BASEURL; ?>comercial/" style="color: black; text-decoration: none;">
            <h3 style="font-weight: 300;"><i class="fas fa-arrow-left"></i> Clientes Cadastrados</h3>
        </a>
    </div>

    <div class="center" style="margin-top: -35px;">
        <div class="row py-5 w3-animate-opacity">
            <div class="col-lg-10 mx-auto">
                <main class="st_viewport">
                    <div class="st_wrap_table" data-table_id="0">
                        <header class="st_table_header">
                            <div class="st_row">
                                <div class="st_column _rank">Nome</div>
                                <div class="st_column _name">Email</div>
                                <div class="st_column _surname">Telefone</div>
                                <div class="st_column _year">Cpf</div>
                            </div>
                        </header>
                        <?php if ($exec->num_rows == 0) { ?>
                            <div class="st_row">
                                <div class="st_column _rank">Nenhum registro encontrado!</div>
                            </div>
                            <?php } else {
                            foreach ($exec as $result) { ?>
                                <div class="st_row">
                                    <div class="st_column _rank"><?php echo $result['nome_cliente']; ?></div>
                                    <div class="st_column _name"><?php echo $result['email']; ?></div>
                                    <div class="st_column _surname"><?php echo $result['telefone']; ?></div>
                                    <div class="st_column _year"><?php echo $result['cpf']; ?></div>
                                </div>
                        <?php }
                        } ?>
                    </div>
            </div>
        </div>
        <div class="adicionar-posicionamento">
            <a href="<?php echo BASEURL; ?>comercial/cadastro-cliente/cadastro" class="btn m-b-xs btn-addon pull-right btn-lg adicionar w3-animate-opacity"><i class="fa fa-plus"></i> Adicionar</a>
        </div>
    </div>
</div>

<?php
include FOOTER_TEMPLATE;
?>