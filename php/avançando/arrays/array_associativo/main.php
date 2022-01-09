<?php
/*
* Arrays Associativos tem uma string ou int  denominada Key seguido => do valor*/
 //*nós que definimos o valor do indice
 //* ex:
$conta = [
	37552507802 => 'samira',
    'titular' => 'Sami',
	'saldo' =>  1000
];

//neste caso como definimos o indice que no caso 'titular', acessamos através da key

$conta2 = [
	'titular' => 'Zé',
	'saldo' => 500
];

$conta3 = [
	'titular' => 'cleusa',
	'saldo' => 400
];

//ex para acessar individualmente
//echo $conta ['titular'] . PHP_EOL;

//ex para acessar todos,
$contas = [$conta, $conta2, $conta3];

for($i = 0; $i < count($contas); $i++){

	echo $contas[$i] ['titular'] . PHP_EOL;

}
