<?php
require_once "models/loginRegistrar.php";
session_start();

class LoginControlador
{
    private $modelo;
    public $error;

    public function __construct()
    {
        $this->modelo = new loginRegistrar;
    }

    public function Inicio()
    {
        $err = "";
        $errUsu = "";
        require_once "views/usuario/login.php";
    }

    public function IngresoUsuario()
    {
        if (isset($_POST["ingUsuario"])) {
            $tabla = "usuarios";
            $item = "nombre";
            $valor = $_POST["ingUsuario"];
            $respuesta = loginRegistrar::MostrarUsuarios($tabla, $item, $valor);
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&  preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
                    
            $contra = hash('sha512', $_POST['ingPassword']);
                    if ($respuesta["nombre"] == $_POST["ingUsuario"] && $contra == $respuesta["contrasena"]) {
                        if ($respuesta["tipo"] == "admin") {
                            $_SESSION["loged"] = true;
                            $_SESSION["id"] = $respuesta["id_usuario"];
                            $_SESSION["name"] = $respuesta["nombre"];
                            $_SESSION["last_name"] = $respuesta["apellido"];
                            $_SESSION["mail"] = $respuesta["correo"];
                            $_SESSION["pssw"] = $respuesta["contrasena"];
                            echo '<script> window.location = "?c=producto"; </script>';
                        } else if ($respuesta["tipo"] == "") {
                            $_SESSION["loged"] = true;
                            $_SESSION["id"] = $respuesta["id_usuario"];
                            $_SESSION["name"] = $respuesta["nombre"];
                            $_SESSION["last_name"] = $respuesta["apellido"];
                            $_SESSION["mail"] = $respuesta["correo"];
                            $_SESSION["pssw"] = $respuesta["contrasena"];
                            $_SESSION["img"] = $respuesta["img"];
                            echo '<script> window.location = "inicio"; </script>';
                        }
                    } else {
                        echo '<script> window.location = "?c=login";
                                    alert("El usuario no existe o los valores no coinciden ");
                                  </script>';
                    }
            } else {
                echo '<script> window.location = "?c=login"; 
                            alert("Los valores introducidos son incorrectos");
                          </script>';
            }
        }
    }

    public function GuardarNuevo()
    {
        $errUsu = "";
        $usu = new loginRegistrar;
        if (($_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['apellido'] != "" &&
            $_POST['correo'] != "" && $_POST['contrasena'] != "" && $_POST['confContrasena'] != "") && ($_POST['contrasena'] == $_POST['confContrasena'])) {
            
            $hash=hash('sha512', $_POST['contrasena']);
            
            $usu->setNombre($_POST['nombre']);
            $usu->setApellido($_POST['apellido']);
            $usu->setCorreo($_POST['correo']);
            $usu->setContrasena($hash);

            $this->modelo->Insertar($usu);
            echo '<script>
                        alert("Usuario creado"); 
                      </script>';
            require_once "views/usuario/login.php";
        } else {
            $err = "Las contraseñas no coinciden";
            require_once "views/usuario/login.php";
        }

        //Crear tabla para el carrito carrito
        $this->modelo->CrearCarrito($_POST['nombre']);
    }

    public function LogOut()
    {
        @session_start();
        session_destroy();
        echo '<script> window.location = "inicio"; </script>';
    }
}
