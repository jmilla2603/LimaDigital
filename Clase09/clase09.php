<?php
	include_once "operaciones.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>.:: Operaciones con Clases - PHP ::.</title>
	<style>
		*{
			font-family:arial,"verdana";
		}
	
		table{
			margin:0 auto;
			width:350px;
			font-size:12px;
		}
		
		.btn{
			font-size:12px;
		}
		
		#rpta{
			font-weight:bold;
			font-size:10px;
			color:darkred;
		}
	</style>
</head>
<body>
<form name="frmOpe" method="post" autocomplete="off">
<table border="2" cellspacing="4" cellpadding="0">
	<thead>
		<th colspan="2"><h1>Operaciones</h1></th>
	</thead>	
	<tbody>
	 <tr>
		<td>Num01:</td><td><input type="text" name="txtNum01"></td>
	 </tr>	
	 <tr>
		<td>Num02:</td><td><input type="text" name="txtNum02"></td>
	 </tr>
	 <tr>	
	    <td colspan="2">
			SUMA<input type="radio" name="rbd" value="S">
			RESTA<input type="radio" name="rbd" value="R">
			MULTIPLICACION<input type="radio" name="rbd" value="M">
			DIVISION<input type="radio" name="rbd" value="D">
		</td>
	 </tr>
	 <tr>
		<td colspan="2" align="center">
			<input class="btn" type="button" value="ENVIAR" onclick="EnviarDatos()">
		&nbsp;		
			<input class="btn" type="button" value="LIMPIAR">
		</td>	
	 </tr>
	 <tr><td colspan="2">&nbsp;</td></tr>
	 <tr>
	  <td colspan="2" align="center" id="rpta">
		<?=(empty($ope)?'':$respuesta);?>
	  </td>
	 </tr>
	</tbody>
</table>	
</form>
<script language="JavaScript">
	/*
		Esto es un comentario en JavaScript
	*/
	function EnviarDatos(){
		with(frmOpe){
			action="clase09.php";
			submit();
		}
	}
</script>
</body>
</html>