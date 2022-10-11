<?php

	abstract class Persona{
		
		protected string $strNombre;
		protected string $strApellido;
		protected int $intEdad;
		
		function __construct(string $nombre,string $apellido,int $edad){
			$this->strNombre=$nombre;
			$this->strApellido=$apellido;
			$this->intEdad=$edad;
		}
		
		public function getDatos():string{
			return "Datos <hr width='100%'>NOMBRE: " . $this->strNombre . "<br>"
			. "APELLIDO: " . "$this->strApellido" . "<br>EDAD: " . $this->intEdad;
		}
		
		abstract public function Mensaje();
	}

?>