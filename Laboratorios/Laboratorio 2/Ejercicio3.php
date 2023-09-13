<?php
$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
$color = $_POST['color'];

if (is_numeric($filas) && is_numeric($columnas) && is_string($color)) {

    $tablero = array();

    for ($i = 0; $i < $filas; $i++) {
        $fila = array();
        for ($j = 0; $j < $columnas; $j++) {
            if (($i + $j) % 2 == 0) {
                $fila[] = "B";
            } else {
                $fila[] = "N";
            }
        }

        $tablero[] = $fila;
    }

    echo "<table border='1'>";

    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $elemento) {
            if ($elemento == "B") {
                echo "<td width='20' height='20' bgcolor='white'></td>";
            } else {
                echo "<td width='20' height='20' bgcolor='$color'></td>";
            }
        }

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Los valores introducidos no son válidos.";
}
?>

