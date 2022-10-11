<?php

	class Operacion{
		private int $n1;
		private int $n2;
		private int $resultado;
		
		public function setNum1(int $n1):void{
			$this->n1=$n1;
		}
		
		public function setNum2(int $n2):void{
			$this->n2=$n2;
		}
		
		public function Operaciones(string $op):int{
			
			switch($op){
				case "S":
					$resultado=$this->n1 + $this->n2;
					break;
				case "R":
					$resultado=$this->n1 - $this->n2;
					break;	
				case "M":
					$resultado=$this->n1 * $this->n2;
					break;	
				case "D":
					$resultado=$this->n1 / $this->n2;
					break;
				default:
					$resultado=0;
					break;
			}
			
			return $resultado;
		}
	}

?>