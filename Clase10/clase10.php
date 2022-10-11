<?php

	class Usuario{
		
		private string $strNombre;
		private string $strApellido;
		private string $strEmail;
		private int $strEdad;
		
		function __construct(string $nombre="",string $apellido="",string $email="",int $edad=0){
			$this->strNombre=$nombre;
			$this->strApellido=$apellido;
			$this->strEmail=$email;
			$this->strEdad=$edad;
		}
		
		public function getDatos():string{
			return "NOMBRE: $this->strNombre" . "<br>" . 
				   "APELLIDO: $this->strApellido" . "<br>" .
				   "EMAIL: " . $this->strEmail . "<br>" . 
				   "EDAD: " . $this->strEdad;
		}
	}
	
	$usuario=new Usuario("Juan Carlos","Milla Quispe","jmilla2603@gmail.com",28);
	echo $usuario->getDatos();
	echo "<br>";
	$usuario2=new Usuario();
	echo $usuario2->getDatos();
	echo "<br>";
	$usuario=new Usuario("Benjamin","Pablo","benjaminpablo@gmail.com",22);
	echo $usuario->getDatos();
?>