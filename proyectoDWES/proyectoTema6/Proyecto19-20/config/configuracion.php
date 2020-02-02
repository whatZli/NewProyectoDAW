<?php

//Se incluyen las librerías externas
include_once 'core/libreriaValidacionFormularios.php';

//Incluimos todas las clases del modelo
include_once 'model/DBPDO.php';

/* Array $controladores
 * Almacena la ruta a los controladores para facilitar su manejo
 * @param Array $controladores['login'] Controlador del login
 * @param Array $controladores['inicio'] Controlador del inicio
 */
$controladores = [
    'home' => 'controller/cHome.php',
    'articles' => 'controller/cArticles.php',
    'contact' => 'controller/CContact.php',
    'about' => 'controller/cAbout.php',
    'error' => 'controller/cError.php',
];

/* Array $vistas
 * Almacena la ruta a las vistas para facilitar su manejo
 * @param Array $vistas['login'] Controlador del login
 * @param Array $vistas['inicio'] Controlador del inicio
 * @param Array $vistas['layout'] Controlador del layout
 */
$vistas = [
    'home' => 'view/vHome.php',
    'articles' => 'view/vArticles.php',
    'contact' => 'view/vContact.php',
    'about' => 'view/vAbout.php',
    'layout' => 'view/layout.php',
];



