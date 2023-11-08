<?php
$alumnos = array(
    array("Nro" => 1, "Nombres" => "Juan Perez",  "Edad" => 25, "Materia" => "SIS-256", "Not" => 83),
    array("Nro" => 2, "Nombres" => "Ricardo Luna",  "Edad" => 30, "Materia" => "SIS-258", "Not" => 70),
    array("Nro" => 3, "Nombres" => "Teresa Tomasa",  "Edad" => 26, "Materia" => "SIS-256", "Not" => 84),
    array("Nro" => 4, "Nombres" => "Favian Umbre",  "Edad" => 24, "Materia" => "SIS-258", "Not" => 70)
);

echo json_encode($alumnos);
?>