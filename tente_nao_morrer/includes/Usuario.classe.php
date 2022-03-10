<?php
	class Usuario // Classe Usuario
	{
		public function login($email, $senha){ // Função publica de login com dois parametro email e senha
			global $pdo; // uma variavel global assim ela pode ser acessada de qualquer lugar

			// select da tabela usuario com a condição WHERE caso o email seja igual email e senha igual a senha o usuario pode entrar 
			$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
			$sql = $pdo->prepare($sql);

			// Mascarando dados e criptografando para dar Match com o banco de dados
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", criptografar($senha));
			//Executando o banco de dados
			$sql->execute();
			
			// verificando se tem usuario com aqueles dados passado acima
			if($sql->rowCount() > 0){
				$dado = $sql->fetch();

				// Criando uma sessão chamada username que vai armazenar $dado['nome'] nome esta sendo pego do banco de dados graças ao nosso select
				$_SESSION['username'] = $dado['nome'];

				return true;
			}else{
				return false;
			}
		}

		public function logado($id){ // Função logado vai fazer um select de todos os dados que vamos usar nessa sessão
			global $pdo;
			$array = array(); // Vamos armazenar um array de informações

			$sql = "SELECT username,nome
			FROM usuario WHERE nome = :nome";

			$sql = $pdo->prepare($sql);
			$sql->bindValue(":nome", $id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

	}
?>

