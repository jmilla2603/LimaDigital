<?php
	include_once "claseEmpleado.php";
	include_once "claseCliente.php";
	/* 
	  Persona= "Nombre,Apellido,Edad,F_Nac,Dni";
	  Cliente=; => persona;
	  Empleado="Sueldo,Cargo,Afp,Area"; => persona;
	*/  
	  
	///////////////////////////////////////////////////////
	// CLASE EMPLEADO
    //=====================================================	
	$empleado=new Empleado("JUAN CARLOS","MILLA QUISPE",28);
	$empleado->setSueldo(4500);
	$empleado->setArea("SISTEMAS");
	$empleado->setCargo("ANALISTA DE SISTEMAS");
	$empleado->setAfp(0.12);
	echo $empleado->getDatos("ACTIVO");
	echo $empleado->Mensaje();
	
	echo "<br><br>";
	///////////////////////////////////////////////////////
	// CLASE CLIENTE
    //=====================================================	
	$cliente=new Cliente("Jose Alberto","Lopez Díaz",42);
	echo $cliente->getDatos();
	echo "<br>";
    echo $cliente->Mensaje("INFORME DESDE LA CLASE ");
?>