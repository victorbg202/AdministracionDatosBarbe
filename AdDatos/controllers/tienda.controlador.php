<?php
    
    session_start();
    require_once "models/producto.php";

    class TiendaControlador {

        private $modelo;
        private $categoria;
        /*<?php $this->modelo->setCat('todos') ?>*/
    
        public function __construct() {
            $this->modelo = new Producto;
        }

        public function Inicio() {
            $titulo = "Logout";
            $url = "?c=login&a=LogOutPopUp";
            $urlCarta="?c=carta&a=Inicio";
            $nombre = "";
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
            require_once "views/productos/listaProductos.php";
            require_once 'views/usuario/footer.php';
        }

        public function AnadirProducto() {
            $this->modelo->setNombre($_POST['nombre']);
            $this->modelo->setPrecio($_POST['precio']);
            $this->modelo->AnadirProd();
            $this->Inicio();
        }

        public function EliminarProducto() {
            $this->modelo->EliminarProd($_GET['id']);
            header("location:?c=carta&a=Inicio");
        }

        public function EliminarTodoCarrito() {
            $this->modelo->EliminarCarrito();
            header("location:?c=tienda&a=Inicio");
        }

    }

?>