<?php

    class Carta {
        
        //Variables Carta
        private $idProd;
        private $nombreProd;
        private $cantProd;
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

        //GETTERs y SETTERs
        public function getId() {
            return $this->id_usuario;
        }

        public function setId($id_usuario) {
            $this->id_usuario = $id_usuario;
        } 
    }

?>