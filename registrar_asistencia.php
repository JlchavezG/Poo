<?php 
// obtener el codigo del alumno enviado por el formulario a travez de post
$CodigoAlumno = $_POST['codigo'];
$NombreAlumno = $_POST['nombre'];
// imprimiendo el codigo recibido 
// echo $CodigoAlumno;
// obtener la fecha actual
$fechaActual = date("d-m-Y");
// echo $CodigoAlumno."<br>".$fechaActual;
// crear un archivo llamado registro de asistencia
$archivo = "asistencias_$fechaActual.txt";
// verificar qu eel archivo exista 
if(file_exists($archivo)){
    // si existe el archivo , agregar la asistencia del alumno
    $lista = file_get_contents($archivo);
    $lista.="$CodigoAlumno\n";
    $lista.="$NombreAlumno\n";
    file_put_contents($archivo,$lista);
}
else{
    // si el archivo no existe , tenemos que crearlo y guardar la asistencia 
    $lista.="$CodigoAlumno\n";  
    file_put_contents($archivo,$lista);
}
echo "Asistencia Registrada";

?>