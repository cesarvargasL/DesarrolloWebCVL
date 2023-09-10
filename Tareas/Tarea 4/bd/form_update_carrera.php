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
<nav class="nav-carreras">
      <div>
      </div>
      <div><h1>Universidad de Sucre</h1></div>
    </nav>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT id,nombre from carrera where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <div class="contenedor-principal">
    <form class="form-alumno" action="update_carrera.php" method="post">
        <div>
            <h2>Editar carrera:</h2>
        </div>
        <div>
            <label for="nombre">Nombre de la carerra:</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input class="btn-crear-alumno btn-submit" type="submit" value="Editar">
    </form>
    </div>
</body>

</html>