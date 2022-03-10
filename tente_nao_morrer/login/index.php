<?php include('../includes/conf.php'); 


// muda o valor de idUsuario para false
$_SESSION['idUsuario'] = false;
 
// finaliza a sessão
session_destroy();


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

    <title>Tente não morrer - login</title>
</head>
<body>
    <nav class="logo-acesso">
        <a class="navbar-brand" href="<?php echo DOMINIO_PRINCIPAL; ?>"><img src="<?php echo DOMINIO_PRINCIPAL; ?>img/logo.png" alt=""></a>
    </nav>
    <form action="acessar.php" method="post">
        <h2>INICIAR JORNADA</h2>
        <label for="email"> E-mail: </label>
        <input id="email" type="email" required="" name="email" class="validate">
        <label for="senha"> Senha: </label>
        <input id="senha" type="password" required="" name="senha" class="validate">
        <a href="<?php echo DOMINIO_PRINCIPAL; ?>cadastro" class="black-text">Não tem Acesso? Clique aqui!</a>

        <button type="submit" name="entrar">Entrar</button>
    </form>


    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/popper.min.js" ></script>
    <script src="<?php echo DOMINIO_PRINCIPAL; ?>js/bootstrap.min.js" ></script>
</body>
</html>