<?php 

  require '../includes/verificandoAcesso.php'; 
  if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])):
  endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Pega o caractere padrão da Web que é UTF-8 -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

  <!-- A tela fica responsiva com dispositivos mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LocPet</title>
  <!-- Fonte do materialize -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!-- CSS do materialize -->
  <link type="text/css" rel="stylesheet" href="<?php echo DOMINIO_PRINCIPAL; ?>css/materialize.min.css"  media="screen,projection"/>

  <!-- Meu CSS -->
  <link href="<?php echo DOMINIO_PRINCIPAL; ?>css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo DOMINIO_PRINCIPAL; ?>perfil" class="brand-logo"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
      <!-- Menu desktop -->
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/configuracao/">Configurações</a></li>
        <li><a href="#">Localização</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/controle-racao/">Controle de Ração</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/produtos/">Meus Produtos</a></li>
        <li><a href="#">Olá, <?php echo revertMascara($nomeUsuario);?></a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>includes/sair.php">Sair</a></li>
      </ul>
       <!--Fim  Menu desktop -->
      <!-- Menu Mobile -->

      <ul id="nav-mobile" class="sidenav">
        <a href="#"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
        <li><a href="#">Olá, <?php echo revertMascara($nomeUsuario);?></a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/configuracao/">Configurações</a></li>
        <li><a href="#">Localização</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/controle-racao/">Controle de Ração</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/produtos/">Meus Produtos</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>includes/sair.php">Sair</a></li>
      </ul>
      <!--Fim Menu Mobile -->
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons grey-text">settings</i></a>
    </div>
  </nav>
  <!-- GPS DA COLEIRA  -->
  <div class="container">
    <div class="section">
      <blockquote>
        <p class="header center black-text text-lighten-2">Localização do pet</p>
      </blockquote>
      <!-- Google maps ESTATICO -->
      <div class="row">
        <div class="col s12 center ">
          <iframe class="responsive-img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0965159574325!2d-46.66786818449127!3d-23.529030784698886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce580368f5da4b%3A0x758fb9438c746262!2sUNINOVE%20-%20Campus%20Memorial!5e0!3m2!1spt-BR!2sbr!4v1590453369647!5m2!1spt-BR!2sbr" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
    <div class="center">
      <label>Versão 1.0.1</label>
    </div>
    
  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/materialize.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/init.js"></script>
  </body>
</html>
