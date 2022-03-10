<?php
include('conexao.php'); 

$id = $_POST["id"];
$qtd_morte = $_POST["qtd_morte"];


$resposta = array();

if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$comando = "UPDATE usuario SET qtd_mortes=$qtd_morte WHERE id=$id";

mysqli_query($conexao,$comando);
if (mysqli_affected_rows($conexao)>0){
	$resposta["msg"] = "ok";
}else{
	$resposta["msg"] = "falha";
}

echo json_encode($resposta);

mysqli_close($conexao);

?>