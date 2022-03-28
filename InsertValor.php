<?php
include_once('db/conn.php');
// Header("Location: dashboard.php");



    if (!isset($_POST['medida']) || !isset($_POST['fecha'])){


        echo "NOOOOOOOOOO";
    }
    else{
        echo "si rey";
        echo $id=$_POST['id'];
        echo  $medida=$_POST['medida'];
        echo  $fecha=$_POST['fecha'];
         
        $sql="INSERT INTO valores (fecha, valor, idPozo) 
        VALUES('$fecha', '$medida', '$id')";
        $query= mysqli_query($conn,$sql);


    if($query){
        Header("Location: dashboard.php");
        
    }else {
        // Header("Location: dashboard.php");
    }

    }
