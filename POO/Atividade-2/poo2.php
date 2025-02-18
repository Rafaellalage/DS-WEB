<?php


    //Questão 1
class pessoa{

    //Atributos protegidos
    public $nome;
    protected $idade;

    public function setnome(){
        return $this ->nome;
    }
    public function setidade(){
        return $this ->idade;
    }
    public function getnome(){
        return $this ->nome;
    }
    public function getidade(){
        return $this ->idade;
    }

    
    //classe funcionario que herda pessoa
    class funcionario extends pessoa{
        protected $salario;

        public function getsalario($salario){
            return $this ->salario;
        }
        public function setsalario($n){
            $this -> salario = $n;
        }
        public function calcularbonus(){
            return 0;
        }
        
        //classe gerente que herda pessoa
    class gerente extends funcionario {
        protected $salario;

        public function getsalario(){
            return $this ->salario
        }
        public function calcularbonus(){
            return $this-> salario*0.20;
        }
    }
    class desenvolvedor extends funcionario{
        protected $salario;
    }
    public function calcularbonus(){
        return $this-> salario*0.10;
    }
    
    }
    
$gerente = new gerente();
$gerente->setNome("Ana Laura");
$gerente->setIdade(20);
$gerente->setSalario(15.000);
}


    //Questão 2
abstract class Animal{
    public function fazerSom(){}
}

class Cachorro extends Animal{
    public function fazerSom()
    echo "Au Au";{}
}
class Gato extends Cachorro{
    public function fazerSom()
    echo "Miau Miau";{}
}
class Passaro extends Cachorro{
    public function fazerSom()
    public function mover() 
    echo "Voa e anda";{}
}