<?php

$file = fopen("arquivo.txt", "w+");

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);

echo "Arquivo criado";
