<?php

    class Producto {
        //
        private $pdo;

        //
        private $id_producto;
        private $nombre;
        private $descripcion;
        private $precio;

        //
        public function __construct() {
            $this->pdo = BasedeDatos::Conectar();
        }

        //
        public function Cantidad() {
            try {
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios;");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //
        public function Listar() {
            try {
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        //
        public function Obtener($id) {
            try {
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios WHERE id_producto=?;");
                $consulta->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);
                $p = new Producto;
                $p->setId($r->id_producto);
                $p->setNombre($r->nombre);
                $p->setDesc($r->descripcion);
                $p->setPrecio($r->precio);
                return $p;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //
        public function Insertar(Producto $p) {
            try {
                $consulta="INSERT INTO usuarios(nombre, descripcion, precio) VALUES (?,?,?);";
                $this->pdo->prepare($consulta)->execute(array(
                    $p->getNombre(),
                    $p->getDesc(),
                    $p->getPrecio()
                ));
               echo  $p->getNombre();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //
        public function Actualizar(Producto $p) {
            try {
                $consulta="UPDATE `usuarios` SET `nombre` = ?, `descripcion`= ?, `precio` = ? WHERE id_producto= ? ;";
                $this->pdo->prepare($consulta)->execute(array(
                    
                    $p->getNombre(),
                    $p->getDesc(),
                    $p->getPrecio(),
                    $p->getId()
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        //
        public function Eliminar($id) {
            try {
                $consulta="DELETE FROM usuarios WHERE id_producto = ?;";
                $this->pdo->prepare($consulta)->execute(array($id));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //
        public function getId() {
            return $this->id_producto;
        }

        public function setId($id_producto) {
            $this->id_producto = $id_producto;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        
        public function getDesc() {
            return $this->descripcion;
        }

        public function setDesc($descripcion) {
            $this->descripcion = $descripcion;
        }

        public function getPrecio() {
            return $this->precio;
        }

        public function setPrecio($precio) {
            $this->precio = $precio;
        }
    }

?>