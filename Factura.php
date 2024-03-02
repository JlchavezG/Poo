<?php 
// crear una factura array y clases en php 
// primer paso es crear la clase Producto
class Producto{
    public $nombre;
    public $precio;
// segundo paso  crear un constructor funcion 
    public function __construct($nombre,$precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
 }
// crear la clase factura 
 class Factura{
    public $productos = [];
    public function agregarProducto($productos){
        $this->productos[] = $productos;
    }
    public function calcularTotal(){
        $total = 0;
        foreach($this->productos as $productos){
            $total += $productos->precio;
        }
        return $total;
    }
 }
// crear lo objetos productos 
$producto1 = new Producto("Shampoo",80);
$producto2 = new Producto("Galletas",20);
$producto3 = new Producto("Pasta de dientes",40);
$producto4 = new Producto("Cocacola",25);

// crear la factura es un objeto  
$factura = new Factura();
$factura->agregarProducto($producto1);
$factura->agregarProducto($producto2);
$factura->agregarProducto($producto3);
$factura->agregarProducto($producto4);

// mostrar la factura y el total 
echo "Factura: <br>";
foreach($factura->productos as $productos){
    echo $productos->nombre.": $".$productos->precio."<br>";
}
echo "Total: $".$factura->calcularTotal();


?>