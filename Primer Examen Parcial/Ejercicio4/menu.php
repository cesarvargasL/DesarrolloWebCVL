<?php
include("calculadora.php");
$a = $_GET["a"];
$b = $_GET["b"];
$operacion = $_GET["operacion"];

$calculadora = new Calculadora($a, $b);

switch ($operacion) {
    case "sumar":
        $resultado = $calculadora->sumar();
        break;
    case "restar":
        $resultado = $calculadora->restar();
        break;
    case "multiplicar":
        $resultado = $calculadora->multiplicar();
        break;
    case "dividir":
            $resultado = $calculadora->dividir();
        break;
    default:
        $resultado = "Operacion invalida";
}

echo "El resultado es: $resultado";
?>