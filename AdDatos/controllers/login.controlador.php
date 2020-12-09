<?php
    require_once "models/loginRegistrar.php";

    class LoginControlador {
        private $modelo;
        private $errorRegistro;

        public function __construct() {
            $this->modelo = new loginRegistrar;
        }

        public function Inicio() { 
            require_once "views/usuario/login.php";
        }
    
        public function IngresoUsuario() {
            if(isset($_POST["ingUsuario"])){
                $tabla = "usuarios";
                $item = "nombre";
                $valor = $_POST["ingUsuario"];
                $respuesta = loginRegistrar::MostrarUsuarios($tabla, $item, $valor);
                if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&  preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
                    if($respuesta["nombre"] == $_POST["ingUsuario"] && $respuesta["contrasena"] == $_POST["ingPassword"]){
                        if ($respuesta["tipo"] == "admin") {
                            session_start();
                            $_SESSION["iniciarSesion"] = "ok";
                            echo '<script> window.location = "?c=producto"; </script>';
                        }else if ($respuesta["tipo"] == ""){
                            session_start();
                            $_SESSION["iniciarSesion"] = "ok";
                            echo '<script> window.location = "inicio"; </script>';
                        }
                    }else{
                        echo '<script> window.location = "?c=login"; </script>';
                    }
                }else {
                    echo '<script> window.location = "?c=login"; </script>';
                }
            }
        }

        public function GuardarNuevo() {
            if(($_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['apellido'] != "" && 
                $_POST['correo'] != "" && $_POST['contrasena'] != "" && $_POST['compContrasena'] != "") && ($_POST['contrasena'] == $_POST['compContrasena'])) {

                $usu = new loginRegistrar;
                $usu->setId(intval($_POST['id']));
                $usu->setNombre($_POST['nombre']);
                $usu->setApellido($_POST['apellido']);
                $usu->setCorreo($_POST['correo']);
                $usu->setContrasena($_POST['contrasena']);

                setError();
                $errorRegistro = false;

                $this->modelo->Insertar($usu);
                header("location: inicio");

            }else {
                $this->modelo->setError("Las contraseñas no coinciden");
                $errorRegistro = true;
            }
        }

        public function LogOut() {
            @session_start();
            session_destroy();
            echo '<script> window.location = "inicio"; </script>';
        }
    }

?>