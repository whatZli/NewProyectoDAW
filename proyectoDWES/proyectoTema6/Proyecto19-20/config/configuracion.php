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
    'article' => 'controller/cArticle.php',
    'contact' => 'controller/cContact.php',
    'about' => 'controller/cAbout.php',
    'rest' => 'controller/cRest.php',
    'ownApi' => 'controller/cOwnApi.php',
    'administrator' => 'controller/cAdministrator.php',
    
    'inicioR' => 'controller/cInicioR.php',
    'newArticle' => 'controller/cNewArticle.php',
    'modifyArticle' => 'controller/cModifyArticle.php',
    'profile' => 'controller/cProfile.php',
    
    'inicioA' => 'controller/cInicioA.php',
    'newUser' => 'controller/cNewUser.php',
    'modifyUser' => 'controller/cModifyUser.php',
];

/* Array $vistas
 * Almacena la ruta a las vistas para facilitar su manejo
 * @param Array $vistas['login'] Controlador del login
 */
$vistas = [
    'home' => 'view/vHome.php',
    'articles' => 'view/vArticles.php',
    'article' => 'view/vArticle.php',
    'contact' => 'view/vContact.php',
    'about' => 'view/vAbout.php',
    'rest' => 'view/vRest.php',
    'ownApi' => 'view/vOwnApi.php',
    'administrator' => 'view/vAdministrator.php',
    
    'inicioR' => 'view/vInicioR.php',
    'newArticle' => 'view/vNewArticle.php',
    'modifyArticle' => 'view/vModifyArticle.php',
    'profile' => 'view/vProfile.php',
    
    'inicioA' => 'view/vInicioA.php',
    'newUser' => 'view/vNewUser.php',
    'modifyUser' => 'view/vModifyUser.php',
    
    'layout' => 'view/layout.php',//Plantilla para los usuarios no logueados(invitados)
    'layoutR' => 'view/layoutR.php',//Plantilla para los usuarios registrados
    'layoutA' => 'view/layoutA.php',//Plantilla para los usuarios administradores
];



