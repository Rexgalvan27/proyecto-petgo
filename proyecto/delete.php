<?php

include("conexion.php");
$con=conectar();

$cod_mascota=$_GET['id'];

$sql="DELETE FROM mascotas  WHERE cod_mascota='$cod_mascota'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>
