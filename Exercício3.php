<?php

define  ('NOME', readline ('Digite seu nome: '));
echo "\n";
define ('SEXO', readline ('Digite 1 para feminino ou 2 para masculino: '));
echo "\n";
define ('IDADE', readline ('Digite sua idade: '));


if(IDADE < 25 && SEXO == 1)
{
    echo NOME, " ACEITA";
}
else{
    echo NOME, " NÃO ACEITO(A)"; 
}
echo "\n\nFim";

?>