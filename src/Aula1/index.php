<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro_menu.php" method="$_GET">
    <p>Busca</p>
    <form action="busca.php" method="post">
        <input type="text" name="nome">
        <input type="submit" value="OK">
        <input type="reset">
    </form>

    <p>Inserção</p>
    <form action="insere.php" method="post">
        <input type="text" name="mat">
        <input type="text" name="nome">
        <input type="submit" value="OK">
        <input type="reset">
    </form>


</body>
</html>