<?php
include("conexion.php");  //incluye el código del archivo “conexion.php” que contiene la conexión con la base de datos “bd_alumnos”
/* Variables que recuperan datos por el metodo POST*/
$nombre=$_POST['nombre'];


/* crea una cadena con la sentencia SQL que inserta los valores de las variables en la tabla “alumno” de la base de datos, en las columnas “nombres”, “apellidos”, “cu” e “idcarrera”. */
$sql="INSERT INTO carrera(nombre) values
 ('$nombre') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" /> <!--es una etiqueta HTML que redirige al archivo “read.php” después de 3 segundos.-->
