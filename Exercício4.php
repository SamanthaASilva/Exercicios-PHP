<?php

/* $num1 = readline("Digite o primeiro número: ");
echo"\n";
$num2 = readline('Digite o segundo número: ');
echo"\n";
$num3 = readline('Digite o terceiro número: ');
echo"\n";

$maior = max($num1,$num2,$num3);

echo"O maior número digitado é o $maior"; */

$numero = array();
$numero [] = readline('Digite o primeiro número: ');
$numero [] = readline('Digite o primeiro número: ');
$numero [] = readline('Digite o primeiro número: ');


rsort($numero);
echo"\n";
print_r($numero);

?>