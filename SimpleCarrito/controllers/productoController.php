<?php

    require_once "models/products.php";

    class productoController{
        
        protected array $lista_productos;

        function __construct()
        {
            $productos=new Products;
            $this->lista_productos=$productos->ListaProductos();
        }

        public function getProductos():array{
            return $this->lista_productos;
        }

        public function get_productos_id(string $id):array {
            $productos=$this->getProductos();
            foreach($productos as $key=>$valor){
                if($valor['codigo']==$id){
                    return $productos[$key];
                }
            }
        }

    }
?>