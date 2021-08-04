<?php



class Funcionario
{

    // atributos
    public $nome = null;
    // public $telefone = null;
    public $numFilhos = null;
    // public $cargo = null;
    // public $salario = null;


    // getters e setters (overloading)

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }


    // Métodos

    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filhos(s)";
    }

    function modificarNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }
}


$funcionario1 = new Funcionario();

$funcionario1->__set('nome', 'José');
$funcionario1->__set('numFilhos', 3);
$funcionario1->__set('cargo', 'geologo');
echo $funcionario1->__get('nome') . ' possui ' . $funcionario1->__get('numFilhos'). ' filho(s).';

echo '<br/>';

$funcionario2 = new Funcionario();
$funcionario2->__set('nome', 'Maria');
$funcionario2->__set('numFilhos', 2);

echo $funcionario2->__get('nome'). ' possui ' . $funcionario2->__get('numFilhos') . ' filho(s).'

?>