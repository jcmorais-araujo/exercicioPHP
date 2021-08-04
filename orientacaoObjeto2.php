<?php

// Modelo
class Funcionario
{

    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    // getters and setters
    // Set
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos)
    {
        $this->numfilhos = $numFilhos;
    }

    // Get
    function getNome()
    {
        return $this->nome;
    }

    function getNumFilhos()
    {
        return $this->numFilhos;
    }

    // métodos
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos)
    {
        // afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }
}

$funcionario = new Funcionario();
$funcionario->setNome('João');
$funcionario->setNumFilhos(2);

// echo $funcionario->resumirCadFunc();
// echo $funcionario->getNome() . ' possui ' . $funcionario->getNumFilhos() . ' filho(s)';


$funcionario2 = new Funcionario();
$funcionario2->setNome('Maria');
$funcionario2->setNumFilhos(3);

echo $funcionario2->getNome(). ' possui ' .$funcionario2->getNumFilhos(). ' filho(s).'

?>