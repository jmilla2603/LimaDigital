<?php
    //$personas=null;
	
	
	
	function DatosPersonas(array $agregarPersonas=null):array{
		
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
	
		
	function ListarPersonas():String{
			
		$grp_personas=DatosPersonas();
		
		$filas=0;
		$bgcolor="#fff;";
		$table="";
		foreach($grp_personas as $persona){
			
			$filas=$filas + 1;
			
			if($filas%2==0){
			   $bgcolor="#ccc;";
			}else{
			   $bgcolor="#fff;";	
			}
				
			$table.="<tr style='background-color:" . $bgcolor . "'><td>" . $filas . "</td>";
			
			foreach($persona as $indice=>$valor){
				$table.="<td>" . $valor . "</td>";
			}
			
			$table.="</tr>";
		}
		
		return $table;
	}
		
	function Mensaje(String $msj="Lima digital"):String{
		return "Aprendiendo PHP " . (isset($msj)?"- " . strtoupper($msj):"");
	}
	
	function SaltodeLinea($elementos){
		echo "<pre>";
		print_r($elementos);
		echo "</pre>";
	}
	
	//SaltodeLinea(ListarPersonas()($np));
	
	
?>