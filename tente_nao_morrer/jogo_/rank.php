<?php 
    include('conexao.php'); 

    $usuario = array();

    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
    
    $comando = "SELECT username, qtd_morte_final FROM usuario 
                WHERE qtd_morte_final > 0 
                ORDER BY qtd_morte_final ASC 
                LIMIT 10";
    $resultado = mysqli_query($conexao,$comando);
    
    $resposta = [];
    
    while ($dado = mysqli_fetch_assoc($resultado)){
        $usuario["username"]  = $dado["username"];
        $usuario["qtd_morte_final"] = $dado["qtd_morte_final"];	
        $resposta[] = $usuario;
    }
    echo json_encode($resposta);
    
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    
?>