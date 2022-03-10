<?php 
  include('../../includes/verificandoAcesso.php');
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
      <a id="logo-container" href="<?php echo DOMINIO_PRINCIPAL; ?>perfil" class="brand-logo"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
      <!-- Menu desktop -->
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/configuracao/">Configurações</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil">Localização</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/controle-racao/">Controle de Ração</a></li>
        <li><a href="#">Meus Produtos</a></li>
        <li><a href="#">Olá, <?php echo revertMascara($nomeUsuario);?></a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>/includes/sair.php">Sair</a></li>
      </ul>
       <!--Fim  Menu desktop -->
      <!-- Menu Mobile -->

      <ul id="nav-mobile" class="sidenav">
        <a href="#"><img class="responsive-img" src="<?php echo DOMINIO_PRINCIPAL; ?>img/logotipov2.png"/></a>
        <li><a href="#">Olá, <?php echo revertMascara($nomeUsuario);?></a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/configuracao/">Configurações</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil">Localização</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/controle-racao/">Controle de Ração</a></li>
        <li><a href="#">Meus Produtos</a></li>
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>/includes/sair.php">Sair</a></li>
      </ul>
      <!--Fim Menu Mobile -->
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons grey-text">settings</i></a>
    </div>
  </nav>

  <div class="container" style="text-align: center;">
    <div class="section">
       <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">add</i></h2>
            <h5 class="center">Cadastrar Produto</h5>
          </div>
        </div>
                <!-- NOSSO METODO É POST PARA PRESERVA A SEGURANÇÃ DOS DADOS E A ACTION É PRA ONDE VAMOS MANDAR ESSE FORMULARIO. -->
        <form method="post" action="cadastroProdutos.php">
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input id="codColeira" type="text" required="" name="codColeira" class="validate ">
                        <label for="codColeira">Código da Coleira: </label>
                    </div>
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
                        <input id="corPet" type="text" name="corPet" required="" class="validate">
                        <label for="corPet">Cor do Pet: </label>
                    </div>
                </div>
            </div>
          

            <div class="row">

                <div class="col s12 m4">
                    <button type="submit" name="cadastroProdutos" class="btn waves-effect white-text waves-light">Cadastrar Produto</button>
                </div>
            </div>
        </form>
        <h5 class="center">Status:</h5>
        <div class="row">
          <div class="col s12">
            <p class="left">Bolinha Verde: Pet dentro da zona de conforto!</p>
            <br>
            <p class="left">Bolinha Vermelha: Pet fora da zona de conforto!</p>
            <br>
            <p class="left">Bolinha Cinza: Rastreamento desativado!</p>
          </div>
        </div>

        <!-- ESTATICO -->
          <div class="section">
            <table> 
              <thead>
                <tr>
                    <th>Produto</th>
                    <th></th>
                    <th>Nome do Mascote</th>
                    <th>Localização</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>DGHW-6327-7327-38</td>
                  <td><div style="background-color:red; width: 10px; height: 10px; border-radius: 100%;"></div></td>
                  <td>Apolo</td>
                  <td>-23.479970<br> -46.686468</td>
                </tr>
                <tr>
                  <td>DGWW-6327-7327-38</td>
                  <td><div style="background-color:green; width: 10px; height: 10px; border-radius: 100%;"></div></td>
                  <td>Dinha </td>
                  <td>-23.486622<br> -46.709599</td>
                </tr>
                <tr>
                  <td>DOQW-6327-7327-38</td>
                  <td><div style="background-color:gray; width: 10px; height: 10px; border-radius: 100%;"></div></td>
                  <td>kiki </td>
                  <td><br></td>
                </tr>

              </tbody>
            </table>
          </div>
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
