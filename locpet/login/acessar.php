<?php
	require('../includes/conf.php');
	
	/*
	Pegando dados do formulario de login e válidando eles
	isset verifica se o campo esta preenchido, addcslashes evita que pessoas mal intencionada
	burla o formulario */
	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

		// Estamos puxando a classe Usuario.classe que contém o select que fazemos a verificação para entrar no sistema
		require('../includes/Usuario.classe.php'); 
		
		$classLogin = new Usuario(); // Criando uma instacia da nossa classe Usuario para ultilizar aqui

		// addslashes -> Faz com que não temos escapamento de caracteres quando o usuário preencher o formulario de login
		$email =  addslashes($_POST['email']); 
		$senha = addslashes($_POST['senha']);	

		//Fazendo uma sequencia de verificação
		if($classLogin->login($email, $senha) == true){
			if(isset($_SESSION['nomeUsuario'])){
				header('Location: '.DOMINIO_PRINCIPAL.'perfil');
			}else{
				header('Location: '.DOMINIO_PRINCIPAL.'login');
				echo $_SESSION['idUsuario'];
			}
		}else{
			header('Location: '.DOMINIO_PRINCIPAL.'login');
		}
	}else{
		header('Location: '.DOMINIO_PRINCIPAL);
	}
	
?>