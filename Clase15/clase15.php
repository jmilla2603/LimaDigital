<?php

	// file_exists => función que comprobar si un 
	// archivo o carpeta existe en una dirección
	// especifica.
	
	// ejemplo: true o false
	// file_exists('nombre_archivo');
	// file_exists('nombre_carpeta');
	
	// declaración de variable
	$archivo='claves.txt';
	// Buscar ese archivo
	if(file_exists($archivo)){
		echo "Archivo existe..";
	}else{
		echo "Archivo no existe";
	}
	
	echo "<br/>";
	
	$ruta_archivo='../Clase14/Carrito.php';
	
	if(file_exists($ruta_archivo))
		echo "Archivo carrito si existe en la ruta: 
	" . $ruta_archivo;
	else
		echo "No se encontro el archivo carrito.";
?>