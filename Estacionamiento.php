<?php
class Estacionamiento {
    public $tarifaHora;
    public $totalHoras;
    public $pagado;

    public function __construct($tarifaHora)
    {
        $this->tarifaHora = $tarifaHora;
        $this->totalHoras = 0 ;
        $this->pagado = false;
    }
    public function calcularPago(){
        return $this->totalHoras * $this->tarifaHora;
    }
    public function pagar(){
        $this->pagado = true;
    }
    public function generarTicket(){
        $EstatusPago = $this->pagado ? "Pagado" : "Falta Pago";
        return "Tiempo: ".$this->totalHoras. " Horas , Pago: $  ".$this->calcularPago(). " , Estado: " .$EstatusPago;
    }
    public function getTotalPago(){
        return $this->totalHoras;
    }
    public function setTotalHoras($Horas){
        $this->totalHoras = $Horas;
    }
    public function getPagado(){
        return $this->pagado;
    }
}
class EstacionamientoApp{
    private $estacionamiento;

    public function __construct()
    {
       $this->estacionamiento = new Estacionamiento(20); 
    }
    public function ingresarVehiculo($Horas){
        $this->estacionamiento->setTotalHoras($Horas);
        echo "Vehiculo ingreso por ". $Horas. " horas.<br>";
    }
    public function pagarEstacionamiento(){
        $this->estacionamiento->pagar();
        echo " Monto del estacionamiento a pagar. <br>";
    }
    public function obtenerTicket(){
        echo $this->estacionamiento->generarTicket()."<br>";
    }
}
$estacionamientoApp = new EstacionamientoApp();
$ThorasV = 9;
$estacionamientoApp->ingresarVehiculo($ThorasV);
$estacionamientoApp->pagarEstacionamiento();
$estacionamientoApp->obtenerTicket();

?>