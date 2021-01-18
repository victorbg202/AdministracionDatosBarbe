<?php

    class Carta {
        
        //Variables Carta
        private $id;
        private $nombreProd;
        private $precioProd;
        private $cantidad;

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


        //GETTERs y SETTERs
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
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

        public function getCantidad() {
            return $this->cantidad;
        }

        public function setCantidad($cantidad) {
            $this->cantidad = $cantidad;
        } 
    }

?>