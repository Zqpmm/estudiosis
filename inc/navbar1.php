<style>
    .nav-top {
        background-color: #1199c4;
    }

    .camada {
        width: 220px;
        height: 64px;
        color: white;
    }

    .camada2 {
        background-color: #0D7393;
        width: 220px;
        height: 64px;
        color: white;
    }

    .camada2:hover {
        background-color: #1186AB;
        color: white;
    }

    .logo {
        height: 25px;
        width: 25px;
        margin-bottom: 3px;
    }

    .text-style {
        color: white;
    }

    .texto-posicionamento {
        margin-left: 20px;
        margin-top: 14px;
    }
</style>

<nav class="nav-top">
    <div class="camada">
        <div class="camada2">
            <a href="<?php echo BASEURL; ?>adm/#<?php echo $_SESSION['id_usuarios']; ?>" class="navbar-brand text-lt text-style">
                <div class="texto-posicionamento">
                    <img src="<?php echo BASEURL; ?>assets/lg.png" class="logo" alt="">
                    <span class="hidden-folded m-l-xs" style="font-family: helvetica; font-weight: 700; margin-left: 5px; color: white;">Imobiliária FG</span>
                </div>
            </a>
        </div>
        <div class="list" style="margin-top: -45px; margin-left: 240px;">
            <i class="fas fa-list"></i>
        </div>
    </div>
    <div class="col" style="float: right;">
        <img src="<?php echo BASEURL; ?>assets/lg3.png" style="height: 40px; margin-top: -90px; margin-right: 15px;">
    </div>
</nav>