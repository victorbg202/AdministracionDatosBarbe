<?php

    class Usuario {

        //Constructor Usuario
        public function __construct() {
            $this->pdo = BasedeDatos::Conectar();
        }

        //Iniciar sesion
        static public function mdlMostrarUsuarios($tabla, $item, $valor){
            $consulta=BasedeDatos::Conectar()->prepare("SELECT * FROM $tabla where $item = :$item");

            $consulta ->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $consulta ->execute();

            return $consulta ->fetch();

        }
    }

?>