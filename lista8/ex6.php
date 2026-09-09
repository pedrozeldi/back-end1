<?php

$qnt = 0;

for($num = 1; $num <= 50; $num++){
    if($num % 3 == 0){
        echo "Múltiplo de 3: $num <br>";

        $qnt = $qnt+1;
    }
}

echo "<br> Total de Múltiplos de 3: ", $qnt;