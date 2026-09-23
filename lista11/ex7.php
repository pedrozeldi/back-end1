<?php

$email = $_POST['email'];
$senha = $_POST['email'];

if($email == "pedrozeldi@edu.senai.br" && $senha == "pedro123" ){
    echo "Login, bem sucedido!!!";
}else{
    echo "Login ou senha invalido!!!";
}
?>