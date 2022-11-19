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

	function formato_moneda(float $valor,int $tm=0):String{
		$simb="";

		if(!is_float($valor) && !is_integer($valor)){
			$valor=0;
		}

		if($tm==0){
			$simb="S/";
		}else if($tm==1){
			$simb="$";
		}		

		return $simb . " " . number_format($valor,2,".",",");
	}

	function render_view($view,$data=[]){
		if(!is_file("views/" . $view . '.php')){
			echo 'No existe la vista ' . $view;
		}
		
		require_once "views/" . $view . ".php";
	}

	function get_carrito(){

		if(isset($_SESSION['carrito'])){
			return $_SESSION['carrito'];
		}

		$iniciar_carrito=[
			'productos'=>[],
			'cant_productos'=>0,
			'subtotal'=>0.00,
			'igv'=>0.00,
			'total'=>0.00
		];

		$_SESSION['carrito']=$iniciar_carrito;
	}

?>