<?php 



//Função para criptografar senha 
function criptografar($senha){
    return sha1(md5($senha));
}
// Criando uma criptografia em base64 para mascarar o nosso banco de dados e criando uma para reverte essa criptografia para apresentar no site 
function mascaraDeDados($base){
    return base64_encode($base);
}

function revertMascara($base){
    return base64_decode($base);
}
?>