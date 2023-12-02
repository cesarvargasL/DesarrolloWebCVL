<?php
session_start();
include('alumnos.php');

if (isset($_SESSION['lista_alumnos'])) {
    $_SESSION['lista_alumnos']->eliminarAlumno();
}
?>