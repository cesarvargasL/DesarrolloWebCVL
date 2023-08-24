<?php
// Si se envió el formulario, llamar a la función DibujarTablero e imprimir el resultado
if (isset($_POST['numero'])) {
  $numero = $_POST['numero'];
  DibujarTablero($numero);
}

// Función que recibe un número y dibuja un tablero de ajedrez con esa cantidad de filas y columnas
function DibujarTablero($numero) {
  // Definir el tamaño de cada celda en píxeles
  $tamaño = 50;
  // Definir los colores blanco y negro en formato rgb
  $blanco = "rgb(255,255,255)";
  $negro = "rgb(0,0,0)";
  // Crear una tabla de html con el atributo "border"
  echo "<table border='1'>";
  // Recorre las filas con un ciclo for
  for ($i = 0; $i < $numero; $i++) {
    // Crear una fila con la etiqueta tr
    echo "<tr>";
    // Recorre las columnas con otro ciclo for
    for ($j = 0; $j < $numero; $j++) {
      // Determinar el color de la celda según la posición
      if (($i + $j) % 2 == 0) {
        // Si la suma de la fila y la columna es par, el color es blanco
        $color = $blanco;
      }
      else {
        // Si la suma de la fila y la columna es impar, el color es negro
        $color = $negro;
      }
      // Crea una celda con la etiqueta td y el atributo style con el color y el tamaño correspondientes
      echo "<td style='background-color:$color; width:${tamaño}px; height:${tamaño}px;'></td>";
    }
    // Cierra la fila con la etiqueta /tr
    echo "</tr>";
  }
  // Cierra la tabla con la etiqueta /table
  echo "</table>";
}
?>
