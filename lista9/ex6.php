<?php

$musicas = ["Joao", "Maria", "Lucas", "Guilherme", "Ana", "Pedro"];

foreach ($musicas as $musica) {
    echo "$musica <br>";
}

$qnt = count($musicas);
echo "Quantidade de musicas na playlist: " . $qnt;