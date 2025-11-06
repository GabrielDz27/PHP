<?php 
    $server = "db:3306";
    $user = "user";
    $pass = "senha";
    $db = "estudo";

    $conexao = new mysqli($server,$user,$pass,$db);

    if ($conexao->connect_error) {
        die("Conexao falhou" . $conn->connect_error);
    }
?>