<?php
//Fichero que se carga constantemente y decide lo que mostrar

//Cargamos todos los archivos de configuración tanto de la aplicación como de la BD
include_once 'config/configuracion.php';
include_once 'config/configuracionBD.php';
//Iniciamos y recuperamos las sesiones
session_start();

//Si el usuario ha iniciado sesión pero no ha accedido a ninguna ventana, será mandado a la ventana de inicio
    if(isset($_SESSION["usuarioDAW205POO"]) && !isset($_SESSION["pagina"])){
        $controlador=$controladores["inicio"]; //Se almacena el controlador de inicio en la variable
        require_once $controlador; //Se incluye el controlador
    }
    
    //Si ha accedido a alguna pagina, será mandado a la correspondiente
    if(isset($_SESSION["pagina"])){
        $controlador=$controladores[$_SESSION["pagina"]]; //Se almacena el controlador de la ventana en la variable
        require_once $controlador; //Se incluye el controlador
    }
    //Si no se cumple nada de lo anterior será mandado a la ventana de Login
    else{
        $controlador=$controladores["login"]; //Se almacena el controlador del login en la variable
        require_once $controlador; //Se incluye el controlador
    } 
?>