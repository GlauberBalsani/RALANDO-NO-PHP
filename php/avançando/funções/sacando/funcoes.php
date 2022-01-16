<?php


function sacar(array $conta, float  $valor_A_Sacar)
{

	if  ($valor_A_Sacar > $conta ['saldo']) {
		exibeMensagem(mensagem:"Você não pode sacar");

	}else {
		$conta  ['saldo'] -= $valor_A_Sacar; 
	}

	return $conta;

}

function exibeMensagem (string $mensagem) 
{
	echo  $mensagem . '<br>';
}

function depositar (array $conta, float $valorAdepositar)
{
	if ($valorAdepositar >  0){
		$conta ['saldo'] += $valorAdepositar;
	}else{
		exibeMensagem (mensagem:"valor negativo");
			}

	return $conta;
		
}

function maiuscula (array &$conta)						
{
	$conta['titular'] = strtoupper($conta['titular']);
}

/*Passagem  por referencia
& referência a variável em que quermos acessar,
na linguagem C seria os ponteiros.
Você pode passar uma variável por referência a uma 
função de forma que a função possa modificar a variável.
*/

function exibeConta (array $conta )
{
	['titualar' => $titular, 'saldo' => $saldo] = $conta;
	echo  "<li>Titular: $titular. Saldo: $saldo' </li>";
}
