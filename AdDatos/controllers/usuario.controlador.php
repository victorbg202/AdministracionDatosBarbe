<?php
    require_once "models/producto.php";

    class UsuarioControlador {

        private $modelo;

        public function __construct() {
            $this->modelo = new Usuario;
        }

        public function FormCrear() {
            $titulo = "Registrar";
            $u = new Usuario();
            if (isset($_GET['id'])) {
                $titulo = "Modificar";
                $u = $this->modelo->Obtener($_GET['id']);
            }

            require_once "views/admin/header.php";
            require_once "views/admin/usuarios/form.php";
            require_once "views/admin/footer.php";
        }

        public function Tprod() {
            require_once "views/admin/header.php";
            require_once "views/admin/usuarios/t_user.php";
            require_once "views/admin/footer.php";
        }

        public function Guardar() {
            $u = new Usuario;
            $u->setId(intval($_POST['id']));
            $u->setNombre($_POST['nombre']);
            $u->setDesc($_POST['descripcion']);
            $u->setPrecio($_POST['precio']);



            //If
            //Condicion
            $u->getId() > 0 ? 
            //Verdadero
            $this->modelo->Actualizar($u) : 
            //Falso
            $this->modelo->Insertar($u);
            header("location:?c=usuario");
        }

        public function Borrar() {
            $this->modelo->Eliminar($_GET['id']);
            header("location:?c=usuario");
        }
    }

?>