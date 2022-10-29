<?php 
class Empleado {
    public $name;
    public $horas;
    public $tarifa;
  
    function __construct($name, $horas, $tarifa) {
      $this->name = $name;
      $this->horas = $horas;
      $this->tarifa = $tarifa;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getHoras()
    {
        return $this->horas;
    }

    public function setHoras($horas)
    {
        $this->horas = $horas;
        return $this;
    }

    public function getTarifa()
    {
        return $this->tarifa;
    }

    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
        return $this;
    }

    function calcularSueldoBruto()
    {
        return $this->horas*$this->tarifa;
    }

    function calcularSueldoNeto($afp, $salud)
    {
        $sueldoBruto = $this->calcularSueldoBruto();
        return $sueldoBruto-($afp*$sueldoBruto)-($salud*$sueldoBruto);
    }
}
  

?>