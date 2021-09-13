<?php

function error_handler($codigo, $mensagem, $arquivo, $linha){

    echo json_encode(array(
        "codigo"=>$codigo,
        "mensagem"=>$mensagem,
        "arquivo"=>$arquivo,
        "linha"=>$linha
    ));
}

// No parametro set error handler... Ele espera o nome da função que criei
set_error_handler("error_handler");

// Aqui estou criando um erro.

$total = 100 / 0;

?>