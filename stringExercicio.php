<?php

$nome = "joão Carlos Morais";

echo $nome;

// Deixar letras maiúsculas:
echo "<br>";
echo strtoupper($nome);

echo "<br>";

// Letras maiúsculas
$nome = strtoupper($nome);

echo "<br>";
// Letras minúsculas
echo strtolower($nome);

// Letras Primeiras letras maiúsculas
echo "<br>";

echo ucwords($nome);

// Substituir

echo str_replace("ã", "a", $nome);

// VErificar posição

VAR_DUMP(strpos($nome, "CARLOS")) ;
?>