<?php
$cantidad = $_POST['cantidad'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];

if (is_numeric($cantidad) && is_string($origen) && is_string($destino)) {
    $factores = array(
        "mm" => array("mm" => 1, "cm" => 0.1, "dm" => 0.01, "m" => 0.001, "km" => 0.000001),
        "cm" => array("mm" => 10, "cm" => 1, "dm" => 0.1, "m" => 0.01, "km" => 0.00001),
        "dm" => array("mm" => 100, "cm" => 10, "dm" => 1, "m" => 0.1, "km" => 0.0001),
        "m" => array("mm" => 1000, "cm" => 100, "dm" => 10, "m" => 1, "km" => 0.001),
        "km" => array("mm" => 1000000, "cm" => 100000, "dm" => 10000, "m" => 1000, "km" => 1)
    );

    $resultado = $cantidad * $factores[$origen][$destino];

    echo "<div style='width:300px; height:100px; margin:0 auto; border:5px solid yellow; background-color:gray; text-align:center; font-size:20px;'>";
    echo "$cantidad $origen equivale a $resultado $destino";
    echo "</div>";
} else {

    echo "Los valores introducidos no son válidos.";
}
?>
