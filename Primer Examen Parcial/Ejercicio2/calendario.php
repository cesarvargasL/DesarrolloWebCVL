<?php
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$fecha = $anio."-".$mes."-01";
$numeroDiaSemana = date("w", strtotime($fecha));
$numeroDiaSemana = $numeroDiaSemana - 1;
if($numeroDiaSemana == -1){
    $numeroDiaSemana = 6;
}
$ultimoDiaMes = date("t", strtotime($fecha));
$dia = 1;
$ultimoDia = 1;
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
"Septiembre","Octubre","Noviembre","Diciembre");

echo "<table border=1>";
echo "<tr>";
echo "<td colspan=7 align=center bgcolor=#F79646> $meses[$mes] $anio </td>";
echo "</tr>";
echo "<tr color=white; bgcolor=#F79646>";
echo "<td width=100 align=center>Lunes</td>";
echo "<td width=100 align=center>Martes</td>";
echo "<td width=100 align=center>Miercoles</td>";
echo "<td width=100 align=center>Jueves</td>";
echo "<td width=100 align=center>Viernes</td>";
echo "<td width=100 align=center>Sabado</td>";
echo "<td width=100 align=center>Domingo</td>";
echo "</tr>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($numeroDiaSemana == $j && $dia <= $ultimoDiaMes){
            echo "<td align=center>$dia</td>";
            $dia++;
        }else{
            echo "<td>&nbsp;</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";


?>