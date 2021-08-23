<?php

define("min", 17);
define("max", 45);

$idade = 25;

if(idade >= min && idade <= max){
echo "Acesso liberado";
}else{
echo "Acesso Bloqueado";
}
?>