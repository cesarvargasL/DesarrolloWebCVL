<?php
$conexion = new mysqli("localhost", "root", "", "bd_alumnos");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET["operacion"] == "read") {
        $resultado = mysqli_query($conexion, "SELECT * FROM alumno");
        $alumnos = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $alumnos[] = $fila;
        }
        echo json_encode($alumnos);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["operacion"] == "create") {
        $nombre = $_POST["nombres"];
        $apellido = $_POST["apellido"];
        $cu = $_POST["cu"];
        mysqli_query($conexion, "INSERT INTO alumno (nombres, apellido, cu) VALUES ('$nombre', '$apellido', $cu)");
    }
}

mysqli_close($conexion);
?>