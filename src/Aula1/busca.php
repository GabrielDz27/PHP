<?php

    $nome = $_POST["nome"];

    include "conecta.php";

    // create and execute a query to obtain all regcords 
    // with a specific value for some column (or everything
    // if the query is an '*')
    if ($nome == "*")
        $sql = "SELECT * FROM alunos";    
    else
        $sql = "SELECT * FROM alunos WHERE nome='$nome'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Mat.: " . $row["matricula"]. " - Nome: " . $row["nome"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    
?>
