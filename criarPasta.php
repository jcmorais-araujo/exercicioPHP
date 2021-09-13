<?php

$name = "imagens";

// Verificar se esxite o diretório. Usar o "IS_DIR".

if (!is_dir($name)) {

    mkdir($name);

    echo "Diretório " . $name . " criado com sucesso.";
} else {

    echo "O diretório " . $name . " já existe.";
}

?>
