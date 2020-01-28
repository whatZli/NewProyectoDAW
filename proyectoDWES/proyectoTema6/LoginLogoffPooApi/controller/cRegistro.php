<?php

require_once 'model/Usuario.php';

// Si se pulsa el botón para volver
if (isset($_POST['volver'])) {

    session_destroy();
    // Se reenvía al index
    header('Location: ../../../index.php?pag=dwes');
}

if (isset($_POST['iniciarSesion'])) {
    $_SESSION["pagina"] = "login"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    require_once $vistas["layout"]; //Se carga la vista correspondiente
    exit;
}


//Si se pulsa el botón de iniciar sesion
if (isset($_POST['registrarse'])) {
    //Declaración de variables
    $entradaOK = true;

//Declaración del array de errores

    $aErrores['codUser'] = null;
    $aErrores['descUser'] = null;
    $aErrores['password'] = null;
    $aErrores['password2'] = null;

//Declaración del array de datos del formulario

    $aFormulario['codUser'] = null;
    $aFormulario['descUser'] = null;
    $aFormulario['password'] = null;
    $aFormulario['password2'] = null;

    $aErrores['codUser'] = validacionFormularios::comprobarAlfabetico($_POST['codUser'], 8, 1, 1);
    $aErrores['descUser'] = validacionFormularios::comprobarAlfabetico($_POST['descUser'], 250, 1, 1);
    $aErrores['password'] = validacionFormularios::comprobarAlfaNumerico($_POST['password'], 8, 1, 1);
    $aErrores['password2'] = validacionFormularios::comprobarAlfaNumerico($_POST['password2'], 8, 1, 1);

    foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
        if ($campo != null) {
            $entradaOK = false; //cambia la condiccion de la variable
        }
    }

    if ($entradaOK) { //si el valor es true procesamos los datos que hemos recogido   
        $codigo = strtolower($_POST['codUser']); //en el array del formulario guardamos los datos
        $descripcion = $_POST['descUser']; //en el array del formulario guardamos los datos
        $password = hash('SHA256',$codigo.$_POST['password']); //en el array del formulario guardamos los datos
        
// @param Usuario $objetoUsuario Objeto que almacena el usuario después de validarlo
        $objetoUsuario = UsuarioPDO::altaUsuario($codigo, $password, $descripcion);

        // Si $objetoUsuario tiene un Usuario
        if (!is_null($objetoUsuario)) {
            //Se crea una sesión con el objeto Usuario completo
            $_SESSION["usuarioDAW205POO"] = $objetoUsuario; //Carga el usuario en la sesión
            $_SESSION["pagina"] = "inicio"; //Se guarda en la variable de sesión la ventana de inicio
            header('Location: index.php'); //Se redirige al index
            exit;
        } else { // Si $objetoUsuario no tiene un Usuario
            $_SESSION['vista'] = $vistas['registro']; //Se carga en la sesión de vistas, la que queremos
            require_once $vistas["layout"];
        }
    } else {//Si la entradaOK no es correcta
        $_SESSION['vista'] = $vistas['registro']; //Se carga en la sesión de vistas, la que queremos
        require_once $vistas["layout"];
    }
} else { //Si no se ha pulsado el botón de iniciar sesion
    $_SESSION['vista'] = $vistas['registro']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas["layout"];
}