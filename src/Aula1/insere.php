<?php
    $mat = $_POST["mat"];
    $nome = $_POST["nome"];
    
    include "conecta.php";

    // create and execute a query to obtain all regcords 
    // with a specific value for some column
    $sql = "INSERT INTO alunos (matricula, nome) VALUES ('$mat', '$nome')";
    if ($result = $conn->query($sql)) 
        echo "Dados inseridos com sucesso";
    else
        echo "Não foi posível inserir os dados"
    
?>