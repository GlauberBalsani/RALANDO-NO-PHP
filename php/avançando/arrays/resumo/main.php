<?php

/**crie um novo arquivo
 * contas-correntes.php
 * Nele declare 3 contas
 * usando um array associativo para cada conta .  :
 */

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];


/**
 * Agora guarde os 
 * 3 arrays associativos 
 * dentro 
 * de um array simples:
 * 
 * 
 */

$contasCorrentes = [$conta1, $conta2, $conta3];



/**
 * 
 * Por fim, 
 * use um laço para imprimir 
 * o titular de cada conta:
 */

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}