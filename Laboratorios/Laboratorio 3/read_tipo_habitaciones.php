<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Tipo de habitaciones</title>
</head>

<body class="body">
    <nav class="nav-alumnos">
      <div class="inicio">         
        <a  href="">Inicio</a>
      </div>
      <div>
        <h1>Hotel Sucre</h1>
    </div>
    </nav>
    <div>
    <?php include('conexion.php');

/* selecciona los datos de la tabla “alumno” y los une con la tabla “carrera” usando un LEFT JOIN */
$sql = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";

//echo $sql;
/* Se ejecuta la sentencia SQL usando el método query() del objeto $con y se guarda el resultado en la variable $resultado.*/
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div class="contenedor-tabla">
    <table class="tabla-alumnos">
        <tr>
            <th>descripcion</th>
            <th>Numero de camas</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['numero_camas']; ?></td>
                <td><button class="btn-editar"><a href="form_update_tipo_habitacion.php?id=<?php echo $row['id'];?>">Editar</a></button>
                    <button class="btn-eliminar"><a href="delete_tipo_habitaciones.php?id=<?php echo $row['id'];?>">Eliminar</a></button>
            </td>

            </tr>

        <?php } ?>
    </table>
    <button class="btn-crear-alumno"><a href="form_create_tipo_habitaciones.php">Crear tipo de habitacion</a></button>
    
    </div>
    <?php
    } else {
    ?> 
        <div>No existen registros que mostrar</div>
    <?php }
    ?>
    </div>
</body>
</html>