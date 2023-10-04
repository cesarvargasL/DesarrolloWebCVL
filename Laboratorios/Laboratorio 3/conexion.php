<?php
$con = new mysqli("localhost", "root", "", "bd_hotel"); //crea un nuevo objeto mysqli llamado $con que representa la conexión con el servidor MySQL que está en “localhost”
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error); // por si hay error al conectar la base de datos
}

?>