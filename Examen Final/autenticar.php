<?php
session_start();
include('conexion.php');

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);

$sql = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION['id_usuario'] = $row['id'];
    }
    header('Location: index.php');
} else {
    echo 'Datos incorrectos';
    echo "<meta http-equiv='refresh' content='2; url=login.html' />";
}
$con->close();
?>