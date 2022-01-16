<?php
/*1. Faça um programa que leia um vetor de 10 posições e verifique se existem valores
iguais e os escreva na tela  */



$arr = [1, 1, 2, 2, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($arr); $i++){
     echo $arr[$i] . " - ";
}

echo " " . PHP_EOL;

$arr = array_unique(array_diff_assoc($arr, array_unique($arr)));


    echo "Elementos repetidos são:" . PHP_EOL;
    foreach($arr as $item){
        echo $item . PHP_EOL;
    }