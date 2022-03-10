<?php 
  include('../../includes/verificandoAcesso.php');

  // Coletando informação da query select que fizemos com a classe Usuario
  $cpf = $usuarioLogado['cpf'];
  $senha = isset($_POST['senha']) ? $_POST['senha'] : null; // Estamos pegando o Valor que o formulario esta nos enviando pelo name com o method post

  //isset verifica se existe esse REQUEST $_POST que pega o valor do input com name
  //Caso exista ele vai passar por todo esse processo abaixo.
  if(isset($_POST['senha']) && !empty($_POST['senha'])){
      $sql = "UPDATE `dadosdono` SET senha = :senha WHERE cpf = :cpf";

    // Esta preparando a Query a cima para fazer as funções abaixo
    // $pdo é a conexão do banco de dados.
    $sql = $pdo->prepare($sql);

    // BindParam - Recebe como argumento uma referência que nesse caso é $senha que vai insrir sua informação na coluna :senha
    $sql->bindParam(':senha', criptografar($senha));
    $sql->bindParam(':cpf', $cpf);
     
    $sql->execute(); // Execute manda para o banco de dados a execução do script montado acima.

      // Assim que executar o banco de dados e dar tudo certo o usuário é enviado para pagina que esta no Location
    header('Location: '.DOMINIO_PRINCIPAL.'perfil/configuracao/');
    
  }else{
    header('Location: '.DOMINIO_PRINCIPAL.'perfil/configuracao/');
  }
 

?>