<?php
	
	include_once "claseOperacion.php";
	
	$num01=isset($_REQUEST["txtNum01"])?$_REQUEST["txtNum01"]:0;
	$num02=isset($_REQUEST["txtNum02"])?$_REQUEST["txtNum02"]:0;
	$ope=isset($_REQUEST["rbd"])?$_REQUEST["rbd"]:0;
	
	$msj="";
	
	switch($ope){
		case "S":
			$msj="SUMA";
		 break;
		case "R":
			$msj="RESTA";
		 break;
		case "M":
			$msj="MULTIPLICACION";
		 break;
		case "D":
			$msj="DIVISION";
		 break;	
	    default:
			$msj="SIN OPERACION";
		 break;
	}
	
	$operacion=new Operacion;
	$operacion->setNum1($num01);
	$operacion->setNum2($num02);
	
	$respuesta="EL RESULTADO DE LA " . $msj . " ES " . $operacion->Operaciones($ope);
?>