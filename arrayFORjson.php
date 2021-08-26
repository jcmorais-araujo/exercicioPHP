<?php

$arrayFilme = array(
    "tiutlo" => "titanic",
    "sinopse" => "Um navio colide contra um Iceberg e afunda",
    "ano" => 2017,
    "horarios" => array(
        "16:00",
        "19:00",
        "20:00"
    )
);

// print_r($arrayFilme);

// Converter um array para json

$jsonStr = json_encode($arrayFilme);

echo $jsonStr;
?>
