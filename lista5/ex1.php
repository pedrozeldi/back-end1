<?php
echo "Sistema de Verificação de Aprovação<BR>";

$nota = 7; 

if ($nota > 5) {
    echo "Nota: $nota <br>";
    echo "Parabéns, você foi aprovado!";
} else {
    echo "Nota: $nota <br>";
    echo "Infelizmente, você foi reprovado.";
}
?>