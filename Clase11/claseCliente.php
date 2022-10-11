<?php
	include_once "clasePersona.php";
	
	class Cliente extends Persona{
		
		private float $fltLimiteCredito;
		
		function __construct(string $nombre,string $apellido,int $edad){
			parent::__construct($nombre,$apellido,$edad);
			$this->fltLimiteCredito=1000;
		}	
		
		public function getLimiteCredito():float{
			return $this->fltLimiteCredito;
		}
		
		public function getDatos():string{
			return "CLIENTE: " . $this->strNombre . ", " . $this->strApellido . "<br>" . 
			"EDAD: " . $this->intEdad . "<br>" . 
			"LIMITE DE CREDITO: " . self::getLimiteCredito();
		}
		
		public function Mensaje():string{
		    return "INFORME DESDE LA CLASE " . strtoupper(__class__);	
		}
	}

?>