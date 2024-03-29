<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Alumno</title>
</head>

<body class="body">
    <?php include('conexion.php');


$sql = "SELECT a.id,nombres,apellidos,CU,c.nombre as carrera FROM alumno a
LEFT JOIN carrera c on a.idcarrera=c.id ";


$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div class="contenedor-tabla">
    <table class="tabla-alumnos">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Carrera</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['CU']; ?></td>
                <td><?php echo $row['carrera']; ?></td>
                <td><button class="btn-editar"><a href="form_update_alumno.php?id=<?php echo $row['id'];?>">Editar</a></button>
                    <button class="btn-eliminar"><a href="delete_alumno.php?id=<?php echo $row['id'];?>">Eliminar</a></button>
            </td>

            </tr>

        <?php } ?>
    </table>
    <button class="btn-crear-alumno"><a href="form_create_alumno.php">Crear Alumno</a></button>
    
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

