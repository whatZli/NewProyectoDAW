<?php

// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"]="inicio"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
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

$_SESSION['vista'] = $vistas['perfil']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    