<?php
// programa para pasar lista a alumnos utilizando POO
// 1 paso crear la clase Alumnos
class Alumno{
    private $nombre;
    private $presente;

// 2 paso  crear el constructor 
public function __construct($nombre){
    $this->nombre = $nombre;
    $this->presente = false;
}
// 3 crear la funciones 
public function getNombre(){
    return $this->nombre;
}
public function marcarPresente(){
    $this->presente = true;
}
public function estarPresente(){
    return $this->presente;
}
}
// crear la clase lista de asistencia
class ListaAsistencia{
    private $alumnos;
    // crear constructor 
    public function __construct(){
     $this->alumnos = [];   
    }
   // crear las funciones 
   public function agregarAlumno($nombre){
    // crear objeto
    $alumno = new Alumno($nombre);
    $this->alumnos[]=$alumno;
   }
   public function marcarPresente($nombre){
    foreach($this->alumnos as $alumno){
        if($alumno->getNombre() == $nombre){
            $alumno->marcarPresente();
            break;
        }
    }
   }
   public function imprimir(){
    foreach($this->alumnos as $alumno){
        echo $alumno->getNombre()." - ".($alumno->estarPresente()? "Presente" : "Ausente")."<br>";
    }
   }
} 
// objeto lista 
$lista = new ListaAsistencia();
$lista->agregarAlumno("Josue");
$lista->agregarAlumno("Oliver");
$lista->agregarAlumno("Luis");
$lista->agregarAlumno("Monse");
$lista->agregarAlumno("Carlos");

$lista->marcarPresente("Josue");
$lista->marcarPresente("Oliver");
$lista->marcarPresente("Luis");


$lista->imprimir();

?>