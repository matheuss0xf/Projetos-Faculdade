<?php include('includes/conf.php'); ?>

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
 
  <link rel="icon" href="<?php echo DOMINIO_PRINCIPAL ?>favicon.ico" type="image/x-icon">

  <!-- Meu CSS -->
  <link href="<?php echo DOMINIO_PRINCIPAL; ?>css/style.css" type="text/css" rel="stylesheet"/>

</head>
<body>
  <!-- Conteúdo do pwa -->
  <header id="index-banner" class="parallax-container">
    <section class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center light-blue-text text-lighten-1">Sempre ao seu lado!</h1>
        <div class="row center">
          <!-- Botao de login-->
          <a href="<?php echo DOMINIO_PRINCIPAL; ?>login"class="btn-large waves-effect waves-light teal lighten-1">INICIAR SESSÃO</a>
        </div>
        <div class="row center">
          <!-- Cadastro -->
          <a href="<?php echo DOMINIO_PRINCIPAL; ?>cadastro"class="waves-effect waves-light light-blue btn-small">Cadastrar</a>
        </div>
        <br><br>

      </div>
    </section>
    <div class="parallax"><img  src="<?php echo DOMINIO_PRINCIPAL; ?>img/background1.jpg" alt="cachorrinho bonito"></div>
  </header>

  <?php include('conteudo.php'); ?>

    <!-- CDN JQUERY -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Arquivo js do materialize -->
    <script type="text/javascript" src="<?php echo DOMINIO_PRINCIPAL; ?>js/materialize.js"></script>
    <script type="text/javascript" src="<?php echo DOMINIO_PRINCIPAL; ?>js/init.js"></script>
  </body>
</html>
