<?php

	require_once "ClassTienda.php";
	
	$producto="Mantequilla Laive 150gr";
	$cant=2;
	
	
	$objTienda=new Tienda();
	
	$objTienda->setProducto("Mermelada de Fresa 350gr",15.50,20);
	$objTienda->setProducto("Mantequilla Laive 150gr",3.50,16);
	
	echo $objTienda->getProducto();
	
	$objTienda->setCarrito($producto,$cant);
	$objTienda->setStock($cant);
	echo "<br/>";
	
	echo $objTienda->getProducto();
	echo "<br/>";
	
	echo $objTienda->getCarrito();
?>