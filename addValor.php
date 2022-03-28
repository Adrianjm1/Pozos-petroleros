<?php
include_once('db/conn.php');
$id = $_GET['id'];

$QUERYNAME = "SELECT * FROM `pozo` WHERE id = $id";
$rsQUERYNAME = mysqli_query($conn, $QUERYNAME) or die('Error: ' . mysqli_error($conn));

$nombre = '';
foreach ($rsQUERYNAME as $value) {
    $nombre = $value['nombre'];
}



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
    <h1>Agregando medida a <?php echo $nombre ?> </h1>
    <div class="container mt-5">
        <form class="w-50" action="insertValor.php" method="post">
            <label for="price"> Fecha</label>
            <input hidden type="text" id="id" class="form-control mb-3" name="id" placeholder="id" value=<?php echo $id ?>>
            <input type="datetime-local" id="fecha" class="form-control mb-3" name="fecha" placeholder="fecha"> <label for="price"> Medida (m)</label>
            <input type="number" id="medida" class="form-control mb-3" name="medida" placeholder="medida">
            <input type="submit" class="btn btn-primary btn-block" value="Agregar">
        </form>

    </div>

    <a class="text-decoration-none text-white" href="dashboard.php">
        <button class="mx-auto d-block btn-primary"> Volver al menu </button>
    </a>

    
</body>

</html>