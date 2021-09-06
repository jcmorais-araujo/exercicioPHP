<?php

$conn = new mysqli("localhost", "root", "", "db_php7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;

    exit;
}


//Parte reservada para adicionar valores no banco de dados;

// $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

// $stmt->bind_param("ss", $login, $pass);

// $login = "user";
// $pass = "12345";

// $stmt->execute();


//Parte reservada para pesquisar no banco de dados.

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// Para colocar a pesquisa em um array

$data = array();

/////


while ($row = $result->fetch_array()) {

    array_push($data, $row);
}

echo json_encode($data);

?>
