<?php
    require_once "models/producto.php";

    class PrincipalControlador {
        private $modelo;

        public function __construct() {
            
        }

        public function Inicio() { 
            require_once 'views/usuario/header.php';
            require_once "views/principal.php";
            require_once "views/productos/cartaProducto.php";
            require_once 'views/usuario/footer.php';
        }
    }

?>