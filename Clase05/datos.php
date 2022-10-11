<?php


	function ListarPersonas(){
		$personas=array(
						array("Nombre"=>"Juan Carlos",
							  "Apellido"=>"Milla Quispe",
							  "Edad"=>"28",
							  "Fecha_Nacimiento"=>"26/03/2010"
						),
						array("Nombre"=>"Benjamin",
							  "Apellido"=>"Pablo",
							  "Edad"=>"14",
							  "Fecha_Nacimiento"=>"02/08/2002"
						),
						array("Nombre"=>"Sergio",
							  "Apellido"=>"Mera",
							  "Edad"=>"15",
							  "Fecha_Nacimiento"=>"09/02/2000"
						)
						,
						array("Nombre"=>"Monica",
							  "Apellido"=>"Sanchez",
							  "Edad"=>"25",
							  "Fecha_Nacimiento"=>"09/02/1997"
						)
						,
						array("Nombre"=>"Abel",
							  "Apellido"=>"Lopez",
							  "Edad"=>"39",
							  "Fecha_Nacimiento"=>"09/02/1983"
						)
		);
		
		return $personas;
	}
	
	function SaltodeLinea($elementos){
		echo "<pre>";
		print_r($elementos);
		echo "</pre>";
	}
	
?>