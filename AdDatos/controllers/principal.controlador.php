<?php
    require_once "models/producto.php";
    require_once "controllers/login.controlador.php";

    class PrincipalControlador {
        private $modelo;

        public function __construct() {
            $this->modelo = new LoginControlador;
        }

        public function Inicio() {
            $titulo = "Logout";
            $url = "?c=login&a=LogOutPopUp";
            $nombre = "";

            if (isset($_SESSION["loged"])) {     
                $nombre = $_SESSION["name"];
                $nombreUrl = "?c=usuario&a=editarPerfil";
            }

            if (!isset($_SESSION['loged'])) {   
                $titulo = "Login / Registrar";
                $url = "?c=login";
            }
            require_once 'views/usuario/header.php';
            require_once "views/principal.php";
            require_once "views/productos/cartaProducto.php";
            require_once 'views/usuario/footer.php';
        }
    }

?>