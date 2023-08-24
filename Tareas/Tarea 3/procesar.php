<?php
// Función que recibe una cadena y devuelve la palabra más larga
function PalabraMasLarga($cadena) {
  // Dividir la cadena en un arreglo de palabras, consulte la documentacion oficial de php y explode
  //divide los strings en varios strings (de arreglos)
  $palabras = explode(" ", $cadena);
  // Inicializar la palabra más larga y su longitud
  $mas_larga = "";
  $longitud = 0;
  // Recorrer el arreglo de palabras
  foreach ($palabras as $palabra) {
    // Obtener la longitud de la palabra actual
    $len = strlen($palabra);
    // Si es mayor que la longitud máxima, actualiza la palabra más larga y su longitud
    if ($len > $longitud) {
      $mas_larga = $palabra;
      $longitud = $len;
    }
  }
  // Devuelve la palabra más larga
  return $mas_larga;
}

// Inicializar la variable para mostrar el resultado
$resultado = "";

// Si se envió el formulario, llamar a la función PalabraMasLarga y almacenar el resultado
if (isset($_POST['cadena'])) {
  $cadena = $_POST['cadena'];
  $resultado = PalabraMasLarga($cadena);
}
?>

<!-- Devolucion resultado -->
<?php if (!empty($resultado)) { 
    ?>
    <h2>La palabra más larga es: 
        <br>
        <h3> 
            <?php echo $resultado; ?>
        </h3>
    </h2>
<?php } 
?>
