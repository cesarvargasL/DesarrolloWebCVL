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
    <nav class="nav-alumnos">
      <div class="inicio">         
        <a href="http://localhost/DesarrolloWebCVL/Tareas/Tarea%204/tarea4.html">Inicio</a>
      </div>
      <div><h1>Universidad de Sucre</h1></div>
    </nav>
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>

    <div class="contenedor-principal">
    <form class ="form-alumno" action="create_alumno.php" method="post">
        <div>
            <h2>Crear nuevo alumno:</h2>
        </div>
        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres">
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div>
            <label for="CU">CU</label>
            <input type="text" name="CU">
        </div>
        <div>
        <label for="idcarrera">Carrera:</label>
            <select name="idcarrera">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>


                <?php } ?>

            </select>
        </div>
 <input class="btn-crear-alumno btn-submit" type="submit" value="Crear">
    </form>
    </div>
</body>

</html>