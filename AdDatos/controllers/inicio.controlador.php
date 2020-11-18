<?php

    class InicioControlador {

        public function __construct() {
        }

        public function Inicio() {
            require_once 'views/admin/header.php';
            require_once "views/admin/inicio/principal.php";
            require_once 'views/admin/footer.php';
        }
    }

?>