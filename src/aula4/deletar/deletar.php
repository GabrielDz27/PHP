<?php

    require "../conexao.php";
    $table = "menu";

    $item = $_POST["item"];

    $sql = "delete $table where '$item'";

    if ($conn->query($sql) === TRUE) {
        echo "Item removido com sucesso.<br>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    echo "<a href='remover_item.html'>Voltar</a>";

    $conn->close();

?>