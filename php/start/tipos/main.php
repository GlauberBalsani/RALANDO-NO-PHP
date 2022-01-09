<?php
//inteiros
$a = 1234; // número decimal
$a = 0123; // número octal (equivalente a 83 em decimal)
$a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
$a = 0b11111111; // número binário (equivalente ao 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)

/*Números de ponto flutuante (também conhecidos como "floats", "doubles" ou "números reais"), podem ser especificados utilizando qualquer uma das seguintes sintaxes:*/

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // a partir do PHP 7.4.0
?>

Strings ¶

Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte. Isso significa que o PHP possui suporte a um conjunto de apenas 256 caracteres, e, portanto, não possui suporte nativo a Unicode. Veja mais detalhes do tipo string.

Nota: A partir do PHP 7.0.0, não há restrições particulares em relação ao tamanho de uma uma string em compilações de 64 bits. Em compilações de 32 bits e em versões anteriores, uma string pode ter o tamanho de até 2GB (máximo de 2147483647 bytes) 

PARA CONCATENAR UMA STRING COM VARIAVEL NO PHP COLOCA UM PONTO NA FRENTE DA VARIAVEL EX: $cat = i "sami", echo 'O nome da folgad é' . $cat;  

Com aspas duplas o php entende onde está a variável ex: echo "O nome da folgada é $cat;"
