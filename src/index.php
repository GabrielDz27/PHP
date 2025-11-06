<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP</title>
</head>

<body>
    <?php 
        include('navbar.php')
    ?>
    <div class="container mt-4">
        <div>
            escolhe aqui as aulas pra testar
        </div>
        <div class='card-header'>
            <a href="Aula1/index.php" class="btn btn-primary float-first">Aula 1</a>
            <a href="Aula4/index.php" class="btn btn-primary float-second">Aula 4</a>
            <a href="crud/index.php" class="btn btn-primary float-third">crud</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>