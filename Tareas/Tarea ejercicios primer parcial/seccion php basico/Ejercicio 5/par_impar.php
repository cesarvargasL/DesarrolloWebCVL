<form action="" method="get">
    <label for="numero">Introduzca un numero:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['numero'])){
    $numero = $_GET['numero'];

    if ($numero % 2 == 0){
        echo "El numero ".$numero." es par <br>";
    }
    else 
    {
        echo "El numero ".$numero." es impar <br>";
    }
}

?>