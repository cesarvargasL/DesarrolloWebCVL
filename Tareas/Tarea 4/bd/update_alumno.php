<?php
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$CU=$_POST['CU'];
$idcarrera=$_POST["idcarrera"];
$id=$_POST['id'];

/* actualiza la base de datos con los campos modificados */
$sql="UPDATE  alumno set nombres='$nombres',apellidos='$apellidos',CU='$CU', idcarrera = $idcarrera
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
<meta http-equiv="refresh" content="3; url=read_alumno.php" />