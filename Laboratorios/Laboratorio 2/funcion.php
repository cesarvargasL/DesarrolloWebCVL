<?php
function eliminarMayores($numeros, $mayor) {
    foreach ($numeros as $indice => $numero) {
        if ($numero > $mayor) {
            unset($numeros[$indice]);
        }
    }
    return $numeros;
}
?>





