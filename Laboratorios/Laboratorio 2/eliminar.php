<?php
include "funcion.php";

$mayor = $_POST['mayor'];
$vector = unserialize($_POST['vector']);

if (is_numeric($mayor) && is_array($vector)) {
    $resultado = eliminarmayores($vector, $mayor);
    echo "El resultado de eliminar los elementos mayores a $mayor es: ";
    print_r($resultado);
} else {
    echo "Los valores introducidos no son válidos.";
}
?>