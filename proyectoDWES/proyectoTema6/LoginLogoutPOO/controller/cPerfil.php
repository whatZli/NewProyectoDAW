<?php

// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"] = "inicio"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}
if (isset($_POST['guardar'])) {

    //Declaración de variables
    $entradaOK = true;

    //Declaración del array de errores
    $aErrores['descUser'] = null;

    //Declaracion del array de formulario
    $aFormulario['descUser'] = null;
    
    //Validación del campo descripcion
    $aErrores['descUser'] = validacionFormularios::comprobarAlfabetico($_POST['descUser'], 250, 1, 1);
    
    foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
        if ($campo != null) {
            $entradaOK = false; //cambia la condiccion de la variable
        }
    }
    
    if ($entradaOK) { //si el valor es true procesamos los datos que hemos recogido   
        $descripcion = $_POST['descUser']; //en el array del formulario guardamos los datos
        
    }
    
    $_SESSION["pagina"] = "perfil"; //Se guarda en la variable de sesión la ventana de registro
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
    