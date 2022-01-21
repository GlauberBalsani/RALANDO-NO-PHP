<?php

require_once 'Conta.php';

$primeiraConta = new Conta(cpfTitular: '123.456.789-10', nomeTitular: 'Glauber Balsani');
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);

$segundaConta = new Conta(cpfTitular:'222.222.222-22', nomeTitular:'Samiraa');
$segundaConta -> depositar(5000);

$terceiraConta = new Conta(cpfTitular:'111.111.111-11', nomeTitular: 'Matilda');
$terceiraConta -> depositar(233);









