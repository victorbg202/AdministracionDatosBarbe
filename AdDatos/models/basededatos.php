<?php

    class BasedeDatos {
        //Datos BBDD
        const servidor = "localhost";
        const usuariobd = "root";
        const password = "";
        const nombrebd = "admin-datos";

        //Conexion con la BBDD
        public static function Conectar() {
            try {
                $conexion = new PDO("mysql:host=".self::servidor.";dbname="
                .self::nombrebd.";charset-utf8",self::usuariobd,self::password);

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;
            } catch (PDOException $e) {
                return "Fallo conexion BD ".$e->getMessage();
            }
        }
    }

?>