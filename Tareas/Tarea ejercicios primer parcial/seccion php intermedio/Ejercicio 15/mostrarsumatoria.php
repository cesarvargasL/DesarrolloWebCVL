<?php
include 'funciones.php';
echo "<h2 style='color:red;'>Resultados:</h2>";
if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $sumatoria = sumatoria($n);
    $fibo = fibonacci($n);
    echo "El fibonacci de ".$n." es: <strong>".$fibo."</strong><br>";
    echo "La serie va de la siguiente manera: ";
    for($i = 0; $i <= $n; $i++){
        if($i == $n){
            echo "<strong>".fibonacci($i)."</strong>";
            break;
        } 
        else{
            echo "<strong>".fibonacci($i)."</strong>".", ";
        }  
    }
    echo "<br>";
    echo "La sumatoria de Fibonacci para el número ".$n. " es: <strong>".$sumatoria."</strong>";
}
?>
