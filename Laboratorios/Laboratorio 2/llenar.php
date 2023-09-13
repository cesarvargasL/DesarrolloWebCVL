<?php
include 'funcion.php';

$numero = $_POST["numero"];

echo "<h2>Llenar vector</h2>";

    $n = $_POST["numero"];
    $vector = array();
    
    echo "<form action='eliminar.php' method='post'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<label for='vector[$i]'>Elemento $i:</label>";
        echo "<input type='text' name='vector[$i]' required>";
        echo "<br><br>";
    }
    
    echo "<input type='number' name='numero' value='$numero'>";
    echo "<p> Introduzca el numero mayor para eliminar</p>";
    echo "<input type='submit' value='Eliminar'>";
    echo "</form>";
?>