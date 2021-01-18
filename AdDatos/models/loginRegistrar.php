<?php

    class loginRegistrar {
        
        //Variables Usuario
        private $id_usuario;
        private $nombre;
        private $apellido;
        private $correo;
        private $contrasena;
        private $error;
        private $errContra;

        //Constructor Usuario
        public function __construct() {
            $this->pdo = BasedeDatos::Conectar();
        }

        //Iniciar sesion
        static public function MostrarUsuarios($tabla, $item, $valor){
            $consulta=BasedeDatos::Conectar()->prepare("SELECT * FROM $tabla where $item = :$item");

            $consulta ->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $consulta ->execute();

            return $consulta ->fetch();

        }

        //Insertar usuario
        public function Insertar(loginRegistrar $u) {
            try {
                $consulta="INSERT INTO usuarios(nombre, apellido, correo, contrasena) VALUES (?,?,?,?);";
                $this->pdo->prepare($consulta)->execute(array(
                    $u->getNombre(),
                    $u->getApellido(),
                    $u->getCorreo(),
                    $u->getContrasena()
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Crear tabla para carrito $_SESSION['name']
        public function CrearCarrito($nombre) {
            try {
                $nombreTabla = 'carrito'.$nombre;
                $consulta="CREATE TABLE $nombreTabla ( idProdCarrito INT NOT NULL AUTO_INCREMENT,
                                                       nombreProd VARCHAR(25),
                                                       cantidad   INT(255),
                                                       precio     INT(25),
                                                       urlimg VARCHAR(255),
                                                       PRIMARY KEY (idProdCarrito)     );";
                                                       
                $this->pdo->query($consulta);
            } catch (Exception $e) {
                die($e->getMessage());                
            }
        }

        //Mostrar errores
        public function Errores(loginRegistrar $u) {
            try {
                $consulta="INSERT INTO usuarios(nombre, apellido, correo, contrasena) VALUES (?,?,?,?);";
                $this->pdo->prepare($consulta)->execute(array(
                    $u->getNombre(),
                    $u->getApellido(),
                    $u->getCorreo(),
                    $u->getContrasena()
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //GETTERs y SETTERs
        public function getId() {
            return $this->id_usuario;
        }

        public function setId($id_usuario) {
            $this->id_usuario = $id_usuario;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }
        
        public function getCorreo() {
            return $this->correo;
        }

        public function setCorreo($correo) {
            $this->correo = $correo;
        }
        
        public function getContrasena() {
            return $this->contrasena;
        }

        public function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        } 

        public function getError() {
            return $this->error;
        }

        public function setError($error) {
            $this->error = $error;
        } 

        public function getErrorContra() {
            return $this->errContra;
        }

        public function setErrorContra($errContra) {
            $this->errContra = $errContra;
        } 
    }

?>