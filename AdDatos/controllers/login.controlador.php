<?php
    require_once "models/loginRegistrar.php";

    class LoginControlador {
        private $modelo;

        public function __construct() {
            
        }

        public function Inicio() { 
            require_once "views/usuario/login.php";
        }
    
        public function ctrIngresoUsuario() {
            if(isset($_POST["ingUsuario"])){
                $tabla = "usuarios";
                $item = "nombre";
                $valor = $_POST["ingUsuario"];
                $respuesta = Usuario::MdlMostrarUsuarios($tabla, $item, $valor);
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

        public function LogOut() {
            @session_start();
            session_destroy();
            echo '<script> window.location = "inicio"; </script>';
        }
    }

?>