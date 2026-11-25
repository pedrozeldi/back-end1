<?php

include "config/conexao.php";

$sql = "SELECT * FROM tb_produtos";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque Fácil | Loja Gamer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Lista de Produtos</h2>
<table>
    <tr>
        <th>imagem</th>
        <th>ID</th>
        <th>Produto</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
</tr>
<?php while($produto = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
<tr>
                <td>
                    <?php if (!empty($produto['imagem'])) { ?>
                        <img src="uploads/<?php echo $produto['imagem']; ?>" width="100" alt="Imagem do produto">
                    <?php } else { ?>
                        Sem imagem
                    <?php } ?>
                </td>

    
    <td><?php echo $produto['id_produto']; ?></td>
    <td><?php echo $produto['nome_produto']; ?></td>
    <td><?php echo $produto['categoria']; ?></td>
    <td><?php echo $produto['preco']; ?></td>
    <td><?php echo $produto['quantidade']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $produto['id_produto']; ?> ">Editar</a>

        <a href="excluir.php?id=<?php echo $produto['id_produto']; ?> ">Excluir</a>
</td>

</tr>
<?php } ?>

</table>
<a href="cadastrar.html">Voltar para o cadastro</a>
</body>
</html>