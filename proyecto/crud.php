<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM mascotas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PET-GO HOME</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/644/PNG/512/red_pets_icon-icons.com_59525.png">
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



<CENTER><h3>GESTION DE MASCOTAS</h3></CENTER>
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar una mascota</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="file" class="form-control mb-3" name="foto" placeholder="">
                                    <input type="text" class="form-control mb-3" name="cod_mascota" placeholder="Codigo de mascota">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="raza" placeholder="Raza">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="tamaño" placeholder="Tamaño">
                                    <input type="text" class="form-control mb-3" name="comentario" placeholder="Comentarios">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>cod_mascota</th>
                                        <th>nombre</th>
                                        <th>raza</th>
                                        <th>color</th>
                                        <th>sexo</th>
                                        <th>edad</th>
                                        <th>tamaño</th>
                                        <th>comentario</th>
                                        <th>foto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['cod_mascota']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['raza']?></th>
                                                <th><?php  echo $row['color']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['tamaño']?></th>
                                                <th><?php  echo $row['comentario']?></th>
                                                <th><?php  echo $row['foto']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_mascota'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_mascota'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
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
