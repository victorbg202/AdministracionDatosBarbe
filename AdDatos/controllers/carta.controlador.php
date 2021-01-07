<?php
    
    session_start();
    require_once "models/carta.php";

    class CartaControlador {

        private $modelo;
        /*<?php $this->modelo->setCat('todos') ?>*/
    
        public function __construct() {
            $this->modelo = new Carta;
        }

        public function Inicio() {
            $nombre = "";
            $titulo = "Logout";
            $url = "?c=login&a=LogOut";
            $nombre = "";

            if (isset($_SESSION["loged"])) {     
                $nombre = $_SESSION["name"];
                $nombreUrl = "?c=usuario&a=editarPerfil";
            }
            
            if (isset($_GET['categoria'])) { 
                $categoria=$_GET['categoria'];
            }

            if (isset($_SESSION["loged"])) {     
                $nombre = $_SESSION["name"];
                $nombreUrl = "?c=usuario&a=editarPerfil";
            }

            if (!isset($_SESSION['loged'])) {   
                $titulo = "Login / Registrar";
                $url = "?c=login";
            }
            require_once 'views/usuario/header.php';
            require_once "views/productos/cartaProductos.php";
            require_once 'views/usuario/footer.php';
        }

    }

?>