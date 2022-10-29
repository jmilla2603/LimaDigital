<?php
	require_once "models/products.php";
	
	$objProductos=new Products();
	
	$lista_productos=$objProductos->ListaProductos();
	
	require_once "views/carrito_view.php";
?>