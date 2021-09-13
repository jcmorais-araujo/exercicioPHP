<?php

try {

    // Coloquei um throw new exception... Como se fosse um erro fatal e coloquei o número do erro
    throw new Exception("Houve um erro.", 400);

    // Criei a variável $e para armazenar o que irei fazer com o erro
} catch (Exception $e) {

    echo json_encode(array(
        "Mensagem:"=>$e->getMessage(),
        "linha do erro:"=>$e->getLine(),
        "Arquivo:"=>$e->getFile(),
        "Código do erro:"=>$e->getCode()
    ));

}

?>