<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
</head>

<body>
    <div>
        <form action="read_habitaciones.php" method="GET">
        <div>
            <label for="buscar">buscar</label>
            <input type="text" name="buscar" >
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <?php include('conexion.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';
    
    $sql = "SELECT a.id,nro,bano_privado,espacio,precio,descripcion FROM habitacion a
    LEFT JOIN tipo_habitacion t on a.id_tipo_habitacion=t.id";
    
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql = "SELECT a.id,nro,bano_privado,espacio,precio,descripcion FROM habitacion a
        LEFT JOIN tipo_habitacion t on a.id_tipo_habitacion=t.id
        WHERE nro like '%$buscar%' or descripcion like '%$buscar%' or bano_privado like '%$buscar%' or espacio like '%$buscar%' or precio like '%$buscar%' ";
    }

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Fotografia</th>
                <th><a href="read_habitaciones.php?orden=nro">Numero</a></th>
                <th><a href="read_habitaciones.php?orden=descripcion">Tipo de habitacion</a></th>
                <th><a href="read_habitaciones.php?orden=bano_privado">Baño privado</a> </th>
                <th><a href="read_habitaciones.php?orden=espacio">espacio</a></th>
                <th><a href="read_habitaciones.php?orden=precio">precio</a></th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><img src="images/<?php echo $row['fotografia'];  ?>" width="100px" ></td>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><button class="btn-editar"><a href="form_update_habitaciones.php?id=<?php echo $row['id'];?>">Editar</a></button>
                    <button class="btn-eliminar"><a href="delete_habitaciones.php?id=<?php echo $row['id'];?>">Eliminar</a></button>
                </tr>
            <?php } ?>
        </table>
        <button class="btn-crear-alumno"><a href="form_create_habitaciones.php">Crear Habitacion</a></button>
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