<?php 
	header('Content-type: text/html; charset=utf-8');

	// Iniciando uma sessão para guarda informações do usuário enquanto ele estiver logado
	session_start();


	// Pegando o horário de São Paulo
	date_default_timezone_set('America/Sao_Paulo');
	define('DOMINIO_PRINCIPAL', 'SEU DOMINIO');

 	//localhost/127.0.0.1 = Onde meu banco de dados esta hospedado
	define('HOST','localhost');
	//locpet = Nome do banco de dados
	define('BD','tente_nao_morrer');
	//root = Meu usuario do banco
	define('USER', 'root');
	// password = Senha do banco
	define('PASS', ''); 

	global $pdo;

	//Verificando a conexão e impossibilidando de voltar erro para o usuario sobre a conexão
	try {
	    // http://php.net/manual/en/pdo.connections.php
	    $pdo = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Tratamento de erro
	} catch(PDOException $erro) {
	    echo $erro->getMessage();
	    exit;
	}

	//Acessando a nossas funções
	require_once 'funcoes.php';

?>