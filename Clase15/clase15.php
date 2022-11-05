<?php
	date_default_timezone_set('America/Lima');
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

	echo "<br/>";

	echo "El " . esEjecutable($archivo);

	echo "<br/>";

	echo "UltimaModificacion: " . ultimaModificacion($archivo);

	function esEjecutable($archivo){
		if(is_executable($archivo)){
			return 'Archivo ejecutable';
		}else{
			return 'Archivo no ejecutable';
		}
	}	

	function ultimaModificacion($archivo){
		if(file_exists($archivo)){
			return date("F d Y H:i:s.",filectime($archivo));
		}else{
			return '';
		}
	}
?>