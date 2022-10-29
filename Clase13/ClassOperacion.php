<?php

	require_once "Operacion.php";
	require_once "OperacionesBasicas.php";
	
	class Calcular implements Operacion,Operacion_basica{
		
		private $resultado;
		
		public function raizCuadrada(float $numero):float{
			return sqrt($numero);
		}
		
		public function Potencia(int $numero,int $potencia):int{
			return pow($numero,$potencia);
		}
		
		public function op_basica(float $num1,float $num2,string $operacion){
			
			switch($operacion){
				case "+":
					$this->resultado=$num1 + $num2;
					break;
				case "-":
					$this->resultado=$num1 - $num2;
					break;	
				case "*":
					$this->resultado=$num1 * $num2;
					break;
				case "/":
				    if($num2>0){
					    $this->resultado=$num1 / $num2;
					}else{
						$this->resultado="No se puede dividir";
					}						
					break;
				default:
					$this->resultado="No se encuentra operación";
					break;
			}
			
			return $this->resultado;
			
		}
	}
	
?>