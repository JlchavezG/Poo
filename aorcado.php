<?php 
// determinar las palabras para que el jugador adivine 
$Palabras = array("desarrollo","italia","pixeles","ingeniaria","programacion","universidad");
// el juego seleccionara una palabra al azar
$SeleccionaPalabra = $Palabras[array_rand($Palabras)];
// inicializar variables
$IntentosMaximos = 5;
$Intentos = 0;
$LetrasCorrectas = array();
$LetrasIncorrectas = array() ;
// generar una funcion para imprimir la palabra oculta con las letras que se adivinen
function mostrarPalabra($Palabras,$LetrasCorrectas){
    $MostrarPalabra = "";
    foreach(str_split($Palabras) as $Letra){
        if(in_array($Letra,$LetrasCorrectas)){
            $MostrarPalabra.=$Letra." ";
        }
        else{
            $MostrarPalabra.= "_";
        }
    }
    return $MostrarPalabra;
}
// ejecutar el juego 
while($Intentos < $IntentosMaximos){
// mostrar el estado actual del juego 
echo "\nPalabra: ".mostrarPalabra($SeleccionaPalabra,$LetrasCorrectas). "\n";
echo "Letras Incorrectas: ".implode(",",$LetrasIncorrectas). "\n";
echo "Intestos restantes: ".($IntentosMaximos - $Intentos)."\n";

// pedir al usuario la letra
$Letra = strtolower(readline("Adivina una letra"));
// validar la palabra que determine el usuario
if(!preg_match("/^[a-z]$/",$Letra)){
    echo "Por favor digita una sola letra.\n";
    continue;
}
// verificar si latra ya fue adivinada 
if(in_array($Letra,$LetrasCorrectas)  or in_array($Letra,$LetrasIncorrectas)){
    echo "Ya has utilizado esta letra";
    continue;
}
// verificar si la letra es ta en la palabra
if(strpos($SeleccionaPalabra,$Letra) !== false){
 echo "Correcto \n";
 $LetrasCorrectas[] = $Letra;
}
// evaluar si se adivino la palabra completa
if(count(array_unique(str_split($SeleccionaPalabra))) === count($LetrasCorrectas)){
    echo "Felicidades. has adivinado la palabra \"$SeleccionaPalabra\".\n";
    exit;
} 
else{
    echo "Incorrecto!\n";
    $LetrasIncorrectas[] = $Letra;
    $Intentos++;
    // verificar si se alcanzo el limite de intentos 
    if($Intentos === $IntentosMaximos){
        echo "Has perdido! la palabra era \"$SeleccionaPalabra\".\n";
        exit;

    }
    }
}

?>