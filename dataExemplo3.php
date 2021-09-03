<?php

$dt = new DateTime();
echo $dt->format("d/m/Y H:i:s");

// Adicionar 15 dias (P15D) sobre a data atual
$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");


?>