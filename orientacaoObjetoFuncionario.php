<?php

// Modelo
class Funcionario
{

    // atributos
    public $nome = 'José';
    public $telefone = '81 9999-9999';
    public $numFilhos = 2;

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

echo $funcionario->resumirCadFunc();
echo '<br/>';
echo $funcionario->modificarNumFilhos(3);
echo $funcionario->resumirCadFunc();
?>