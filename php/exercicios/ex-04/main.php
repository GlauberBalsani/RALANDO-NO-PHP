<?php

/*Fazer método que recebe 3 valores e o método retorna o menor dentre eles.*/

$menor;
 
function menor_valor (float $n1, $n2, $n3)
{
    if ($n1 < $n2 and $n1 < $n3){
        echo $n1 . PHP_EOL;
    } elseif ($n2 < $n1 and $n2 < $n3){
        echo $n2 . PHP_EOL;
    } elseif ($n3 < $n1 and $n3 < $n2){
        echo $n3 . PHP_EOL;
    }else{
        echo "ERRO!" . PHP_EOL;
    }

}

$n1 = readline ("Digite n1:") . PHP_EOL;

$n2 = readline ("Digite n2:") . PHP_EOL;

$n3 = readline ("Digite n3:") . PHP_EOL;

$menor = menor_valor($n1, $n2, $n3);

echo $menor . PHP_EOL;

