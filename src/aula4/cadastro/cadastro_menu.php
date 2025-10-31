<?php

    require "../conexao.php";
    $table = "menu";

    $item = $_POST["item"];
    $preco = $_POST["preco"];

    $sql = "insert into $table (item, preco) values ('$item', $preco)";

    if ($conn->query($sql) === TRUE) {
        echo "Item cadastrado com sucesso.<br>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    echo "<a href='cadastro_menu.html'>Voltar</a>";

    $conn->close();

?>