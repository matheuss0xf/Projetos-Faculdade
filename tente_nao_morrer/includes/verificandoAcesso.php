<?php
	
	require 'conf.php'; 

	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		require_once 'Usuario.classe.php';
		$classUsuario = new Usuario();

		$usuarioLogado = $classUsuario->logado($_SESSION['username']);

		$username = $usuarioLogado['username'];

	}else{
		header('Location: '.DOMINIO_PRINCIPAL);
	}
?>