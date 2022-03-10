<?php 
  include('../../includes/verificandoAcesso.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>LocPet</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo DOMINIO_PRINCIPAL; ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo DOMINIO_PRINCIPAL; ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link rel="icon" href="<?php echo DOMINIO_PRINCIPAL ?>favicon.ico" type="image/x-icon">
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo DOMINIO_PRINCIPAL; ?>perfil" class="brand-logo"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
      <!-- Menu desktop -->
      <ul class="right hide-on-med-and-down">

        <li><a href="#">Configurações</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil">Localização</a></li>
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
        <li><a href="#">Configurações</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil">Localização</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/controle-racao/">Controle de Ração</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/produtos/">Meus Produtos</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>includes/sair.php">Sair</a></li>
      </ul>
      <!--Fim Menu Mobile -->
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons grey-text">settings</i></a>
    </div>
  </nav>
  <div class="container" style="text-align: center;">
    <div class="section">
       <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">person</i></h2>
            <h5 class="center">Editar Dados:</h5>
          </div>
        </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s6">
                        <input id="nome" type="text" name="nome" class="validate" value="<?php echo revertMascara($usuarioLogado['nome']);?>" disabled="">
                        <label for="nome">Nome: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="sobrenome" type="text" name="sobrenome" class="validate" value="<?php echo revertMascara($usuarioLogado['sobrenome']);?>" disabled="">
                        <label for="sobrenome">Sobrenome: </label>
                    </div>

                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" value="<?php echo revertMascara($usuarioLogado['email']);?>" class="validate" disabled="">
                        <label for="email">E-mail: </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">

                    <div class="input-field col s6">
                        <input id="cpf" type="text" name="cpf" value="<?php echo revertMascara($usuarioLogado['cpf']);?>" class="validate" disabled="">
                        <label for="cpf">CPF: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="tell" type="text" name="tell" value="<?php echo revertMascara($usuarioLogado['telefone']);?>" class="validate" disabled="">
                        <label for="tell">Telefone: </label>
                    </div>
                </div>
            </div>
        <form method="post" action="atualizarDados.php">
              <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input id="senha" type="password" required="" name="senha" class="validate">
                        <label for="senha">Senha: </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <button type="submit" name="atualizar" class="btn waves-effect white-text waves-light">Atualizar Dados</button>
                </div>
            </div>
        </form>
        <label>Versão 1.0.1</label><br>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/materialize.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/init.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/mascaraJquery.js"></script>
  </body>
</html>
