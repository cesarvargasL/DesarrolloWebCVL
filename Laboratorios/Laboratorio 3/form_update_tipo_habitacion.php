<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Editar</title>
</head>

<body class="body">
    <nav class="nav-alumnos">
      <div class="inicio">         
        <a href="">Inicio</a>
      </div>
      <div><h1>Hotel Sucre</h1></div>
    </nav>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT descripcion,numero_camas from tipo_habitacion where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <div class="contenedor-principal">
    <form class="form-alumno" action="update_tipo_habitaciones.php" method="post">

<div>
<div>
    <h2>Editar tipo de habitacion:</h2>
</div>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $row['descripcion']?>">
</div>
<div>
    <label for="numero_camas">Numero de camas</label>
    <input type="number" name="numero_camas">
</div>

<input type="hidden" name="id" value="<?php echo $id?>">
<input class="btn-crear-alumno btn-submit" type="submit" value="Editar">


</form>
    </div>
    

</body>

</html>