<?php
class Alumno {
    public $CU;
    public $nombres;
    public $apellidos;

    public function __construct($CU, $nombres, $apellidos) {
        $this->CU = $CU;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}

class ListaAlumnos {
    public $lista = [];

    public function insertarAlumno($alumno) {
        array_push($this->lista, $alumno);
    }

    public function eliminarAlumno() {
        array_pop($this->lista);
    }

    public function mostrarLista() {
        return $this->lista;
    }
}
?>