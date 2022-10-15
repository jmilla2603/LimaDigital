<?php
include_once("claseFactura.php"); // NATURAL (10) - JURIDICA (20)
include_once("claseProducts.php");

$documento = new Factura("Benjamin Pablo", "15/10/2022", "1221201244", "985214521", "CONTADO", 100.00, 18.00, 118.00);

$listaProductos = new Products;

echo $documento->setMensaje("Factura Ok");
echo $documento->imprimirDocumento($listaProductos->listarProductos());

echo $documento->getMensaje();
