<?php
//verificar que se haya enviado el formulario
if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    // strrev invierte cadenas de strings
    $cadenaInvertida = strrev($cadena);
    //echo "Cadena original: " . $cadena . "<br>";
    echo "<h3> "." Cadena invertida: " . $cadenaInvertida." </h3>";
}
?>
