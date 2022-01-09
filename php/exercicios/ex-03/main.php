<?php
/*1. Faça um programa que leia um vetor de 10 posições e verifique se existem valores
iguais e os escreva na tela  */

$vetor = [];
$j = 0;


for($i = 1; $i <= 10; $i++){
    $vetor[] = readline(" : ");
  
}

for($i = 0; $i <= 10; $i++){
    for ($j = $i + 1; $j <=10; $j++){
        if([$j] == [$i]){
            echo [$i];
        }
    }
}