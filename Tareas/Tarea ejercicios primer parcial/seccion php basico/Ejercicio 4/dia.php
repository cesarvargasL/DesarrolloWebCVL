<?php
$n = $_GET['n'];
if($n <= 0 || $n > 7){
  echo "El numero ingresado no se encuentra entre los dias de la semana";
}
else{
  echo "Usted Selecciono el dia:";
  echo "<br>";
  echo "<br>";
  $dias = array(1 =>'Lunes', 2 =>'Martes', 3 =>'Miércoles', 4 =>'Jueves', 5 =>'Viernes', 6 =>'Sábado', 7 =>'Domingo');
  echo "<form action=''>";
  echo "<select name='dias'>";
    foreach ($dias as $index => $dia) {
      if ($index == $n) {
        echo "<option value=\"$dia\" selected>$dia</option>";
      } else {
        echo "<option value=\"$dia\">$dia</option>";
      }
    }
  echo "</select>";
  echo "</form>"; 
}
?>

