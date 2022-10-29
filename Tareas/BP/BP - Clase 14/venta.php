<?php require_once "ClassTienda.php";

$objTienda = new Tienda;

$objTienda->setProducto("Mermelada de Fresa 350gr", 15.50, 20);
$objTienda->setProducto("Mantequilla Laive 150gr", 3.50, 16);

echo $objTienda->getProducto();

$objTienda->setCarrito("Mantequilla Laive 150gr", 2);
$objTienda->setStock(2);

echo "<br/>";
echo $objTienda->getCarrito();

echo "<br/>";
echo $objTienda->getProducto();
