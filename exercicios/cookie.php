<?php

$data = array(
    "empresa" => "Udemy"
);


setcookie("idCookie", json_encode($data), time() + 3600);

echo "Cookie criado com sucesso.";

?>