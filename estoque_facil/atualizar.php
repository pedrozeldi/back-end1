<?php

include "config/conexao.php";

$id_produto = $_POST["id"];
$nome_produto = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"]; 

$sql = "UPDATE tb_produtos SET 
nome_produto = '$nome',
categoria = '$categoria',
preco = '$preco',
quantidade = '$quantidade'
WHERE id_produto = $id";

if($conexao->query($sql)){
    echo "✅ Produto excluido com sucesso";
}
else{
    echo"❌ Erro ao excluir";
}
echo "<br> <a href='listar.php'>Voltar</a>";