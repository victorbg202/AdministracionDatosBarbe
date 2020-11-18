<?php

    class Usuario {
        //Para guardar la conexion con la BBDD
        private $pdo;

        //Variables Usuario
        private $id_usuario;
        private $nombre;
        private $apellido;
        private $correo;
        private $contrasena;

        //Constructor Usuario
        public function __construct() {
            $this->pdo = BasedeDatos::Conectar();
        }

        //Iniciar sesion
        public function IniciarSesio() {
            session_start();
            
        }

        //Listar los usuarios
        public function Listar() {
            try {
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        //Utilizada para obtener los datos de un usuario en concreto
        public function Obtener($id) {
            try {
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios WHERE id_usuario=?;");
                $consulta->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);
                $u = new Usuario;
                $u->setId($r->id_usuario);
                $u->setNombre($r->nombre);
                $u->setApellido($r->apellido);
                $u->setCorreo($r->correo);
                $u->setContrasena($r->contrasena);
                return $u;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Insertar usuario
        public function Insertar(Usuario $u) {
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

        //
        public function Actualizar(Usuario $u) {
            try {
                $consulta="UPDATE `usuarios` SET 'nombre'=?, 'apellido'=?, 'correo'=?, 'contrasena'=? WHERE id_usuario= ? ;";
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
        
        //Eliminar usuario de la BBDD
        public function Eliminar($id) {
            try {
                $consulta="DELETE FROM usuarios WHERE id_usuario = ?;";
                $this->pdo->prepare($consulta)->execute(array($id));
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
    }

?>