<?php
include("conexion.php");
$con=conectar();


$foto=$_POST['foto'];
$cod_mascota=$_POST['cod_mascota'];
$nombre=$_POST['nombre'];
$raza=$_POST['raza'];
$color=$_POST['color'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$tamaño=$_POST['tamaño'];
$comentario=$_POST['comentario'];


$sql="INSERT INTO mascotas VALUES('$foto','$cod_mascota','$nombre','$raza','$color','$sexo','$edad','$tamaño','$comentario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
?>