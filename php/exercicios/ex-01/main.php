<?php

$numeros = [];
$negativos = [];
$soma = 0;
$j = 0;


for($i = 0; $i <=10; $i++){
    $numeros[] = readline(" : ");
    if ($numeros[$i] < 0){
        $negativos[$j] = $numeros[$i];
        $soma += $negativos[$j];
        $j++;
    }
}
$media = $soma /$j;


echo $soma . PHP_EOL;
echo $media . PHP_EOL;