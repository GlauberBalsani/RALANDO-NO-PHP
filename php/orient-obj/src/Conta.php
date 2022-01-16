<?php




class Conta 
{

    //atributos da classe|Conta
    //definir os tipos garante 
    //integridade 
    //-> para acessar um atributo 
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    //funções dentro de classe são denominadas métodos.
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this -> saldo) {
            echo "Saldo indisponível";
        } else {
           $this -> saldo -= $valorASacar;
        }
    }
    
}
