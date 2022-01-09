<?php
 
function exibeMensagem ($mensagem) {
	echo  $mensagem . PHP_EOL;
}



$contasCorrentes = [//lista que armazenas as outras contas
	'375.525.078-02' => [
		 'titular' => 'Sami',
		 'saldo' =>  10000 
	],
	'376.626.263-38' => [
		 'titular' => 'cleusa',
		 'saldo' => 300
	],
	'087.729.928-88' =>[// neste caso a chave começa cam 0 coloca aspas simples que funciona
		 'titular' => 'Zé',
		 'saldo' => 100
	]

 
];

/*adicionando um outro array na lista
$contasCorrentes['222.323.432.43'] = [
	'titular' => 'matilda',
	'saldo' => '2000'
];*/


if  (500 > $contasCorrentes['375.525.078-02'] ['saldo']) {
	exibeMensagem(mensagem:"Você não pode sacar");

}else {
	$contasCorrentes ['375.525.078-02'] ['saldo'] -= 500; 
}

if (500 > $contasCorrentes ['376.626.263-38'] ['saldo'] ){
	exibeMensagem(mensagem:"Você não pode sacar");
} else{
	 $contasCorrentes ['376.626.263-38'] ['saldo'] -= 500 . PHP_EOL;
}


/*
 * digamos que queira sacar um valor deste array
 * pdemos acessar a chvae 'saldo', através do CPF
 * e subtrair 500
 */

foreach ($contasCorrentes as $cpf => $conta ){
	exibeMensagem ($cpf . "  " . $conta['titular'] . "  " . $conta['saldo']);

}

