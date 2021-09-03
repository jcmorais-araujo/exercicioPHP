<?php

function soma(int ...$valores):string{ //Estou forçando a variável retornar como string

    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25, 33);

?>