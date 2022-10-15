<?php

abstract class Documento{
    protected string $cliente;
    protected string $fecha;
    protected string $ruc;
    protected string $telefono; 

    function __construct(string $cli,string $fecha,String $ruc, string $telefono)
    {
        $this->cliente=$cli;
        $this->fecha=$fecha;
        $this->ruc=$ruc;
        $this->telefono=$telefono;
    }    

    public function getCliente():string{
        return $this->cliente;
    }

    abstract public function getMensaje():string;
    abstract public function setMensaje(string $msj):void;

}

?>