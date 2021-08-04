<?php
class Pai
{

    private $nome = 'João';
    protected $sobrenome = 'Morais';
    public $humor = 'Feliz';


    // Para ter aesso as informações Private e Protected

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    private function executarMania()
    {
        echo 'Assobiar';
    }

    protected function responder()
    {
        echo 'Oi';
    }

    public function executarAcao()
    {
        $this->executarMania();
        echo '<br/>';
        $this->responder();
    }
}

$pai = new Pai();

echo $pai->nome;
echo $pai->executarAcao();

?>