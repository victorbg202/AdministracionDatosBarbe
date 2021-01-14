<?php

    class Carta {
        
        //Variables Carta
        private $nombreProd;
        private $precioProd;

        //Constructor Carta
        public function __construct() {
            $this->pdo = BasedeDatos::Conectar();
        }

        //Insertar usuario
        public function compCarta(Carta $c) {
            try {
                
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Listar productos del carrito
        public function ListarCarrito($nombre) {
            try {
                $nombreTabla = "carrito".$nombre;
                $consulta=$this->pdo->prepare("SELECT * FROM $nombreTabla");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Eliminar producto del carrito
        //public function EliminarProductoCarrito($nombre, $nombreProd) {
        //    try {
        //        $nombreTabla = "carrito".$nombre;
        //        $consulta="DELETE FROM $nombreTabla WHERE nombreProd = '$nombreProd'";
        //        $this->pdo->prepare($consulta)->execute();
        //    } catch (Exception $e) {
        //        die($e->getMessage());
        //    }
        //}

        //Añadir producto al carrito
        public function AñadirProd($nombre, Carta $p) {
            try {
                $nombreTabla = "carrito".$nombre;
                $consulta=$this->pdo->prepare("INSERT INTO $nombreTabla(nombreProd, cantidad, precio) VALUES (?, 1, ?);");
                $this->pdo->prepare($consulta)->execute(array(
                    $p->getNombreProd(),
                    $p->getPrecioProd()
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
        
        public function getNombreProd() {
            return $this->nombreProd;
        }

        public function setNombreProd($nombreProd) {
            $this->nombreProd = $nombreProd;
        } 
        
        public function getPrecioProd() {
            return $this->precioProd;
        }

        public function setPrecioProd($precioProd) {
            $this->precioProd = $precioProd;
        } 
    }

?>