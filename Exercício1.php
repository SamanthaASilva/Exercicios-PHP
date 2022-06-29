<?php

echo "\nDigite dois números e observe a soma de ambos, onde se maior que 20 será acrescentado 8 e se menor ou igual a 20
será descrescido 5 números\n\n";

$num1 = readline ('Digite o primeiro número: ');
echo "\n";
$num2 = readline ('Digite o segundo número: ');

$soma = $num1 + $num2;

if ($soma > 20)
{
    $soma +=  8;
    echo "\nOs números digitados somado a 8 é igual a ", $soma;
}
elseif ($soma <= 20)
{
    $soma -=  5;
    echo "\nOs números digitados subtraido a 5 é igual a ", $soma;
}
?>