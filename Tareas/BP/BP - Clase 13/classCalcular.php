<?php

require_once "Operacion.php";
require_once "OperacionesBasicas.php";

class Calcular implements Operacion, Operacion_basica
{
  private $resultado;

  public function raizCuadrada(float $numero): float
  {
    return sqrt($numero);
  }

  public function Potencia(int $numero, int $potencia): int
  {
    return pow($numero, $potencia);
  }

  public function op_basica(float $n1, float $n2, string $operacion)
  {
    switch ($operacion) {
      case "+":
        $this->resultado = $n1 + $n2;
        break;
      case "-":
        $this->resultado = $n1 - $n2;
        break;
      case "*":
        $this->resultado = $n1 * $n2;
        break;
      case "/":
        $this->resultado = $n2 != 0  ? $n1 / $n2 : "No se puede dividir entre 0";
        break;
      default:
        $this->resultado = "No se encuentra operación";
        break;
    }
    return $this->resultado;
  }
}
