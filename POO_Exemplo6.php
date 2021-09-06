<?php

use Documento as GlobalDocumento;

class Documento
{

    private $numero;

    public function getNumero()
    {

        return $this->numero;
    }

    public function setNumero($n)
    {

        $this->numero = $n;
    }
}

class CPF extends Documento
{

    public function validar(): bool
    {

        $numero = $this->getNumero();

        return true;
    }
}


$doc = new CPF();

$doc->setNumero("111222333-44");

echo $doc->validar();

?>