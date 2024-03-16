<?php 
// realizar un programa que simule las butacas ocupadas de un cine utilizando
// arreglos y variables glovales y metodos post y get
// crear el array para simular la butacas 
 $ButacasOcupadas = [];
// $ButacasOcupadas = array(3,5,8,10,15);
// crear una funcion que verifique que las butacas esten ocupadas
function ButacaOcupada($butaca,$ButacasOcupadas){
    return in_array($butaca,$ButacasOcupadas);
}
// Mostrar el formulario de la seleccion de la butaca 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo '<form method="post">';
    echo 'Selecciona una butaca (1-15): <input type="number" name="butacas" min="1" max="15" required>';
    echo '<br>';
    echo '<input type="submit" value="Verificar Butaca">';
    echo '</form>';
}
// procesar los datos de la selceccion de la butaca
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ButacaSelect = $_POST["butacas"];
    if($ButacaSelect < 1 || $ButacaSelect > 15){
           echo "La butaca selccionada no es valida.Por favor selecciona una butaca entre 1- 15";
    }
    else{
        if(ButacaOcupada($ButacaSelect,$ButacasOcupadas)){
            echo "La butaca $butacaSelect esta ocupada";
            // var_dump($ButacasOcupadas);
            // print_r($ButacasOcupadas);
        }
        else{
            echo  "La butaca $butacaSelect esta disponible";
            // agregar la butaca seleccionada al array de butacas ocupadas
            $ButacasOcupadas[] = $ButacaSelect;
        }
    }
}
// Mostrar las butacas ocupadas
echo "<br> Butacas Ocupadas: ";
foreach($ButacasOcupadas as $butaca){
   echo $butaca ." ";
}
?>