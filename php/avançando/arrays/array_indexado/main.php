<?php
//Array indexado
//neste caso de array numericos onde não definimos as chaves
//ou indici
//
$cat = ["sami", "linda", "folgada"];
/*php tem algumas formas de declarar array
$cat = array("sami", "linda", "folgada");
é uma delas ou
$num = [1, 2, 3, 4, ..];
se quiser acessar o item na mão ex:

$find = $num[1];//2 crio uma variável $find que recebe a $num e declaro a posiçaõ
quando não sabermos o tamanho do array, a função count().
Ele conta e devolve qtos intens tem no array, ex;
echo count($cat);//3
dentro do for ela irá devolver os itens do array neste caso as strings 
 

$list = [21, 44, 55, 234, 567, 23, 11, -2, 2, 31, 13];

for ($j = 0; $j < 10;  $j++) {

	echo $list[$j] . PHP_EOL;
}
 */

for ($i = 0; $i < count($cat); $i++){

	echo $cat[$i] . PHP_EOL;
}


