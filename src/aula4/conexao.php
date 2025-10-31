<?php

    // definiçaõ dos dados de conexão
    $server = "localhost:3306";
    $user = "root";
    $pass = "admin";
    $db = "restaurante";

    // instanciação da conexão
    $conn = new mysqli($server, $user, $pass, $db);

    // Checagem
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    echo "Conexão bem sucedida!<br>";

?>