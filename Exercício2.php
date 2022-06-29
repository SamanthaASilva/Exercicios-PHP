<?php

echo "\n";
$num1 = readline ('Digite o primeiro número: ');
echo "\n";

if ($num1 % 2 == 0)
{
    echo "O número $num1 é divisível por 2!\n";
}
else{
    echo "O número $num1 não é divisível por 2!\n";
}
if($num1 % 5 == 0)
{
    echo "O número $num1 é divisível por 5!\n";
}
else{
    echo "O número $num1 não é divisível por 5!\n";
}
if($num1 % 10 == 0)
{
    echo "O número $num1 é divisível por 10!\n";
}
else{
    echo "O número $num1 não é divisível por 10!\n";
}


?>

