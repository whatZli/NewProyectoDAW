<?php
include_once 'core/libreriaValidacionFormularios.php';

include_once 'model/Usuario.php';
include_once 'model/UsuarioPDO.php';
include_once 'model/DBPDO.php';

$controladores=[
    'login'=>'controller/cLogin.php',
    'inicio'=>'controller/cInicio.php',
];

$vistas=[
    'login'=>'view/vLogin.php',
    'inicio'=>'view/vInicio.php',
    'layout'=>'view/layout.php',
];
