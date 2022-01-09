<?php
//foreach

$contas = [//lista que armazenas as outras contas
	37552507802 => [
		 'titular' => 'Sami',
		 'saldo' =>  1000
	],
	37662626338 => [
		 'titular' => 'cleusa',
		 'saldo' => 400
	],
	'08772992888' =>[
		 'titular' => 'Zé',
		 'saldo' => 500
	]

 // neste caso a chve começa cm 0 coloca aspas simles que funciona
];

// o foreach, deixa mais legivel a
 //leitura do codigo.
// ele faz interaçoes somente em arrays e coleções no php
// as $conta criamos a variável conta. que irá mostrar o valor do indice
// nao precisamos saber os indicies para interar a conta no foreach


foreach ($contas as $conta){//
	//para cada uma das contas como conta
	//imprimimos o valor 'titular'
	//
	echo  $conta ['titular'] . PHP_EOL;
}

echo " " . PHP_EOL;
//para aceesar a um especifico  no foreach


foreach ($contas as $cpf => $conta ){

	echo $cpf . PHP_EOL;

}

echo " " . PHP_EOL;

/*se quiser adicionar um elemento no array*/
$list = [21, 44, 55, 234, 567, 23, 11, -2, 2, 31, 13];

/*para adicionar no ultimo indice do array 
deixamos o indice vazio
*/
$list [] = 29;

foreach($list as $registro){
	echo $registro . PHP_EOL;
}

