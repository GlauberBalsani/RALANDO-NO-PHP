<?php

$idade = 16;
$acompanhantes = 0;

echo "Só entra quem for de maior, ou quem tiver acompanhado" . PHP_EOL;

if($idade >= 18 ){
	echo "Você tem $idaed passa o RODO geral!!!" .PHP_EOL;
}else if ($idade >=16 && $acompanhantes > 1){
	echo "Você tem $idade anos mas tem $acompanhantes acompanhantes pode entrar!!!!" .PHP_EOL ;
}else {
	echo "Você tem $idade e está com $acompanhantes acompanhantes.. Vaza!!" . PHP_EOL;
}

/* sinais lógicos php
&&: e 
||: ou
and: e 
or: ou
php permite "escrever os sinais"
 */
