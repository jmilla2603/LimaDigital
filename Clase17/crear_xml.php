<?php

    $doc=new DOMDocument();
    $doc->formatOutput=TRUE;
    $doc->preserveWhiteSpace=FALSE;
    $doc->encoding='utf-8';

    // EMPieza la creacion del XML

    $productos=array("Lavadora","Televisor","Tostadora");

    $xml='<?xml version="1.0" encoding="UTF-8"?>
    <factura>
    <serie>F001</serie>
    <correlativo>12345678</correlativo>
    <cliente>
        <nrodoc tipo="RUC">12345678911</nrodoc>
        <direccion>dshasjkdhaskjdhsa</direccion>
        <telefono>1231456</telefono>
    </cliente>';
    
    foreach($productos as $lista){
        $xml.='<producto>' . $lista .'</producto>';
    }

    $xml.='</factura>';

$doc->loadXML($xml);
$doc->save('FACTURA_DEMO.xml');
?>