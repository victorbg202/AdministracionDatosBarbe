<?php
    //Recojemos el la url i le asignamos el valor
    //var_dump($_GET['controlador']);
    require_once "models/basededatos.php";
    
    //Comprovar si se ha asignado valor a controlador
    if (!isset($_GET['c'])) {
        //Si no lo encuentra llama a controlador inicio
        require_once "controllers/principal.controlador.php";
        $controlador = new PrincipalControlador();
        call_user_func(array($controlador,"Inicio"));
    }else {
        //Si lo encuentra lo requerimos
        $controlador = $_GET['c'];
        require_once "controllers/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador;
        //Recogemos el metodo
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador, $accion));
    }

?>