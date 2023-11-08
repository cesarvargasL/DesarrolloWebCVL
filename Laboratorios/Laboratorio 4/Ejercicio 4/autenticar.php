<?php
    session_start();
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    if ($usuario === 'admin' && $contrasenia === '123') {
        $_SESSION['nivel'] = 'admin';
        echo 'autenticado correctamente';
    } else {
        echo 'no autenticado';
    }
?>