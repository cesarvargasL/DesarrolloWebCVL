<?php
    $n = $_POST['n'];

    echo "<form action='multiplicacion.php' method='post'>";
    for($i = 0; $i < $n; $i++){
        $cuadros[$i] = array(echo "<input type='number'");
        echo "<br>";
    }
    
    echo "<input type='submit' value='calcular'>";
    echo "</form>";
?>