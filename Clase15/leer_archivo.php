<?php

	// fopen => Permite abrir un archivo
	// fopen(nombre_archivo,modo_acceso)
	
	// Modos de acceso
	
	// =======================================================
	//   MODO				DESCRIPCION
	// =======================================================
	//    R					ABRIR EL ARCHIVO EN MODO LECTURA
	//    R+				MODO LECTURA Y ESCRITURA
	//	  W					SOLO MODO ESCRITURA, SI NO ENCUENTRA
	//						EL ARCHIVO LO CREA SIN CONTENIDO.
	//	  W+				MODO LECTURA Y ESCRITURA, SI NO ENCUENTRA
	//						EL ARCHIVO LO CREA SIN CONTENIDO.
	//	  A					SOLO ESCRITURA,EL PUNTERO AL FINAL DEL ARCHIVO, SI NO ENCUENTRA EL
	//						EL ARCHIVO LO CREA SIN CONTENIDO.
	//	  A+				MODO LECTURA Y ESCRITURA, EL PUNTERO AL FINAL DEL ARCHIVO
	//						SI NO ENCUENTRA EL
	//						EL ARCHIVO LO CREA SIN CONTENIDO.

	// fread => Permite leer un archivo previamente abierto
	// fread($archivo_abierto,longitud_archivo)
	// Obs: Tener en cuenta que el archivo_abierto usa la función
	// fopen, no olvidar tambien el tamaño del archivo que es filesize.
	
	$archivo='carrito.txt';
	
	if(!file_exists($archivo)){
		echo "Archivo No existe..!!";
	}else{
		// abrir archivo
		$abrir=fopen($archivo,"r");
		// ver contenido del archivo
		$contenido=fread($abrir,filesize($archivo));
		// Cerrar el archivo
		fclose($abrir);
		// Imprimir el contenido del archivo
		echo $contenido;
		echo "<br/>";
		echo "Cuanto pesa el archivo " . filesize($archivo);
	}
	
?>