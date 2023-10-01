<?php
    $cadena1 = $_POST["cadena1"];
    $cadena2 = $_POST["cadena2"];

    if(strpos($cadena1, $cadena2) == true) {
        $mensaje = "$cadena1 tiene la palabra $cadena2";
        $resultado = str_replace($cadena2, "", $cadena1);
    } else {
        if(strpos($cadena1, $cadena2) == false){
        $mensaje = "$cadena1 no tiene la palabra $cadena2";
        $resultado = $cadena1;
        }
        else {
            echo "Datos desconocidos";
        }
    }

    echo "<p>$mensaje</p>";
    echo "<br>";
    echo "<p>$resultado</p>";
?>