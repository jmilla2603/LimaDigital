<?php

    define("PORT","81");
    
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