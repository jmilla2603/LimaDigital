<?php

class Empleado
{

  private string $nombre_empleado = "";
  private float $horas_trabajadas = 0;
  private float $tarifa_hora = 0;

  public function __construct($nombre_empleado = null, $horas_trabajadas = 0, $tarifa_hora = 0)
  {
    $this->$nombre_empleado = $nombre_empleado;
    $this->$horas_trabajadas = $horas_trabajadas;
    $this->$tarifa_hora = $tarifa_hora;
  }


  /**
   * Get the value of nombre_empleado
   */
  public function getNombreEmpleado()
  {
    return $this->nombre_empleado;
  }

  /**
   * Set the value of nombre_empleado
   */
  public function setNombreEmpleado($nombre_empleado): self
  {
    $this->nombre_empleado = $nombre_empleado;

    return $this;
  }

  /**
   * Get the value of horas_trabajadas
   */
  public function getHorasTrabajadas(): float
  {
    return $this->horas_trabajadas;
  }

  /**
   * Set the value of horas_trabajadas
   */
  public function setHorasTrabajadas($horas_trabajadas): self
  {
    $this->horas_trabajadas = $horas_trabajadas;

    return $this;
  }

  /**
   * Get the value of tarifa_hora
   */
  public function getTarifaHora(): float
  {
    return $this->tarifa_hora;
  }

  /**
   * Set the value of tarifa_hora
   */
  public function setTarifaHora($tarifa_hora): self
  {
    $this->tarifa_hora = $tarifa_hora;

    return $this;
  }


  public function getSueldoBruto(): float
  {
    $horas = $this->getHorasTrabajadas();
    $tarifa = $this->getTarifaHora();

    $sueldo_bruto = $horas * $tarifa;
    return $sueldo_bruto;
  }

  public function getDescSalud(): float
  {
    //12 % ->0.12
    $descuento_salud = $this->getSueldoBruto() * 0.12;
    return $descuento_salud;
  }

  public function getDescAFP(): float
  {
    //8 % ->0.08
    $descuento_afp = $this->getSueldoBruto() * 0.08;
    return $descuento_afp;
  }

  public function getSueldoNeto(): float
  {
    $sueldo_neto = $this->getSueldoBruto() - $this->getDescSalud() - $this->getDescAFP();
    return $sueldo_neto;
  }
}
