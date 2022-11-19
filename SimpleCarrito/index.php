<?php

error_reporting(E_ALL);

session_start();

    require_once "app/config.php";
    require_once "controllers/productoController.php";

    $productos=new productoController();

    $datos=[
        'titulo'=>'.:: Lima Digital - Carrito Online ::.',
        'lista_productos'=> $productos->getProductos()
    ];

    //$buscar_producto=$productos->get_productos_id('7750243069946');
    //print_r($buscar_producto);

    render_view('carrito_view',$datos);

?>



    