<?php 

  require '../includes/verificandoAcesso.php'; 
  if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])):
  endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo DOMINIO_PRINCIPAL; ?>img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="<?php echo DOMINIO_PRINCIPAL; ?>css/bootstrap.min.css">

    <!-- CSS PURO -->
    <link rel="stylesheet" href="<?php echo DOMINIO_PRINCIPAL; ?>css/estilo.css">

    <title>Tower Defender</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg menu">
        <a class="navbar-brand" href="<?php echo DOMINIO_PRINCIPAL; ?>perfil"><img src="<?php echo DOMINIO_PRINCIPAL; ?>img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>     
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#galeria">GELERIA DE FOTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DOMINIO_PRINCIPAL; ?>perfil/rank">RANK DO JOGO</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-left">
              <li class="nav-item dropdown">
                  <a  class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $username;?>
                  </a>
                  <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="<?php echo DOMINIO_PRINCIPAL; ?>includes/sair.php">Sair</a></li>
                  </ul>
              </li>
            </ul>
        </div>
    </nav>
    <div  class="wid-70">
        <main class="fundo">
            <div class="borda-cima"></div>
            <div class="destaque-home">
                <div class="img-logo">
                    <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/logo.png" alt="">
                </div>
    
                <span><a href="#" target="_blank" rel="noopener noreferrer">JOGUE DE GR??TIS</a></span>
                <p>
                    PLATAFORMAS:
                </p>
                <div class="destaque-home-img">
                    <a class="navbar-brand" href="<?php echo DOMINIO_PRINCIPAL; ?>"><img src="<?php echo DOMINIO_PRINCIPAL; ?>img/android.png" alt=""></a>
                    <a class="navbar-brand" href="<?php echo DOMINIO_PRINCIPAL; ?>"><img src="<?php echo DOMINIO_PRINCIPAL; ?>img/logo_win10.png" alt=""></a>
                    <a class="navbar-brand" href="<?php echo DOMINIO_PRINCIPAL; ?>"><img src="<?php echo DOMINIO_PRINCIPAL; ?>img/linux.png" alt=""></a>
                </div>
                
            </div>
            <div class="borda-baixo"></div>
            <div class="clearfix"></div>
        </main>
        <hr>
        <section class="row">
            <div class="col-md-6 video-texto">
                <h2 id="sobre">TENTE N??O MORRER!</h2>
                <h3>Hist??ria</h3>
                <p>
                    Nessa aventura voc?? tem o objetivo de ajudar o Pedro a sobreviver a seus traumas e conseguir voltar a vida, este jogo ?? bastante complicado com diversos obst??culos para ultrapassar e com uma dificuldade avan??ada, venha ajudar Pedro nessa fase dif??cil da vida

                </p>
            </div>

            <div class="col-md-6 align-self-center video-jogo">
                <figure class="embed-responsive embed-responsive-16by9">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/P8ZzomcPp_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
            </div>

        </section>
        <hr>
        <section class="row">
            <div class="col-md-6 personagem-texto">
                <h2>PERSONAGEM</h2>
                <h3>Pedro</h3>
                <p>
                    Pedro ?? jovem, que ap??s perder sua fam??lia em um desastre natural se v?? solit??rio e vai morar com sua tia. Quando passa mal, acaba  sofrendo um acidente e entrando em coma e agora luta contra seu passado, e seus traumas para conseguir sobreviver.
                </p>
                
            </div>
            <div class="col-md-6 align-self-center personagem-jogo">
                <figure>
                    <img
                    src="<?php echo DOMINIO_PRINCIPAL; ?>img/personagem.gif"
                    alt="Personagem.">
                  </figure>
            </div>

        </section>

        <section class="row">
            <div class="col-md-12">
                <h2 id="galeria">GELERIA</h2>
                <!-- Images used to open the lightbox -->
                <div class="row">
                    <div class="galeria">
                        <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/foto1.JPG">
                    </div>
                    <div class="galeria">
                        <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/foto2.JPG">
                    </div>
                    <div class="galeria">
                        <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/foto3.JPG">
                    </div>
                    <div class="galeria">
                        <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/foto4.JPG">
                    </div>
                </div>
                
            </div>
        </section>
    </div>
    <footer>
        <div class="col-md-12">
            <img src="<?php echo DOMINIO_PRINCIPAL; ?>img/logo.png" alt="">
        </div>
        <div class="col-md-12">
            <p>DIREITOS AUTORAIS</p>
        </div>
    </footer>
    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/popper.min.js" ></script>
    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/bootstrap.min.js" ></script>
</body>
</html>