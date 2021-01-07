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
                $consulta="INSERT INTO usuarios(nombre, apellido, correo, contrasena) VALUES (?,?,?,?);";
                $this->pdo->prepare($consulta)->execute(array(
                    
                    
                    
                    
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
    }

?>