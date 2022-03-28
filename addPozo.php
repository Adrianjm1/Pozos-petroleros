<?php
include_once('db/conn.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <h1>Agregando pozo </h1>
    <div class="container mt-5">
        <form class="w-50" action="insertPozo.php" method="post">
            <label for="price"> Nombre </label>
            <input type="text" id="nombre" class="form-control mb-3" name="nombre" placeholder="nombre">
            <label for="price"> Localizacion </label>
            <input type="text" id="localizacion" class="form-control mb-3" name="localizacion" placeholder="localizacion">
            <input type="submit" class="btn btn-primary btn-block" value="Agregar">
        </form>

    </div>

    <a class="text-decoration-none text-white" href="dashboard.php">
        <button class="mx-auto d-block btn-primary"> Volver al menu </button>
    </a>
</body>

</html>