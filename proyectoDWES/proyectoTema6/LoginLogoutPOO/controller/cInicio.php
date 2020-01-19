<?php

// Si se pulsa el botón para salir
if (isset($_POST['salir'])) {
    // Se destruye la sesión
    unset($_SESSION['usuarioDAW205POO']);
    // Se reenvía al index
    header("Location: index.php");
}

//@param variable $usuario Usuario Variable que va a contener un objeto Usuario
$usuario = $_SESSION['usuarioDAW205POO'];

//@param variable $nombre String Variable que almacenará el código del usuario
$nombre = $usuario->getCodUsuario();

$aDatosUsuarioVista=array(
    "codigo" => $usuario->getCodUsuario(),
    "descUsuario" => $usuario->getDescUsuario(),
    "password" => $usuario->getPassword(),
    "perfil" => $usuario->getPerfil(),
    "ultimaConexion" => $usuario->getUltimaConexion(),
    "contadorAccesos" => $usuario->getContadorAccesos()
);
var_dump($aDatosUsuarioVista);

$_SESSION['vista'] = $vistas['inicio']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    