<?php
session_start();
include('alumnos.php');

if (!isset($_SESSION['lista_alumnos'])) {
    $_SESSION['lista_alumnos'] = new ListaAlumnos();
}

$cu = $_POST['cu'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$alumno = new Alumno($cu, $nombres, $apellidos);

$_SESSION['lista_alumnos']->insertarAlumno($alumno);
?>