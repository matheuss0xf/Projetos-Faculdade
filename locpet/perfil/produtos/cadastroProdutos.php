<?php
	
	include('../../includes/verificandoAcesso.php');
	//isset verifica se existe esse REQUEST $_POST que pega o valor do input com name cadastroProdutos
	//Caso exista ele vai passar por todo esse processo abaixo.
	if(isset($_POST['cadastroProdutos'])){
	    $nomePet = isset($_POST['nomePet']) ? $_POST['nomePet'] : null;
	    $raca = isset($_POST['raca']) ? $_POST['raca'] : null;
	    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
	    $corPet = isset($_POST['corPet']) ? $_POST['corPet'] : null;
	    $idDono = $usuarioLogado['cpf'];

	    $codColeira = isset($_POST['codColeira']) ? $_POST['codColeira'] : null;


	    // COMADO PARA INSERIR DADOS NA TABELA DADOSPET E COLEIRA
		$sql = "INSERT INTO dadosPet(nomePet, raca, sexo, cor, idDono) VALUES (:nomePet, :raca, :sexo, :cor, :idDono);
		INSERT INTO coleira(codColeira, idDonoColeira) VALUES (:codColeira, :idDonoColeira);";
		// Esta preparando a Query a cima para fazer as funções abaixo
		// $pdo é a conexão do banco de dados.
        $dados = $pdo->prepare($sql); 

        // Mascara de dados coloca os arquivos em base64
        $dados->bindparam(':nomePet', mascaraDeDados($nomePet)); // BindParam - Recebe como argumento uma referência que nesse caso é $nomePet que vai insrir sua informação na coluna :nomePet.
        $dados->bindparam(':raca', mascaraDeDados($raca));
        $dados->bindparam(':sexo', mascaraDeDados($sexo));
        $dados->bindparam(':cor', mascaraDeDados($corPet));
        $dados->bindparam(':idDono', mascaraDeDados($idDono));
        $dados->bindparam(':codColeira', mascaraDeDados($codColeira));
        $dados->bindparam(':idDonoColeira', mascaraDeDados($idDono));
        $dados->execute(); // Execute manda para o banco de dados a execução do script montado acima.

        // Assim que executar o banco de dados e dar tudo certo o usuário é enviado para pagina produtos
        header('Location: '.DOMINIO_PRINCIPAL.'/perfil/produtos'); 
	}else{
		header('Location: '.DOMINIO_PRINCIPAL.'/perfil/produtos');
	}
?>