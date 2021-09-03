
<form method="post">
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <button type="submit">Cadastrar</button>
</form>

<?php

if(isset($_POST)){
    foreach ($_POST as $key => $value) {
        echo "Nome do campo:" . $key . "<br>";

        echo "Valor do campo:" . $value . "<br>";

        echo "<hr>";
    }
}

?>