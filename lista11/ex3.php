<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

echo "sua média é: ", ($n1 + $n2 + $n3)/3;
echo"<br>";

$media = ($n1 + $n2 + $n3)/3;

if ($media > 6) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>