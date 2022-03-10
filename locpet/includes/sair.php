<?php

include('conf.php');

// muda o valor de idUsuario para false
$_SESSION['idUsuario'] = false;
 
// finaliza a sessão
session_destroy();
 
// retorna para a index.php
header('Location:'.DOMINIO_PRINCIPAL);

?>