<?php
	include_once "clasePersona.php";
	
	class Empleado extends Persona{
		//Empleado="Sueldo,Cargo,Afp,Area"; => persona;	
		private float $fltSueldo;
		private string $strCargo;
		private float $fltAfp;
		private string $strArea;
		private float $cafp;
		
		public function __construct(string $nombre,string $apellido,int $edad){
			parent::__construct($nombre,$apellido,$edad);
			
			$this->fltSueldo=0.00;
			$this->strCargo="";
			$this->fltAfp=0.00;
			$this->strArea="";
		}
		
		public function setSueldo(float $sueldo):void{
			$this->fltSueldo=$sueldo;
		}
		
		public function setArea(string $area):void{
			$this->strArea=$area;
		}
		
		public function setCargo(string $cargo):void{
			$this->strCargo=$cargo;
		}
		
		public function setAfp(float $afp):void{
			$this->fltAfp=$afp;
		}
		
		public function calcularSueldo():float{
			$this->cafp=$this->fltSueldo * $this->fltAfp;
			return $this->fltSueldo - $this->cafp;
		}
		
		public function getDatos():string{
			return "EMPLEADO: " . $this->strNombre . ", " . $this->strApellido . "<br>" . 
			"EDAD: " . $this->intEdad . "<br>" .
			"CARGO: " . $this->strCargo . "<br>" . 
			"AREA: " . $this->strArea . "<br>" . 
			"SUELDO NETO: " . number_format($this->calcularSueldo(),2,".",",") . "<br>";
		}
		
		public function Mensaje():string{
		    return "INFORME DESDE LA CLASE " . __class__;	
		}
		
	}
?>