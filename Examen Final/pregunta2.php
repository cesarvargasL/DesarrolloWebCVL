<?php
include('alumnos.php');

session_start();

if (!isset($_SESSION['lista_alumnos'])) {
    $_SESSION['lista_alumnos'] = new ListaAlumnos();
}

$listaAlumnos = $_SESSION['lista_alumnos'];
$alumnos = $listaAlumnos->mostrarLista();
?>

<table>
    <tr>
        <th>CU</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>OPERACIONES</th>
    </tr>
    <?php foreach ($alumnos as $alumno): ?>
    <tr>
        <td><?php echo $alumno->CU; ?></td>
        <td><?php echo $alumno->nombres; ?></td>
        <td><?php echo $alumno->apellidos; ?></td>
        <td>
            <button class="eliminar">Eliminar</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button id="insertar">Insertar</button>

<script src="script.js"></script>