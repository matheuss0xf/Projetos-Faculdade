<?php
	
	//inserindo dados
	include_once('../includes/conf.php');

	//Eliminando todas dependecias existente
	ob_start();



	if(isset($_POST['cadastrar'])){
	    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
	    $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
	    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
	    $tell = isset($_POST['tell']) ? $_POST['tell'] : null;
	    $email = isset($_POST['email']) ? $_POST['email'] : null;
	    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

	    $nomePet = isset($_POST['nomePet']) ? $_POST['nomePet'] : null;
	    $raca = isset($_POST['raca']) ? $_POST['raca'] : null;
	    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
	    $corPet = isset($_POST['corPet']) ? $_POST['corPet'] : null;
	    $idDono = isset($_POST['cpf']) ? $_POST['cpf'] : null;

	    $codColeira = isset($_POST['codColeira']) ? $_POST['codColeira'] : null;
		$idDonoC = isset($_POST['cpf']) ? $_POST['cpf'] : null;


		// Fazendo um insert enorme de 3 tabelas
		$sql = "INSERT INTO dadosdono (cpf, nome, sobrenome, telefone, email, senha) VALUES (:cpf, :nome, :sobrenome, :telefone, :email, :senha); 
		INSERT INTO dadosPet(nomePet, raca, sexo, cor, idDono) VALUES (:nomePet, :raca, :sexo, :cor, :idDono);
		INSERT INTO coleira(codColeira, idDonoColeira) VALUES (:codColeira, :idDonoColeira);";

        $dados = $pdo->prepare($sql);

        // Mascara de dados coloca os arquivos em base64
        $dados->bindparam(':cpf', mascaraDeDados($cpf));
        $dados->bindparam(':nome', mascaraDeDados($nome));
        $dados->bindparam(':sobrenome', mascaraDeDados($sobrenome));
        $dados->bindparam(':telefone', mascaraDeDados($tell));
        $dados->bindparam(':email', mascaraDeDados($email));
        $dados->bindparam(':senha', criptografar($senha)); // Criptografando a senha em SHA1 e MD5
        $dados->bindparam(':nomePet', mascaraDeDados($nomePet));
        $dados->bindparam(':raca', mascaraDeDados($raca));
        $dados->bindparam(':sexo', mascaraDeDados($sexo));
        $dados->bindparam(':cor', mascaraDeDados($corPet));
        $dados->bindparam(':idDono', mascaraDeDados($idDono));
        $dados->bindparam(':codColeira', mascaraDeDados($codColeira));
        $dados->bindparam(':idDonoColeira', mascaraDeDados($idDonoC));
        $dados->execute();

        header('Location: '.DOMINIO_PRINCIPAL.'login');
	}else{
		echo 'erro';
	}
?>