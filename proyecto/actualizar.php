<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM mascotas WHERE cod_mascota='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        
<!-- ##############################  ENCABEZADO  ###################################################### -->
    <center><header>    
        <h1><a class="navbar-brand" href="index.html" ><IMG SRC="img/logo.png" height="60" width="60" >PET-GO</a></h1>
    </header></center>
<!-- ################################ CATALOGOS SPUPERIOR  #################################################### -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
        <h2><a class="navbar-brand" href="index.html">INICIO</a></h2>
        <h2><a class="navbar-brand" href="noticias.html">NOTICIAS</a></h2>
        <h2><a class="navbar-brand" href="catalogo.html">CATALOGO</a></h2>
        <h2><a class="navbar-brand" href="crud.php">GESTION</a></h2>
      </nav>
<!-- #######################################  BODY DE PAGINA CENTRAL  ############################################## -->

<CENTER><h3>ACTUALIZACION DE MASCOTA</h3></CENTER>
                <div class="container mt-5">
                    
                    <form action="update.php" method="POST">
                        
                                
                                <input type="hidden" name="cod_mascota" value="<?php echo $row['cod_mascota']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="raza" placeholder="Raza" value="<?php echo $row['raza']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>">
                                <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo" value="<?php echo $row['sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="tamaño" placeholder="Tamaño" value="<?php echo $row['tamaño']  ?>">
                                <input type="text" class="form-control mb-3" name="comentario" placeholder="Comentario" value="<?php echo $row['comentario']  ?>">                          
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
                <br>
<!-- ###########################################  BODY DE PAGINA INFERIOR  ############################################# -->
<nav class="navbar navbar-light bg-light"><p></p></nav>
<center><header>    
  <h1><a class="navbar-brand" href="index.html" ><IMG SRC="img/logo.png"height="60" width="60">PET-GO</a></h1>
</header></center>
<!-- ######################################################################################## -->
    </body>
</html>