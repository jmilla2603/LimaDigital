<?php

abstract class Documento
{
  protected string $cliente;
  protected string $fecha;
  protected string $ruc;
  protected string $telefono;

  function __construct(string $cliente, string $fecha, string $ruc, string $telefono)
  {
    $this->cliente = $cliente;
    $this->fecha = $fecha;
    $this->ruc = $ruc;
    $this->telefono = $telefono;
  }

  /**
   * Get the value of cliente
   */
  public function getCliente()
  {
    return $this->cliente;
  }

  /**
   * Set the value of cliente
   *
   * @return  self
   */
  public function setCliente($cliente)
  {
    $this->cliente = $cliente;

    return $this;
  }

  /**
   * Get the value of fecha
   */
  public function getFecha()
  {
    return $this->fecha;
  }

  /**
   * Set the value of fecha
   *
   * @return  self
   */
  public function setFecha($fecha)
  {
    $this->fecha = $fecha;

    return $this;
  }

  /**
   * Get the value of ruc
   */
  public function getRuc()
  {
    return $this->ruc;
  }

  /**
   * Set the value of ruc
   *
   * @return  self
   */
  public function setRuc($ruc)
  {
    $this->ruc = $ruc;

    return $this;
  }

  /**
   * Get the value of telefono
   */
  public function getTelefono()
  {
    return $this->telefono;
  }

  /**
   * Set the value of telefono
   *
   * @return  self
   */
  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;

    return $this;
  }

  abstract public function getMensaje(): string;
  abstract public function setMensaje(string $msj): void;
}
