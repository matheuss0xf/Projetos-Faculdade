<?php 
  include('../includes/conf.php');
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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo DOMINIO_PRINCIPAL; ?>index.php" class="brand-logo"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
    </div>
  </nav>

  <div class="container" style="text-align: center;">
    <div class="section">
       <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">person</i></h2>
            <h5 class="center">Seus dados:</h5>
          </div>
        </div>
        <form method="post" action="adicionarUser.php">

            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s6">
                        <input id="nome" type="text" name="nome" required="" class="validate">
                        <label for="nome">Nome: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="sobrenome" type="text" name="sobrenome" class="validate">
                        <label for="sobrenome">Sobrenome: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="cpf" type="text" name="cpf" required="" class="validate">
                        <label for="cpf">CPF: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="tell" type="text" name="tell" required="" class="validate">
                        <label for="tell">Telefone: </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input id="codColeira" type="text" name="codColeira" class="validate ">
                        <label for="codColeira">Código da coleira: </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" required="" class="validate">
                        <label for="email">E-mail: </label>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center teal-text"><i class="material-icons">pets</i></h2>
                <h5 class="center">Dados do pet:</h5>
              </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s6">
                        <input id="nomePet" type="text" name="nomePet" required="" class="validate">
                        <label for="nomePet">Nome do pet: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="raca" type="text" name="raca" required="" class="validate">
                        <label for="raca">Raça: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="sexo" type="text" name="sexo" required="" class="validate">
                        <label for="sexo">Sexo: </label>
                    </div>
                    <div class="input-field col s6">
                        <input id="corPet" type="text" name="corPet" class="validate">
                        <label for="corPet">Cor do Pet: </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="senha" type="password" name="senha" class="validate">
                        <label for="senha">Senha: </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6 m4">
                    <a href="<?php echo DOMINIO_PRINCIPAL; ?>login" class="black-text">Já tem Acesso? Clique aqui!</a>
                </div>
                <div class="col s6 m4">
                    <button type="submit" name="cadastrar" class="btn waves-effect white-text waves-light">Cadastrar</button>
                </div>
            </div>
        </form>
        <label id="separa">Versão 1.0.1</label><br>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/materialize.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/init.js"></script>
  <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/mascaraJquery.js"></script>

  </body>
</html>