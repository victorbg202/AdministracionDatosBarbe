<?php
    require_once "models/producto.php";

    class ProductoControlador {

        private $modelo;

        public function __construct() {
            $this->modelo = new Producto;
        }


        public function Inicio() {
            require_once "views/admin/header.php";
            require_once "views/admin/inicio/principal.php";
            require_once "views/admin/footer.php";
        }

        public function InicioProd() {
            require_once "views/admin/header.php";
            require_once "views/admin/productos/t_prod.php";
            require_once "views/admin/footer.php";
        }

        public function FormCrear() {
            $titulo = "Registrar";
            $p = new Producto();
            if (isset($_GET['id'])) {
                $titulo = "Modificar";
                $p = $this->modelo->Obtener($_GET['id']);
            }

            require_once "views/admin/header.php";
            require_once "views/admin/productos/form.php";
            require_once "views/admin/footer.php";
        }

        public function Tprod() {
            require_once "views/admin/header.php";
            require_once "views/admin/productos/t_prod.php";
            require_once "views/admin/footer.php";
        }

        public function Guardar() {
            $p = new Producto;
            $p->setId(intval($_POST['id']));
            $p->setNombre($_POST['nombre']);
            $p->setDesc($_POST['descripcion']);
            $p->setPrecio($_POST['precio']);



            //If
            //Condicion
            $p->getId() > 0 ? 
            //Verdadero
            $this->modelo->Actualizar($p) : 
            //Falso
            $this->modelo->Insertar($p);
            header("location:?c=producto");
        }

        public function Borrar() {
            $this->modelo->Eliminar($_GET['id']);
            header("location:?c=producto&a=Tprod");
        }
    }   
?>