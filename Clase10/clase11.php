<?php
	include_once "clasePersona.php";
	/* 
	  Persona= "Nombre,Apellido,Edad,F_Nac,Dni";
	  Cliente=; => persona;
	  Empleado="Sueldo,Cargo,Afp,Area"; => persona;
	*/  
	  
	$persona=new Persona("JUAN CARLOS","MILLA QUISPE",28);
	
	echo $persona->getDatos();
?>