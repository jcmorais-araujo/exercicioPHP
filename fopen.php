<?php

function gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, $texto);
    fclose($fp);
}

gravar("Olá, Mundo!", "file.txt");

// Função para leitura

function leitura(string $arquivo){
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

echo leitura("file.txt");
?>