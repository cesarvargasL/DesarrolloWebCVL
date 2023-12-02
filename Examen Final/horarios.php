<?php
include('conexion.php');

if (!isset($_GET['materia'])) {
    echo 'No se proporcionó ninguna materia.';
    exit;
}

$materia = $_GET['materia'];

$bloquesTiempo = ['8-9', '9', '10', '11', '12', '13', '14', '15', '16', '17'];
$diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
$sql = "SELECT * FROM usuarios_materias WHERE materia = '$materia'";
$result = $con->query($sql);


$horariosMateria = [];
while ($row = $result->fetch_assoc()) {
    $horariosMateria[] = $row;
}

echo '<table style="border: 1px solid black; border-collapse: collapse;">';
echo '<tr><th>Hora</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th></tr>';

foreach ($bloquesTiempo as $bloque) {
    echo '<tr>';
    echo '<td style="border: 1px solid black;">' . $bloque . '</td>';

    foreach ($diasSemana as $dia) {
        $materiaEnEsteBloqueYDia = false;
        foreach ($horariosMateria as $horario) {
            if (isset($horario[$dia]) && $horario[$dia] == $bloque) {
                $materiaEnEsteBloqueYDia = true;
                break;
            }
        }

        echo '<td style="border: 1px solid black; background-color: ' . ($materiaEnEsteBloqueYDia ? 'yellow' : 'white') . '"></td>';
    }

    echo '</tr>';
}

echo '</table>';

$con->close();
?>