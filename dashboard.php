<?php

include_once('db/conn.php');



$QUERY = "Select * from pozo";
$rsQUERY = mysqli_query($conn, $QUERY) or die('Error: ' . mysqli_error($con));
$countQUERY = mysqli_num_rows($rsQUERY);



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>dashboard</title>
</head>

<body>

</body>

</html>

<table  class="mx-auto table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Licalizacion</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($rsQUERY as $value) {
        ?>
            <tr>

                <td> <?php echo $value['id']; ?> </td>
                <td> <?php echo $value['nombre']; ?> </td>
                <td> <?php echo $value['localizacion']; ?> </td>
                <th><a href="historico.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Ver historico</a>
                    <a href="addValor.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Agregar medida</a>
                    <a href="deletePozo.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Eliminar</a>
                </th>



            </tr>

        <?php
        }

        ?>


    </tbody>
</table>

<a class="text-decoration-none text-white" href="addPozo.php"> 
    
    <button class="mx-auto d-block btn-primary"> Agregar Pozo </button>

</a>    

<!-- <th><a href="update.php?id=<?php echo $value['id'] ?>       " class="btn btn-info">  Editar  </a></th>
                    <th><a href="deleteProduct.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Eliminar</a></th>                         
   -->