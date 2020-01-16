<?php
//Fichero que se carga constantemente y decide lo que mostrar

//Cargamos todos los archivos de configuración tanto de la aplicación como de la BD
include_once 'config/configuracion.php';
include_once 'config/configuracionBD.php';

//Iniciamos y recuperamos las sesiones
session_start();

// $_SESSION['vista'] almacena la vista que queramos mostrar. Por defecto la vista principal es login
$_SESSION['vista'] = $vistas['login'];

//Si existe la sesion del usuario se carga el inicio
if (isset($_SESSION["usuarioDAW205POO"])) {
    include_once $controladores['inicio'];
} else {// Si no existe la sesion del usuario se le envía al login
    include_once $controladores["login"];
}
?>