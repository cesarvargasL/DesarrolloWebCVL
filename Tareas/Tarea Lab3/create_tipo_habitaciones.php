<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="estilos_bd.css">
    <title>Crear tipo de habitacion</title>
</head>
<body >
<div class="body">
    <?php
    include("conexion.php");  //incluye el código del archivo “conexion.php” que contiene la conexión con la base de datos “bd_alumnos”
    /* Variables que recuperan datos por el metodo POST*/
    $descripcion=$_POST['descripcion'];
    $numero_camas=$_POST['numero_camas'];

    /* crea una cadena con la sentencia SQL que inserta los valores de las variables en la tabla “alumno” de la base de datos, en las columnas “nombres”, “apellidos”, “cu” e “idcarrera”. */
    $sql="INSERT INTO tipo_habitacion(descripcion,numero_camas) values
    ('$descripcion', '$numero_camas') ";

    //echo $sql;
    if ($con->query($sql) === TRUE) {
        echo "Se creo el registro correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close()
    ?>
</div>
    
</body>
</html>

<meta http-equiv="refresh" content="3; url=read_tipo_habitaciones.php" /> <!--es una etiqueta HTML que redirige al archivo “read.php” después de 3 segundos.-->