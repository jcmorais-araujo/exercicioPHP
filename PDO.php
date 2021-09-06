<?php 

//Conectar com o banco de dados:

$conn = new PDO("mysql:dbname=db_php7; host=localhost", "root", "");


//Realizar a pesquisa no Banco de dados

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($results);

//Caso eu queira percorrer nesse array (Essa parte é muito legal:)

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ":</strong>" . $value . "<br>";
    }
}

?>