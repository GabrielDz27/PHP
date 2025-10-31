<?php

    require "../conexao.php";

    $table = "menu";

    $item = $_POST["item"];


    $sql = "select * from $table where item = '$item'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Item: " . $row["item"]. " - Preço: " . $row["preco"] . "<br>";
        }
    } else {
        echo "0 resultados";
    }

    echo "<a href='buscar_item.html'>Voltar</a>";

    $conn->close();

?>