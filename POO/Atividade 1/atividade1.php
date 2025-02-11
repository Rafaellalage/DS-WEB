<?php


Class ContaBancária{

//Atributos
public $NúmerodaConta;
public $NomedoTitular;
public $Saldo;

//Métodos
public function ExibirSaldo(){
    return "O saldo é: R$". $this ->Saldo. ",00";
}
public function Depositar(){
    
}
public function Sacar(){

}
}

//Objeto1
$ContaBarbara = new ContaBancária();
$ContaBarbara -> NúmerodaConta = "456.777.897-87";
$ContaBarbara -> NomedoTitular = "Bárbara Sughinoshita Alvim";
$ContaBarbara -> Saldo = "R$500,00";
$ContaBarbara -> Depositar = "R$100,00";
$ContaBarbara -> Sacar = "R$150,00";

echo $ContaBarbara -> ExibirSaldo();

//Objeto 2
$ContaPedro = new ContaBancária();
$ContaPedro -> NúmerodaConta = "432.564.789-65";
$ContaPedro -> NomedoTitular = "Pedro Cardoso De Souza";
$ContaPedro -> Saldo = "R$70,00";
$ContaPedro -> Depositar = "R$600,00";
$ContaPedro -> Sacar = "R$100,00";

//Objeto 3
$ContaAdriana = new ContaBancária ();
$ContaAdriana -> NúmerodaConta = "166.797.048-80";
$ContaAdriana -> NomedoTitular = "Adriana Valerio Manhezi Lage";
$ContaAdriana -> Saldo = "9000,00";
$ContaAdriana -> Depositar = "R$750,00";
$ContaAdriana -> Sacar = "R$50,00";

?>