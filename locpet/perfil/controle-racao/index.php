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
        <li><a href="#">Controle de Ração</a></li>
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
        <li><a href="<?php echo DOMINIO_PRINCIPAL; ?>perfil">Localização</a></li>
        <li><a href="#">Controle de Ração</a></li>
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
            <h2 class="center teal-text"><i class="material-icons">restaurant_menu
</i></h2>
            <h5 class="center">Defina os horários para o despejo da ração.  </h5>
          </div>
        </div>
        <!-- NOSSO METODO É POST PARA PRESERVA A SEGURANÇÃ DOS DADOS E A ACTION É PRA ONDE VAMOS MANDAR ESSE FORMULARIO. -->
        <form method="post" action="horarios.php">
            <div class="row">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input id="codigoProd" type="time" name="attHora" required="" class="validate" value='<?php $data = date_create($usuarioLogado["horarioAtiv"]);
                        echo date_format($data, "H:i"); ?>'>

                        <label for="codigoProd"></label>
                        <p>  
                          <i class="material-icons">tag_faces</i>
                          Ex: Ativar despejo de ração a cada 3 horas. 
                        </p>
                    </div>
                </div>
            </div>
          

            <div class="row">
                <div class="col s12 m4">
                    <button type="submit" name="mudarHora" class="btn waves-effect white-text waves-light">Mudar Horário</button>
                </div>
            </div>
        </form>
        <h5 class="center">Horários ativados.</h5>
          <div class="section">
            <table>
              <thead>
                <tr>
                    <th>Data </th>
                    <th>Hora</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><?php 
                        $data = date_create($usuarioLogado["horarioAtiv"]);
                        echo date_format($data, 'd/m/Y');
                        ?></td>
                  <td>
                    16:00
                  </td>
                </tr>
                <tr>
                  <td><?php 
                        $data = date_create($usuarioLogado["horarioAtiv"]);
                        echo date_format($data, 'd/m/Y');
                        ?>
                    </td>
                  <td>
                    22:00                
                  </td>
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

  </body>
</html>
