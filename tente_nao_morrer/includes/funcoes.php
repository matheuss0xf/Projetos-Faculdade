<?php 

//Função para criptografar senha 
function criptografar($senha){
    return sha1(md5($senha));
}

?>