<?php

error_reporting(E_ALL);

require_once "app/config.php";
require_once "controllers/productoController.php";

$datos = [
  "titulo" => ".:: Lima Digital - Carrito Online",
  "lista_productos" => $productos->getProductos()
];

$productos = new productoController();
$lista_productos = $productos->getProductos();

$buscar_producto = $productos->searchProduct(7613035724518);



render_view("carrito_view", $lista_productos);
