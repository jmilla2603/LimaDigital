<?php

    require_once "../app/config.php";

    $method=$_SERVER["REQUEST_METHOD"];

    if(!isset($method)){
        mensajeUsuario(403,'Error method');
        die;
    }

    switch($method){
        case "GET":
            $html='<h1>Ejecutando desde el servidor</h1>';
            echo mensajeUsuario(200,'Ok',$html);
            break;
        case "POST":
            echo mensajeUsuario(200,'POST');
            break;
    }    

?>