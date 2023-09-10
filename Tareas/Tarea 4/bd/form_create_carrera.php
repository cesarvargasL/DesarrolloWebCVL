<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Document</title>
</head>

<body class="body">
    <nav class="nav-carreras">
      <div>
      </div>
      <div><h1>Universidad de Sucre</h1></div>
    </nav>

    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>

    <div class="contenedor-principal">
    <form class="form-alumno" action="create_carrera.php" method="post">
        <div>
            <h2>Crear nueva carrera: </h2>
        </div>
        <div>
            <label for="nombre">Nombre de la carrera</label>
            <input type="text" name="nombre">
        </div>
        <input class="btn-crear-alumno btn-submit" type="submit" value="Crear">
    </form>
    </div>
</body>

</html>