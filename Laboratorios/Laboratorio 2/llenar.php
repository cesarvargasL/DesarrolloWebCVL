<!-- Crear el llenar.php que permite llenar el vector de n posiciones y el parámetro mayor -->
<?php
// Recuperar el valor de n del formulario-n.html por POST
$n = $_POST['n'];

// Validar que n sea un número positivo
if (is_numeric($n) && $n > 0) {
    // Crear un arreglo vacío
    $vector = array();

    // Llenar el vector con n números aleatorios entre 1 y 100
    for ($i = 0; $i < $n; $i++) {
        $vector[] = rand(1, 100);
    }

    // Mostrar el vector generado
    echo "El vector generado es: ";
    print_r($vector);
    echo "<br>";

    // Crear un formulario que solicita el parámetro mayor y envía los datos a eliminar.php
    echo "<form action='eliminar.php' method='post'>";
    echo "<label for='mayor'>Introduce el parámetro mayor:</label>";
    echo "<input type='number' id='mayor' name='mayor'>";
    // Enviar el vector como un campo oculto
    echo "<input type='hidden' name='vector' value='" . serialize($vector) . "'>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
} else {
    // Si n no es válido, mostrar un mensaje de error
    echo "El valor de n debe ser un número positivo.";
}
?>