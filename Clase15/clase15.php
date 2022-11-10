<?php
$archivo = "claves.txt";

echo file_exists($archivo) ? "Archivo existe..." : "Archivo no existe";

echo "<br/>";

$ruta_archivo = "../Clase14/Carrito.php";

echo file_exists($ruta_archivo) ? "Archivo carrito si existe en la ruta: " . $ruta_archivo : "No se encontró el archivo carrito";
