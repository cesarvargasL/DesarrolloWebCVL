<?php
include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];

/* actualiza la base de datos con los campos modificados */
$sql="UPDATE  carrera set nombre='$nombre'
WHERE  id=$id ";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<!--es una etiqueta HTML que redirige al archivo “read.php” después de 3 segundos.-->
<meta http-equiv="refresh" content="3; url=read_carrera.php" />