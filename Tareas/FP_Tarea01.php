<?php

$humanos = array(
	array("Nombre" => "Frank", "Apellido" => "Palomino", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Jair", "Apellido" => "Mcarty", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Adam", "Apellido" => "Douglas", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Karles", "Apellido" => "Lunera", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Veronica", "Apellido" => "Sanchez", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Leo", "Apellido" => "Alfaro", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Sergio", "Apellido" => "Dextre", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Lucas", "Apellido" => "Tevez", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Ana", "Apellido" => "Romero", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Jorge", "Apellido" => "Lapadula", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992"),
	array("Nombre" => "Ricardo", "Apellido" => "Lopez", "Edad" => "30", "Fecha_Nacimiento" => "18/04/1992")
);
echo "<table border=1>
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Edad</th>
<th>Fecha de Nacimiento</th>
</tr>";

foreach ($humanos as $nombre) {
	echo "<tr>";
	foreach ($nombre as $N => $Ap)
		echo "<th>" . $Ap . "</th>";
	echo "</tr>";
}
echo "</table>";
