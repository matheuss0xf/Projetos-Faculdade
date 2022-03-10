<?php
	
	//inserindo dados
	include_once('../includes/conf.php');

	//Eliminando todas dependecias existente
	ob_start();



	if(isset($_POST['cadastrar'])){
	    $username = isset($_POST['username']) ? $_POST['username'] : null;
	    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
	    $email = isset($_POST['email']) ? $_POST['email'] : null;
	    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
	    $qtd_mortes = isset($_POST['qtd_mortes']) ? $_POST['qtd_mortes'] : 0;
	    $qtd_mortes = isset($_POST['qtd_morte_final']) ? $_POST['qtd_morte_final'] : 0;


		// Fazendo um insert enorme de 3 tabelas
		$sql = "INSERT INTO usuario (username, nome, email, senha, qtd_mortes, qtd_morte_final) VALUES (:username, :nome, :email, :senha, :qtd_mortes, :qtd_morte_final);";

        $dados = $pdo->prepare($sql);

        // Mascara de dados coloca os arquivos em base64
        $dados->bindparam(':email', $email);
        $dados->bindparam(':username', $username);
        $dados->bindparam(':nome', $nome);
        $dados->bindparam(':senha', criptografar($senha)); // Criptografando a senha em SHA1 e MD5
        $dados->bindparam(':qtd_mortes', $qtd_mortes = 0);
        $dados->bindparam(':qtd_morte_final', $qtd_morte_final = 0);
        $dados->execute();

        header('Location: '.DOMINIO_PRINCIPAL.'download');
	}else{
		echo 'erro';
	}
?>