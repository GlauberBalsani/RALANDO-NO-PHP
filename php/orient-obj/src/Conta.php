<?php

class Conta 
{

    //atributos da classe|Conta
    //definir os tipos garante 
    //integridade 
    //-> para acessar um atributo 
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    public static $numeroDeContas = 0;

    //funções dentro de classe são denominadas métodos.
    //a variável $this aponta pra qual objeto(conta) será o saque.


    //método construtor inicializa uma instância pré definida
    public function __construct(string $nomeTitular, string $cpfTitular)
    

    {
        $this -> cpfTitular = $cpfTitular;
        $this -> validaNomeTitular($nomeTitular);
        $this -> nomeTitular = $nomeTitular;
        $this -> saldo = 0;

        Conta:: $numeroDeContas++;
    }

    public function __destruct()
    {
        if ($numeroDeContas > 2){
            echo "Há mais de uma conta" . PHP_EOL;
        }
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this -> saldo) {//evitar de usar o else.
            echo "Saldo indisponível" . PHP_EOL;
            return;
        } 

        $this -> saldo -= $valorASacar;
    
    }

    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar < 0){
            echo "Transação não permitida" . PHP_EOL;
            return;
        }

        $this -> saldo += $valorADepositar;
    }

    public function transferencia(float $valorATransferir, Conta $contaDestino ):void
    {
        if ($valorATransferir > $this -> saldo){
            echo "Transação não permitida" . PHP_EOL;
            return;
        }

        $this -> sacar($valorATransferir);
        $contaDestino -> depositar($valorATransferir);

    }

    public function defineCpfTitular(string $cpf):void //métodos setter define um valor
    {
         $this -> cpfTitular = $cpf;
    }

    public function recuperaSaldo():float// metodo getter, devolve o valor de uma atributi privado
    {
        return $this -> saldo;
    }

    public function recuperaCpfTitular():string
    {
        return $this -> cpfTitular;
    }

    public function recupeanomeTitular():string
    {
        return $this -> nomeTitular;
    }
    
    private function validaNomeTitular(string $nomeTitular)
    {

        //método de validação do nome
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa de pelo menos 5 caracteres";
            exit();
        }
    }
}


/*

Interactive shell

php > require 'Conta.php'; => requisitando o método.
php > $samiConta = new Conta(); => criando objeto $samiConta
php > $samiConta->saldo = 500; => atribuindo um valor ao atributo saldo
php > $samiConta->depositar (2000);
php > var_dump($samiConta);
object(Conta)#1 (1) {
  ["cpfTitular"]=>
  uninitialized(string)
  ["nomeTitular"]=>
  uninitialized(string)
  ["saldo"]=>
  float(2500)
}
php > 




*/
 