<?php
include("conexion.php");
$numero=$_POST['nro'];
$id_tipo_habitacion=$_POST['id_tipo_habitacion'];
$bano_privado=$_POST['bano_privado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];

$archivo_original=$_FILES['fotografia']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);


$sql="INSERT INTO habitacion(fotografia,nro,id_tipo_habitacion,bano_privado,espacio,precio) values
 ('$fotografia','$numero', '$id_tipo_habitacion','$bano_privado','$espacio', '$precio') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_habitaciones.php" />