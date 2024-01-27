<?php 
   class Alumno{
     private $ApellidoP;
     private $ApellidoM;
     private $Nombre;
     private $Edad;
public function _construct($Nombre, $ApellidoP, $ApellidoM, $Edad){
    $this->Nombre = $Nombre;
    $this->ApellidoP = $ApellidoP;
    $this->ApellidoM = $ApellidoM;
    $this->Edad = $Edad;
}
public function MostrarNom(){
    return $this->Nombre;
}
public function MostrarApellidoP(){
    return $this->ApellidoP;
}
public function MostrarApellidoM(){
    return $this->ApellidoM;
}
public function MostrarEdad(){
    return $this->Edad;
}
   }
   $ObjetoAlumno1 = new Alumno('Oliver','Hernandez','Hernandez','19');
   echo $ObjetoAlumno->MostrarNom();
   echo $ObjetoAlumno->MostrarApellidoP();
   echo $ObjetoAlumno->MostrarApellidoM();
   echo $ObjetoAlumno->MostrarEdad();

   $ObjetoAlumno2 = new Alumno('Josue','Hernandez','Hernandez','20');
   echo $ObjetoAlumno->MostrarNom();
   echo $ObjetoAlumno->MostrarApellidoP();
   echo $ObjetoAlumno->MostrarApellidoM();
   echo $ObjetoAlumno->MostrarEdad();
?>