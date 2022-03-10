<?php
include('conexao.php'); 
require_once '../includes/funcoes.php';

$email = addslashes($_POST["email"]);
$senha = criptografar(addslashes($_POST["senha"]));

$usuario = array();
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$comando   = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
$resultado = mysqli_query($conexao,$comando);
if ($dado = mysqli_fetch_assoc($resultado)){
	$usuario["id"]    = $dado["id"];
	$usuario["username"]  = $dado["username"];
	$usuario["email"] = $dado["email"];
	$usuario["qtd_mortes"] = $dado["qtd_mortes"];
	$usuario["qtd_morte_final"] = $dado["qtd_morte_final"];
	echo json_encode($usuario);
}else{
	echo json_encode($usuario);
}

mysqli_free_result($resultado);
mysqli_close($conexao);

?>