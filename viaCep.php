<?php

$cep = "54759600";
$str = file_get_contents("https://viacep.com.br/ws/" . $cep . "/json");

// print_r($str);

// Converter json para Array

$arrayCep = json_decode($str);

// print_r($arrayCep);

// echo $str;

// Visualizar dados

echo "<p><strong>Cep: </strong>" . $arrayCep->cep . "</p>";
echo "<p><strong>Rua: </strong>" . $arrayCep->logradouro . "</p>";
echo "<p><strong>Bairro: </strong>" . $arrayCep->bairro . "</p>";
echo "<p><strong>Cidade: </strong>" . $arrayCep->localidade . "</p>";
echo "<p><strong>DDD: </strong>" . $arrayCep->ddd . "</p>";
echo "<p><strong>Estado: </strong>" . $arrayCep->uf . "</p>";

?>