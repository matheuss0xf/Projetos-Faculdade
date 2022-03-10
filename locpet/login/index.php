<?php 
  include("../includes/conf.php");
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

  <link rel="icon" href="<?php echo DOMINIO_PRINCIPAL ?>favicon.ico" type="image/x-icon">

  <!-- Meu CSS -->
  <link href="<?php echo DOMINIO_PRINCIPAL; ?>css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <!-- Menu com a logo -->
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo DOMINIO_PRINCIPAL; ?>" class="brand-logo"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
    </div>
  </nav>

  <div class="container center" >
    <div class="section">
      <h3 class="center black-text">Login</h3>

      <!-- Formulario -->
      <div class="row">
        <form class="col s12" action="acessar.php" method="post">
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input id="email" type="email" required="" name="email" class="validate">
                        <label for="email">E-mail: </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="senha" type="password" required="" name="senha" class="validate">
                        <label for="senha">Senha: </label>
                    </div>
                </div>
            </div>
            <!-- Botões de login e cadastro -->
            <div class="row">
                <div class="col s6 m4">
                    <a href="<?php echo DOMINIO_PRINCIPAL; ?>cadastro" class="black-text">Cadastrar</a>
                </div>
                <div class="col s6 m4">
                    <button type="submit" name="entrar" class="btn waves-effect white-text waves-light">ENTRAR</button>
                </div>
            </div>
        </form>
      </div>
        <label>Versão 1.0.1</label><br>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/materialize.js"></script>

  </body>
</html>
