<form action="" method="get">
    <label for="numero1">Ingrese el primer numero</label>
    <input type="number" name="numero1" id="numero1">
    <br>
    <label for="numero2">Ingrese el segundo numero</label>
    <input type="text" name="numero2" id="numero2">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
?>
<table  border=1 style="background-color: #00FF7e; width:180px; text-align: center;">
    <tr>
        <td>
            <?php 
                echo $numero1;
            ?>
        </td>
        <td>
            <?php 
                echo "+";
            ?>
        </td>
        <td>
            <?php 
                echo $numero2;
            ?>
        </td>
        <td>
            <?php 
                echo "=";
            ?>
        </td>
        <td>
            <?php 
                echo $numero1 + $numero2;
            ?>
        </td>
    </tr>
</table>