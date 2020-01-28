<?php

//Se incluyen las librerías externas
include_once 'core/libreriaValidacionFormularios.php';

//Incluimos todas las clases del modelo
include_once 'model/Usuario.php';
include_once 'model/UsuarioPDO.php';
include_once 'model/Departamento.php';
include_once 'model/DepartamentoPDO.php';
include_once 'model/DBPDO.php';

/* Array $controladores
 * Almacena la ruta a los controladores para facilitar su manejo
 * @param Array $controladores['login'] Controlador del login
 * @param Array $controladores['inicio'] Controlador del inicio
 */
$controladores = [
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'departamentos' => 'controller/cDepartamentos.php',
    'deptVisualizar' => 'controller/cDeptVisualizar.php',
    'deptModificar' => 'controller/cDeptModificar.php',
    'usuarios' => 'controller/cUsuarios.php',
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
    'login' => 'view/vLogin.php',
    'inicio' => 'view/vInicio.php',
    'departamentos' => 'view/vDepartamentos.php',
    'deptVisualizar' => 'view/vDeptVisualizar.php',
    'deptModificar' => 'view/vDeptModificar.php',
    'usuarios' => 'view/vusuarios.php',
    'registro' => 'view/vRegistro.php',
    'perfil' => 'view/vPerfil.php',
    'error' => 'view/vError.php',
    'layout' => 'view/layout.php',
];



