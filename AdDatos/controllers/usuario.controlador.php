<?php
        require_once "models/usuario.php";
        session_start();
        class UsuarioControlador {
    
            private $modelo;
    
            public function __construct() {
                $this->modelo = new Usuario;
            }

            public function Inicio() {
                require_once "views/admin/header.php";
                require_once "views/admin/usuarios/t_user.php";
                require_once "views/admin/footer.php";
            }

            public function editarPerfil()
            {
                require_once "views/usuario/editarPerfil.php";
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

            public function EditarUsuario() {
                if (isset($_GET['id'])) {
                    $titulo = "Modificar";
                    $u = $this->modelo->Obtener($_GET['id']);
                }
                require_once "views/usuario/formEditar.php";
            }

            public function EditarDatos()
            {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);

                
                $_SESSION["name"] = $_POST['nombre'];
                $_SESSION["last_name"] = $_POST['apellido'];
                $_SESSION["mail"] = $_POST['correo'];
                $_SESSION["pssw"] = $_POST['contrasena'];

                $this->modelo->Actualizar($u);
                header("location: ?c=usuario&a=editarPerfil");
            }
    
            public function Guardar() {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);

                //If condicion
                $u->getId() > 0 ? 
                //Verdadero
                $this->modelo->Actualizar($u) : 
                //Falso
                $this->modelo->Insertar($u);
                header("location:?c=usuario");
            }
    
            public function GuardarNuevo() {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);
                   
                $this->modelo->Insertar($u);
                header("location: inicio");
            }
    
            public function Borrar() {
                $this->modelo->Eliminar($_GET['id']);
                header("location:?c=usuario");
            }
        }
?>