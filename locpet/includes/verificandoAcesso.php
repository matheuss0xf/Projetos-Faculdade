<?php
	
	require 'conf.php'; 

	if(isset($_SESSION['nomeUsuario']) && !empty($_SESSION['nomeUsuario'])){
		require_once 'Usuario.classe.php';
		$classUsuario = new Usuario();

		$usuarioLogado = $classUsuario->logado($_SESSION['nomeUsuario']);

		$nomeUsuario = $usuarioLogado['nome'];

	}else{
		header('Location: '.DOMINIO_PRINCIPAL);
	}
?>