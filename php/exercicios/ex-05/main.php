<?php

 /*Fazer método que recebe um vetor de número inteiros e retorna a soma dos
números impares.*/

function soma_impar($arr)
{

    $soma = 0;

    foreach($arr as $item){
        if ($item % 2 == 1) {
            $soma += $item;
        }
    }
    return $soma;
}


$arr = [15, 3, 4, 6];
$somaImpar = soma_impar($arr);

echo $somaImpar . PHP_EOL;
