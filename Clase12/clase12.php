<?php
include_once "claseFactura.php"; // NATURAL(10) - JURIDICA(20)
include_once "claseProductos.php";

$documento = new Factura("Juan Milla", "15/10/2022", "10405108203", "976-226451", "CONTADO", 100.00, 18.00, 118.00);

$listaProductos = new Products;

echo $documento->setMensaje("Factura Ok");

echo $documento->ImprimirDocumento($listaProductos->ListarProductos());

echo $documento->getMensaje();
