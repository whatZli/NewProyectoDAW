<?php
//Fichero que se carga constantemente y decide lo que mostrar

//Cargamos todos los archivos de configuración tanto de la aplicación como de la BD
include_once 'config/configuracion.php';
include_once 'config/configuracionBD.php';
//Iniciamos y recuperamos las sesiones

session_start();

//Si el usuario ha iniciado sesión pero no ha accedido a ninguna ventana, será mandado a la ventana de inicio
    if(isset($_SESSION["proyecto1920"]) && !isset($_SESSION["pagina"])){
        $controlador=$controladores["inicio"]; //Se almacena el controlador de inicio en la variable
        require_once $controlador; //Se incluye el controlador
    }
    if(isset($_GET["pag"])){
        $controlador=$controladores[$_GET["pag"]]; //Se almacena el controlador de la ventana en la variable
        require_once $controlador; //Se incluye el controlador
    }else{
        $controlador=$controladores["home"]; //Se almacena el controlador del login en la variable
        require_once $controlador; //Se incluye el controlador
    }
    
?>