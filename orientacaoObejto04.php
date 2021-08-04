<?php

class Pessoa
{
    public $nome = null;

    function __construct($nome)
    {

        $this->nome = $nome;
    }

    // Irá remover o objeto no final 
    function __destruct()
    {
        echo 'Objeto removido';
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function correr()
    {
        return $this->__get('nome') . ' está correndo';
    }
}

$pessoa = new Pessoa('João');
echo 'Nome: ' . $pessoa->__get('nome');

echo $pessoa->correr();

?>