<?php
function eliminarmayores($arreglo, $mayor) {
    $nuevo = array();
    foreach ($arreglo as $elemento) {
        if ($elemento <= $mayor) {
            $nuevo[] = $elemento;
        }
    }
    return $nuevo;
}
?>






