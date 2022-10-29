<?php
include_once "claseFactura.php"; // NATURAL(10) - JURIDICA(20)
include_once "claseProductos.php";
include_once "claseBoleta.php";

$documento = new Factura("Juan Milla", "15/10/2022", "10405108203", "976-226451", "CONTADO", 100.00, 18.00, 118.00);
$boleta = new Boleta("Benjamin Pablo", "21/10/2022", "76098364", "939203960", "CONTADO", 50.00, 18.00, 10.00);

$listaProductos = new Products;

echo $documento->setMensaje("Factura Ok");
echo $boleta->setMensaje("Boleta Ok");

echo $documento->ImprimirDocumento($listaProductos->ListarProductos());
echo $boleta->imprimirDocumento($listaProductos->ListarProductos());

echo $documento->getMensaje();
echo $boleta->getMensaje();
