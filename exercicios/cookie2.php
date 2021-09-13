<?php

if(isset($_COOKIE["idCookie"])){

    $obj = json_decode($_COOKIE["idCookie"], true);

    echo $obj["empresa"];
}

?>