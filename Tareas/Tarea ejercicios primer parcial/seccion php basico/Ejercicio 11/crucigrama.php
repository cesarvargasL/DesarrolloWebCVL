<?php
class Examen {
    public $cadena1;
    public $cadena2;
  
    function __construct($cadena1, $cadena2) {
      $this->cadena1 = $cadena1;
      $this->cadena2 = $cadena2;
    }
  
    function cruzar() {
      $encontrado = false;
      for ($i = 0; $i < strlen($this->cadena1); $i++) {
        for ($j = 0; $j < strlen($this->cadena2); $j++) {
          if ($this->cadena1[$i] == $this->cadena2[$j]) {
            echo "<pre>";
            echo "   " . strtoupper($this->cadena2[$j]) . "\n";
            echo strtoupper($this->cadena1[$i]);
            for ($k = 0; $k < strlen($this->cadena1) - 1; $k++) {
              echo " ";
            }
            echo strtoupper($this->cadena1[strlen($this->cadena1) - 1]) . "\n";
            echo "    " . strtoupper($this->cadena2[strlen($this->cadena2) - 1]) . "\n";
            echo "</pre>";
            $encontrado = true;
            break 2;
          }
        }
      }
      if (!$encontrado) {
        echo "No existen letras comunes.";
      }
    }
  }
  
  $cadena1 = "Desarrollo";
  $cadena2 = "Web";
  $examen = new Examen($cadena1, $cadena2);
  $examen->cruzar();
  
?>
