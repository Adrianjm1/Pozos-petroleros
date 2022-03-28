<?php
include_once('db/conn.php');
$id = $_GET['id'];


$QUERY = "Select * from valores where idPozo = $id ORDER BY fecha";
$rsQUERY = mysqli_query($conn, $QUERY) or die('Error: ' . mysqli_error($con));
$countQUERY = mysqli_num_rows($rsQUERY);

$QUERYNAME = "SELECT * FROM `pozo` WHERE id = $id";
$rsQUERYNAME = mysqli_query($conn, $QUERYNAME) or die('Error: ' . mysqli_error($con));

$nombre = '';
foreach ($rsQUERYNAME as $value) {
    $nombre = $value['nombre'];
}


?>




<!DOCTYPE html>
<html lang="en">
<link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<title>Hisotrico</title>
<style>
    .container {
        width: 70%;
        margin: 15px auto;
    }

    body {
        text-align: center;
        color: green;
    }

    h2 {
        text-align: center;
        font-family: "Verdana", sans-serif;
        font-size: 30px;
    }
    h3 {
        text-align: center;
        font-family: "Verdana", sans-serif;
        font-size: 20px;
    }
</style>

<body>
    <div class="container">
        <h3>Historico de   <?php echo $nombre?>  </h3>
        <h3>Se encontraron  <?php echo $countQUERY?> registros </h3>
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <a class="text-decoration-none text-white" href="dashboard.php">
        <button class="mx-auto d-block btn-primary"> Volver al menu </button>
    </a>
</body>

<script>
    let valores = [];
    let fechas = [];

    <?php

    foreach ($rsQUERY as $value) {



    ?>

        valores.push('<?php echo $value['valor'] ?>')
        fechas.push('<?php echo $value['fecha'] ?>')


    <?php


    }


    ?>

    console.log(fechas);


    let ctx = document.getElementById("myChart").getContext("2d");
    let myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: fechas,
            datasets: [{
                    label: "Medida (m)",
                    data: valores,
                    backgroundColor: "rgba(153,205,1,0.6)",
                },

            ],
        },
    });
</script>

</html>