<?php
    require_once "models/producto.php";

    class InicioControlador {
        private $modelo;

        public function __construct() {
            $this->modelo = new Producto();
        }

        public function Inicio() {
            require_once 'views/admin/header.php';
            require_once "views/admin/inicio/principal.php";
            require_once 'views/admin/footer.php';
        }
    }

?>