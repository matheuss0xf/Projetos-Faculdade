<?php 
  include('../../includes/verificandoAcesso.php');

  // Coletando informação da query select que fizemos com a classe Usuario
  $cpf = $usuarioLogado['cpf'];
  $horario = isset($_POST['attHora']) ? $_POST['attHora'] : null; // Estamos pegando o Valor que o formulario esta nos enviando pelo name com o method post
  $dateTime = new DateTime(); // DateTime -> Pega o horário atual
  $horario = $dateTime->format('Y/m/d '. $horario); // format -> faz a formatação do dateTime


  //isset verifica se existe esse REQUEST $_POST que pega o valor do input com name
  //Caso exista ele vai passar por todo esse processo abaixo.
  if(isset($_POST['attHora']) && !empty($_POST['attHora'])){
      $sql = "UPDATE `coleira` SET horarioAtiv = :horarioAtiv WHERE idDonoColeira = :idDonoColeira";
    // Esta preparando a Query a cima para fazer as funções abaixo
    // $pdo é a conexão do banco de dados.
    $sql = $pdo->prepare($sql);
    // BindParam - Recebe como argumento uma referência que nesse caso é $horario que vai insrir sua informação na coluna :horarioAtiv.
    $sql->bindParam(':horarioAtiv', $horario);
    $sql->bindParam(':idDonoColeira', $cpf);
    
    // Execute manda para o banco de dados a execução do script montado acima.
    $sql->execute();

    // Assim que executar o banco de dados e dar tudo certo o usuário é enviado para pagina que esta no Location
    header('Location: '.DOMINIO_PRINCIPAL.'perfil/controle-racao/');
    
  }else{
    header('Location: '.DOMINIO_PRINCIPAL.'perfil/controle-racao/');
  }
?>