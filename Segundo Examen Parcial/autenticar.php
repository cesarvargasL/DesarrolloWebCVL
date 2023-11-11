<?php
session_start();

if (!isset($_POST['usuario']) || !isset($_POST['contrasena']) || !isset($_POST['captcha'])) {
    echo "Todos los campos son obligatorios.";
    exit;
}

if ($_POST['captcha'] != $_SESSION['captcha']) {
    echo "El captcha es incorrecto.";
    echo "<meta http-equiv='refresh' content='2; url=examen2Parcial-1.html' />";
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nivel FROM usuarios WHERE usuario = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['usuario'], $_POST['contrasena']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['nivel'] = $row['nivel'];
    echo "Usuario autenticado con nivel {$row['nivel']}.";
} else {
    echo "Usuario o contraseña incorrectos.";
    echo "<meta http-equiv='refresh' content='2; url=examen2Parcial-1.html' />";
}

$conn->close();
?>