<?php
session_start();

$usuario = $_SESSION['usuario'];

echo 'Variable de sesión: ' . $usuario . '<br>';

if ($usuario == 'admin') {
    echo '<h2>Menú</h2>';
    echo '<ul>';
    echo '<li><a href="#">Crear</a></li>';
    echo '<li><a href="#">Listar</a></li>';
    echo '<li><a href="#">Borrar</a></li>';
    echo '<li><a href="#">Salir</a></li>';
    echo '</ul>';
} else {
    echo '<h2>Menú</h2>';
    echo '<ul>';
    echo '<li><a href="#">Listar</a></li>';
    echo '</ul>';
}

echo '<a href="formulario.html">Volver</a>';

?>