<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Creas tipo de habitacion</title>
</head>

<body class="body">
    <nav class="nav-alumnos">
      <div class="inicio">         
        <a href="">Inicio</a>
      </div>
      <div><h1>Hotel Sucre</h1></div>
    </nav>
    <?php include('conexion.php');
    $sql = "SELECT id,descripcion,numero_camas from  tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <div class="contenedor-principal">
    <form class ="form-alumno" action="create_tipo_habitaciones.php" method="post">
        <div>
            <h2>Crear nuevos tipos de habitaciones:</h2>
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="numero_camas">Numero de camas</label>
            <input type="number" name="numero_camas">
        </div>
 <input class="btn-crear-alumno btn-submit" type="submit" value="Crear">
    </form>
    </div>
</body>

</html>