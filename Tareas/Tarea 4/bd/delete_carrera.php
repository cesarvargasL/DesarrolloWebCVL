<?php
include("conexion.php");
$id=$_GET['id'];

$sql="DELETE FROM carrera WHERE id=$id";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />