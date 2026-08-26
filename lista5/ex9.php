<?php

$n1 = 10;
$n2 = 5;
$operação = "+";

if($operação == "+"){
    echo "soma é: ", $n1 + $n2;
}
else if($operação == "-"){
    echo "Subtração é: ", $n1 - $n2;
}
else if($operação == "*"){
    echo "multiplicação é: ", $n1 * $n2;
}
else if($operação == "/"){
    echo "Divisão é: ", $n1 / $n2;
}
else{
    echo "Operação invalida";
}