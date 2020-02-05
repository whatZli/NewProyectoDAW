<?php

//Se incluyen las librerías externas
include_once 'core/libreriaValidacionFormularios.php';

//Incluimos todas las clases del modelo
include_once 'model/DBPDO.php';
include_once 'model/Usuario.php';
include_once 'model/UsuarioPDO.php';
include_once 'model/Articulo.php';
include_once 'model/ArticuloPDO.php';

/* Array $controladores
 * Almacena la ruta a los controladores para facilitar su manejo
 */
$controladores = [
    'home' => 'controller/cHome.php',
    'articles' => 'controller/cArticles.php',
    'contact' => 'controller/cContact.php',
    'about' => 'controller/cAbout.php',
    'administrator' => 'controller/cAdministrator.php',
    'inicioR' => 'controller/cInicioR.php',
    'inicioA' => 'controller/cInicioA.php',
    'newArticle' => 'controller/cNewArticle.php',
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
    'inicioR' => 'view/vInicioR.php',
    'inicioA' => 'view/vInicioA.php',
    'layoutR' => 'view/layoutR.php',
    'layoutA' => 'view/layoutA.php',
    'newArticle' => 'view/vNewArticle.php',
    'layout' => 'view/layout.php',
];



