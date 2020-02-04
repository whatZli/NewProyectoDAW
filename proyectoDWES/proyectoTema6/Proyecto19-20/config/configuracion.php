<?php

//Se incluyen las librerías externas
include_once 'core/libreriaValidacionFormularios.php';

//Incluimos todas las clases del modelo
include_once 'model/DBPDO.php';

/* Array $controladores
 * Almacena la ruta a los controladores para facilitar su manejo
 */
$controladores = [
    'home' => 'controller/cHome.php',
    'articles' => 'controller/cArticles.php',
    'contact' => 'controller/cContact.php',
    'about' => 'controller/cAbout.php',
    'administrator' => 'controller/cAdministrator.php',
    'error' => 'controller/cError.php',
];

/* Array $vistas
 * Almacena la ruta a las vistas para facilitar su manejo
 * @param Array $vistas['login'] Controlador del login
 */
$vistas = [
    'home' => 'view/vHome.php',
    'articles' => 'view/vArticles.php',
    'contact' => 'view/vContact.php',
    'about' => 'view/vAbout.php',
    'administrator' => 'view/vAdministrator.php',
    'layout' => 'view/layout.php',
];



