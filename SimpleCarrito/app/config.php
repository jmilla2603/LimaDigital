<?php

    define("PORT","81");
    define("ROOT",__DIR__);
	define("SEPARATE",DIRECTORY_SEPARATOR);
	
	function mensajeUsuario($status=200,$msj='',$data=[]){
		http_response_code($status);
		$response=array(
						"status"=>$status,
						"message"=>$msj,
						"data"=>$data
						);
		return json_encode($response);
	}
?>