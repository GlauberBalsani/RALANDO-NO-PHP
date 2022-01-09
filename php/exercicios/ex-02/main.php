<?php

/*3. Fazer método que calcule a leitura de uma temperatura medida em graus Celsius e
faça a conversão em graus Fahrenheit. A fórmula para a conversão das temperaturas é
F = (9 * C + 160)/5, sendo F a temperatura em Fahrenheit e C em */


function converte($C ){

   return  (9 * $C + 160)/5;
}


$C = readline("Digite a temperatura em C: ") . PHP_EOL;
$F = converte($C);
echo $F . PHP_EOL;