<?php

class Pessoa {

    public $nome; //Atributo

    public function falar(){ //Método

        return "O meu nome é " . $this->nome;
    }
}

$joao = new Pessoa();

$joao->nome = "João Carlos Morais";

echo $joao->falar();

?>