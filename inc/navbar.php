<!DOCTYPE html>
<!-- BOX ICONS CSS-->
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
<!-- custom css -->
<link rel="stylesheet" href="style.css" />

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    overflow-x: hidden;
  }

  .row {
    margin-left: 40px;
  }

  .side-navbar {
    width: 50px;
    height: 100%;
    position: fixed;
    margin-left: -300px;
    background-color: white;
    transition: 0.5s;
  }

  .nav-link:active,
  .nav-link:focus,
  .nav-link:hover {
    background-color: #353935;
  }

  .my-container {
    transition: 0.4s;
  }

  .active-nav {
    margin-left: 0;
  }

  /* for main section */
  .active-cont {
    margin-left: 0px;
  }

  #menu-btn {
    background-color: white;
    color: black;
    margin-left: -40px;
    margin-top: -130px;
  }

  .my-container input {
    border-radius: 2rem;
    padding: 2px 20px;
  }
</style>

<!-- Side-Nav -->
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
  <ul class="nav flex-column w-100">

    <?php if ($_SESSION['cargo'] == 'administrador') { ?>
      <li class="nav-link">
        <a href="<?php echo BASEURL; ?>adm/cadastro-usuario#<?php echo $_SESSION['id_usuarios']; ?>"><i class="fas fa-user-cog" style="color: white;"></i></a>
      </li>
    <?php } elseif ($_SESSION['cargo'] == 'comercial') { ?>
      <li class="nav-link">
        <a href="<?php echo BASEURL; ?>comercial/cadastro-cliente#<?php echo $_SESSION['id_usuarios']; ?>"><i class="fas fa-user-cog" style="color: white;"></i></a>
      </li>
    <?php } ?>
    <li href="#" class="nav-link">
      <a href="<?php echo BASEURL ?>"><i class="fas fa-sign-out-alt" style="color: white;"></i></a>
    </li>
  </ul>
</div>

</html>