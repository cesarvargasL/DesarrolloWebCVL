<?php
include 'funcion.php';

$vector = $_POST["vector"];
$numero = $_POST["numero"];

$resultado = eliminarMayores($vector, $numero);

echo "<h2>Resultado</h2>";
echo "<p>El vector resultante después de eliminar los elementos mayores al número ".$numero. " introducido es:</p>";
echo "<ul>";
foreach ($resultado as $numero) {
    echo "<li>$numero</li>";
}
echo "</ul>";
?>