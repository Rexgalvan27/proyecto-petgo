<?php

include("conexion.php");
$con=conectar();


$cod_mascota=$_POST['cod_mascota'];
$nombre=$_POST['nombre'];
$raza=$_POST['raza'];
$color=$_POST['color'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$tamaño=$_POST['tamaño'];
$comentario=$_POST['comentario'];

$sql="UPDATE mascotas SET  nombre='$nombre',raza='$raza',color='$color',sexo='$sexo',edad='$edad',tamaño='$tamaño',comentario='$comentario' WHERE cod_mascota='$cod_mascota'";$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>