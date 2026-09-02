<?php

echo "Caixa Eletronico - Itaú <BR>";
echo "1 - Consulta saldo, 2 - Fazer saque, 3- Fazer depósito, 4 - Ver extrato, 5 - Sair <BR>";

$opcao = 3;

switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650,81";
        break;
    case 2:
        echo "Qual valor deseja sacar?";
        break;
    case 3:
        echo "Fazer depósito";
        break;
    case 4:
        echo "Ver extrato";
        break;
    case 5:
        echo "Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}