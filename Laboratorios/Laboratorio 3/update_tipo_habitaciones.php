<?php
include("conexion.php");
$descripcion=$_POST['descripcion'];
$numero_camas=$_POST['numero_camas'];
$id=$_POST['id'];

/* actualiza la base de datos con los campos modificados */
$sql="UPDATE  tipo_habitacion set descripcion='$descripcion',numero_camas='$numero_camas'
WHERE  id=$id";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<!--es una etiqueta HTML que redirige al archivo “read.php” después de 3 segundos.-->
<meta http-equiv="refresh" content="3; url=read_tipo_habitaciones.php" />