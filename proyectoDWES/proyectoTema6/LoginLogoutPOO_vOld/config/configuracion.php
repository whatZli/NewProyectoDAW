<?php

//Se incluyen las librerías externas
include_once 'core/libreriaValidacionFormularios.php';

//Incluimos todas las clases del modelo
include_once 'model/Usuario.php';
include_once 'model/UsuarioPDO.php';
include_once 'model/DBPDO.php';

/* Array $controladores
 * Almacena la ruta a los controladores para facilitar su manejo
 * @param Array $controladores['login'] Controlador del login
 * @param Array $controladores['inicio'] Controlador del inicio
 */
$controladores = [
    'main' => 'controller/cMain.php',
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'registro' => 'controller/cRegistro.php',
    'perfil' => 'controller/cPerfil.php',
    'error' => 'controller/cError.php',
];

/* Array $vistas
 * Almacena la ruta a las vistas para facilitar su manejo
 * @param Array $vistas['login'] Controlador del login
 * @param Array $vistas['inicio'] Controlador del inicio
 * @param Array $vistas['layout'] Controlador del layout
 */
$vistas = [
    'main' => 'view/vMain.php',
    'login' => 'view/vLogin.php',
    'inicio' => 'view/vInicio.php',
    'registro' => 'view/vRegistro.php',
    'perfil' => 'view/vPerfil.php',
    'error' => 'view/vError.php',
    'layout' => 'view/layout.php',
];



