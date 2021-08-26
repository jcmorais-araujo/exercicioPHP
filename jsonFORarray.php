<?php

$jsonStr = '{"titulo":"Titanic","sinopse":"Um navio colide contra um Iceberg e afunda","ano":2017,"horarios":["16:00","19:00","20:00"]}';

// Converter um json para Array

$arrayFilme = json_decode($jsonStr);
// print_r($arrayFilme);

// Acessar os valores do array convertido

echo "<p><strong>Título: </strong>". $arrayFilme->titulo ."</p>";
echo "<p><strong>Sinopse: </strong>". $arrayFilme->sinopse ."</p>";
echo "<p><strong>Ano: </strong>". $arrayFilme->ano. "</p>";
echo "<p><strong>Horários: </strong></p>";

// Como a "vairável" horarios é um outro array... Podemos fazer o seguinte:

for($i=0; $i <count($arrayFilme->horarios); $i++){
    echo "<p>".$arrayFilme->horarios[$i]."</p>";
}
?>