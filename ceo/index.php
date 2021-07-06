<?php
require_once '../config.php';
require_once '../conecta.php';
require_once '../logado.php';
require_once '../inc/header.php';
include MAINNAVBAR;
$conexao = open_conexao();

$query = "SELECT cod_aprovado, nome_cliente_aprovado, valor_aprovado, imovel_aprovado FROM aprovados";
$exec = $conexao->query($query);
include NAVBAR;
?>

<style>
    body {
        background-color: #F4F5F4;
        overflow: hidden;
    }

    .active-nav {
        background-color: #141515;
    }
</style>

<body>
    <div class="bg lter b-b wrapper-md" style="background-color: #F8F7F7; height: 80px; margin-left: 50px; box-shadow: 0px 1px 5px grey; color: #323030;">
        <br>
        <a style="color: black; text-decoration: none;">
            <h3 style="font-weight: 300; margin-left: 10px;"> Central de gerenciamento</h3>
        </a>
    </div>

    <?php
    $requisicao_clientes = "SELECT COUNT(*) AS resultado_clientes FROM clientes";
    $queryr_clientes = $conexao->query($requisicao_clientes);
    if ($queryr_clientes->num_rows > 0) {
        while ($dados_clientes = $queryr_clientes->fetch_array()) {
            $dados_clientes2 = $dados_clientes['resultado_clientes'];
        }
    }
    ?>
    <div id="content" class="app-content" role="main" style="display: flex;">
        <div class="center" style="margin-top: -50px;">
            <div class="card border mb-3" style="height: 170px; max-width: 18rem; margin-left: 90px; margin-top: 70px;">
                <div class="card-header">Clientes</div>
                <div class="card-body text-danger">
                    <h6 class="card-title">Quantidade total de clientes cadastrados <h1><?php echo $dados_clientes2; ?></h1>
                    </h6>
                </div>
            </div>
        </div>

        <?php
        $requisicao2 = "SELECT COUNT(*) AS resultado_imoveis FROM imoveis";
        $queryr2 = $conexao->query($requisicao2);
        if ($queryr2->num_rows > 0) {
            while ($dados2 = $queryr2->fetch_array()) {
                $dados3 = $dados2['resultado_imoveis'];
            }
        }
        ?>
        <div class="center" style="margin-top: -50px;">
            <div class="card border mb-3" style="height: 170px; max-width: 18rem; margin-left: 10px; margin-top: 70px;">
                <div class="card-header">Imóveis</div>
                <div class="card-body text-danger">
                    <h6 class="card-title">Quantidade total de imóveis cadastrados <h1><?php echo $dados3; ?></h1>
                    </h6>
                </div>
            </div>
        </div>

        <?php
        $requisicao_vendas = "SELECT COUNT(*) AS resultado_vendas FROM aprovados";
        $queryr_vendas = $conexao->query($requisicao_vendas);
        if ($queryr_vendas->num_rows > 0) {
            while ($dados_vendas = $queryr_vendas->fetch_array()) {
                $dados_vendas2 = $dados_vendas['resultado_vendas'];
            }
        }
        ?>
        <div class="center" style="margin-top: -50px;">
            <div class="card border mb-3" style="height: 170px; max-width: 18rem; margin-left: 10px; margin-top: 70px;">
                <div class="card-header">Vendas</div>
                <div class="card-body text-danger">
                    <h6 class="card-title">Quantidade total de vendas aprovadas<h1><?php echo $dados_vendas2; ?></h1>
                    </h6>
                </div>
            </div>
        </div>

        <?php
        $requisicao_faturamento = "SELECT SUM(valor_aprovado) AS resultado_faturamento FROM aprovados";
        $queryr_faturamento = $conexao->query($requisicao_faturamento);
        if ($queryr_faturamento->num_rows > 0) {
            while ($dados_faturamento = $queryr_faturamento->fetch_array()) {
                $dados_faturamento2 = $dados_faturamento['resultado_faturamento'];
            }
        }
        ?>
        <div class="center" style="margin-top: -50px;">
            <div class="card border mb-3" style="height: 170px; max-width: 18rem; margin-left: 10px; margin-top: 70px;">
                <div class="card-header">Faturamento</div>
                <div class="card-body text-danger">
                    <h6 class="card-title">Quantidade total do faturamento da empresa <h1>R$ <?php echo $dados_faturamento2; ?></h1>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <?php
    $requisicao_propostas = "SELECT COUNT(*) AS resultado_propostas FROM propostas";
    $queryr_propostas = $conexao->query($requisicao_propostas);
    if ($queryr_propostas->num_rows > 0) {
        while ($dados_propostas = $queryr_propostas->fetch_array()) {
            $dados_propostas2 = $dados_propostas['resultado_propostas'];
        }
    }
    ?>
    <div class="flex">
        <div class="card border mb-3" style="height: 250px; max-width: 20rem; margin-left: 500px; margin-top: 00px;">
            <div class="card-header">Faturamento</div>
            <div class="panel-body text-center">
                <div id="donut_single" style="margin-top: 10px; width: 250px; height: 500px; margin-left: 20px;"></div>
            </div>
        </div>
    </div>
    </div>
</body>

<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Effort', 'Amount given'],
            ['Propostas pendentes', <?php echo $dados_propostas2; ?>],
            ['Propostas aceitas', <?php echo $dados_vendas2; ?>]
        ]);

        var options = {
            colors: ['orange', '#38CC2A'],
            alwaysOutside: true,
            pieHole: 1.5,
            backgroundColor: 'transparent',
            pieSliceTextStyle: {
                color: 'white',
                fontName: 'Roboto',
                bold: true,
            },
            legendTextStyle: {
                bold: true
            },
            legend: 'right',
            chartArea: {
                left: '0%',
                right: '0%',
                top: '1%',
                height: '35%',
                width: '0%',
            },

        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
    }
</script>

<?php
include FOOTER_TEMPLATE;
?>