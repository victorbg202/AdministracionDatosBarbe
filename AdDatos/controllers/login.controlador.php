<?php
    require_once "models/producto.php";

    class LoginControlador {
        private $modelo;

        public function __construct() {
            
        }

        public function Inicio() { 
            require_once "views/usuario/login.php";
        }
    }

?>