<?php
// Generar un arreglo de números del 1 al 20
$numeros = range(1, 20);
// Inicializar dos arreglos vacíos para los números pares e impares
$pares = array();
$impares = array();
// Recorrer el arreglo de números con un ciclo foreach
foreach ($numeros as $numero) {
  // Si el número es par,se agrega al array de numeros pares
  if ($numero % 2 == 0) {
    $pares[] = $numero;
  }
  // Si el número es impar,se agrega al array de numeros impares
  else {
    $impares[] = $numero;
  }
}
// Imprimir ambos arreglos
echo "Los números pares son: ". implode(", ",$pares);
echo "<br>";
echo "Los números impares son: ". implode(", ",$impares);
?>
