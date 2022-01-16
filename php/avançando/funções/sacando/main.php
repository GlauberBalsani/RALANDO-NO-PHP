<?php
 
require 'funcoes.php';//chamda da função no arquivo externo
/**********************************************************/

/* O include apenas produz um warning que pode ser "abafado" com @.
	require produz um erro E_COMPILE_ERROR, o que encerra a execução do script. */

$contasCorrentes = [//lista que armazenas as outras contas
	'375.525.078-02' => [
		 'titular' => 'Sami',
		 'saldo' =>  '10000' 
		 
	],
	'376.626.263-38' => [
		 'titular' => 'cleusa',
		 'saldo' => 300
	],
	'087.729.928-88' =>[// neste caso a chave começa cam 0 coloca aspas simples que funciona
		 'titular' => 'Ze',
		 'saldo' => 100
	]

 
];

/*adicionando um outro array na lista
$contasCorrentes['222.323.432.43'] = [
	'titular' => 'matilda',
	'saldo' => '2000'
];*/


$contasCorrentes['375.525.078-02'] = sacar(
	$contasCorrentes['375.525.078-02'], valor_A_Sacar: 500);

$contasCorrentes ['376.626.263-38' ] = sacar (
	$contasCorrentes ['376.626.263-38' ], valor_A_Sacar: 200 
); 


$contasCorrentes ['087.729.928-88'] = depositar(
	$contasCorrentes['087.729.928-88'],valorAdepositar: 900
);


maiuscula( conta: $contasCorrentes['375.525.078-02']);

/*
 * digamos que queira sacar um valor deste array
 * pdemos acessar a chvae 'saldo', através do CPF
 * e subtrair 500
 */



 echo '<ul>';
 foreach ($contasCorrentes as $cpf => $conta ) {
	exibeConta ($conta);

}

echo '</ul>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>











