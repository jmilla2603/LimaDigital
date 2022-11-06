<?php

error_reporting(E_ALL);

require_once "app/config.php";

require_once "models/products.php";

$productos = new Products;

$lista_productos = $productos->ListaProductos();

//$productos->infoData($lista_productos);

require_once "views/carrito_view.php";
