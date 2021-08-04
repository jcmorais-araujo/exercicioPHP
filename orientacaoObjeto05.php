<?php

// O termo extends é aplicado para relacionar a herança com as classes que possuem características semelhantes
class Carro extends Veiculo
{
    public $tetoSolar = true;

    function __constructor($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar()
    {
        echo 'Abri teto solar';
    }

    function alterarPosicaoVolante()
    {
        echo 'Alterar posição volante';
    }
}

class Moto extends Veiculo
{
    public $contraPesoGuidao = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar()
    {
        echo 'Empinar';
    }
}


class Veiculo
{
    public $placa = null;
    public $cor = null;

    function acelerar()
    {
        echo 'Acelerar';
    }
}


$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('DEF1122', 'preto');


print_r($carro);

print_r($moto);


// Verificar as ffunções de cada classe

$carro->abrirTetoSolar();
$carro->acelerar();

$moto->empinar();
$moto->acelerar();

?>
