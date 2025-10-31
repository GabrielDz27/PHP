<?php

    require "../conexao.php";
    $table = "menu";

    $item = $_POST["item"];
    $preco = $_POST["preco"];

    $sql = "update $table set item = '$item', preco = '$preco' where item = '$item'";

    if ($conn->query($sql) === TRUE) {
        echo "Item editado com sucesso.<br>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    echo "<a href='editar.html'>Voltar</a>";

    $conn->close();

?>