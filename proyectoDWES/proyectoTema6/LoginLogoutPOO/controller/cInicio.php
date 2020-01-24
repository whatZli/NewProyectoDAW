<?php

// Si se pulsa el botón para salir
if (isset($_POST['salir'])) {
    unset($_SESSION['usuarioDAW205POO']);// Se destruye la sesión
    session_destroy(); //Se destruye la sesión
    header('Location: index.php'); //Se le redirige al index
    exit;
}

if (isset($_POST['perfil'])) {
    $_SESSION["pagina"] = "perfil"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    require_once $vistas["layout"]; //Se carga la vista correspondiente
    exit;
}

//@param variable $usuario Usuario Variable que va a contener un objeto Usuario
$usuario = $_SESSION['usuarioDAW205POO'];
 
$aDatosUsuarioVista = array(
    "codigo" => $usuario->getCodUsuario(),
    "password" => $usuario->getPassword(),
    "descUsuario" => $usuario->getDescUsuario(),
    "contadorAccesos" => $usuario->getNumAccesos(),
    "ultimaConexion" => $usuario->getFechaHoraUltimaConexion(),
    "perfil" => $usuario->getPerfil()
);

$aDepartamentos=DepartamentoPDO::buscarTodosDepartamentos();


$_SESSION['vista'] = $vistas['inicio']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    