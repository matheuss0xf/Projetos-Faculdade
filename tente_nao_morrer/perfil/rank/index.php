<?php 

  require '../../includes/verificandoAcesso.php'; 
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
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $username;?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="<?php echo DOMINIO_PRINCIPAL; ?>includes/sair.php">Sair</a></li>
                  </ul>
              </li>
            </ul>
        </div>
    </nav>
    
    <!-- Conteúdo -->
    <?php 
    
    $url = "http://msd-faculdade.com.br/tente_nao_morrer/jogo_/rank";
    $ch = curl_init($url);
    curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));
    ?>
    <div  class="wid-70">
	<div class="container">
		<header>
            <h1>RANK TOP 10</h1>
		</header>
			<div class="wrapper">
				<table>
					<thead>
						<tr>
							<th>Rank</th>
							<th>Nome</th>
							<th>Mortes</th>
						</tr>
					</thead>
					<tbody>
                        <?  foreach ($resultado as $posicao => $usuario) { $posicao = $posicao+1?>
                            
						<tr>
                            <td class="rank"><?=@$posicao?></td>
                            <td class="team"><?=@$usuario->username?></td>
                            <td class="points"><?=@$usuario->qtd_mortes?></td>
                        </tr>
                        <?}?> 
					</tbody>
				</table>
			</div>
		</div>
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