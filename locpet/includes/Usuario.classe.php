<?php
	class Usuario // Classe Usuario
	{
		public function login($email, $senha){ // Função publica de login com dois parametro email e senha
			global $pdo; // uma variavel global assim ela pode ser acessada de qualquer lugar

			// select da tabela dadosDono com a condição WHERE caso o email seja igual email e senha igual a senha o usuario pode entrar 
			$sql = "SELECT * FROM dadosdono WHERE email = :email AND senha = :senha";
			$sql = $pdo->prepare($sql);

			// Mascarando dados e criptografando para dar Match com o banco de dados
			$sql->bindValue(":email", mascaraDeDados($email));
			$sql->bindValue(":senha", criptografar($senha));
			//Executando o banco de dados
			$sql->execute();
			
			// verificando se tem usuario com aqueles dados passado acima
			if($sql->rowCount() > 0){
				$dado = $sql->fetch();

				// Criando uma sessão chamada nomeUsuario que vai armazenar $dado['nome'] nome esta sendo pego do banco de dados graças ao nosso select
				$_SESSION['nomeUsuario'] = $dado['nome'];

				return true;
			}else{
				return false;
			}
		}

		public function logado($id){ // Função logado vai fazer um select de todos os dados que vamos usar nessa sessão
			global $pdo;
			$array = array(); // Vamos armazenar um array de informações

			//Fazendo um select com um inner join de 3 tabelas que é dadosDono - coleira - dadosPet
			//Inner join nada mais que liga uma tabela na outra atraves de uma foreing key que tem a mesma informação que a primary key de outra tabela.
			// On faz a verificação se os dados são iguais e WHERE esta fazendo a condição final
			$sql = "SELECT cpf, nome, sobrenome, telefone, email, nomePet, codColeira, latitude, longitude, horarioAtiv 
			FROM dadosdono
			INNER JOIN coleira ON dadosdono.cpf = coleira.idDonoColeira
			INNER JOIN dadospet ON dadosdono.cpf = dadospet.idDono WHERE nome = :nome";

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

