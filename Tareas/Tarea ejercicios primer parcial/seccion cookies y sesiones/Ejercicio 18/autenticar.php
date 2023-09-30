<?php
session_start();

$usuarios = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

if ($usuarios == 'admin' && $contrasenia == 'admin') {
    $_SESSION['usuario'] = "admin";
    echo $admin;
} else {
    $_SESSION['usuario'] = "usuario";
}

header('Location: acceso.php');
exit;
?>
