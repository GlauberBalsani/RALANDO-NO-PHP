<?php
/*EXEMPLO DE CONTAS CORRENTES*/
/*se quiser adicionar um elemento no array*/
$list = [21, 44, 55, 234, 567, 23, 11, -2, 2, 31, 13];

/*para adicionar no ultimo indice do array 
deixamos o indice vazio, da pra usar a fução count(),
mas seria trabalho*/
$list [] = 29;//
foreach($list as $registro){
	echo $registro . PHP_EOL;
}


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

foreach ($contas as $cpf => $conta ){

	echo $cpf . PHP_EOL;

}

