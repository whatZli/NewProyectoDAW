<?php

// Si se pulsa el botón para volver
if (isset($_POST['volver'])) {

    // Se reenvía al index
    header('Location: ../../../index.php?pag=dwes');
}

//Si se pulsa el botón de iniciar sesion
if (isset($_POST['iniciarSesion'])) {
    $entradaOK = true; //Variable que controla el formularo
    //Comprobación de errores en los campos
    $aErrores["codUsuario"] = validacionFormularios::comprobarAlfaNumerico($_POST["loginUsuario"], 50, 1, 1);
    $aErrores["password"] = validacionFormularios::comprobarAlfaNumerico($_POST["loginPassword"], 50, 4, 1);

    //Recorrer el Array de errores para poner la entradaOK a false en caso de que haya un error
    foreach ($aErrores as $key => $value) {
        if (!is_null($value)) {
            $entradaOK = false;
        }
    }

    //Si la entradaOK es correcta
    if ($entradaOK) {
        /* @param variable $codUsuario Variable que almacena el usuario introducido
         * @param variable $password Variable que almacena el password introducido concatenándelo con el $codUsuario y haciendo la función hash
         */
        $codUsuario = $_POST["loginUsuario"];
        $password = hash("SHA256", $codUsuario . $_POST["loginPassword"]);

        // @param Usuario $objetoUsuario Objeto que almacena el usuario después de validarlo
        $objetoUsuario = Usuario::validarUsuario($codUsuario, $password);

        // Si $objetoUsuario tiene un Usuario
        if (!is_null($objetoUsuario)) {
            //Se crea una sesión con el objeto Usuario completo
            $_SESSION["usuarioDAW205POO"] = $objetoUsuario;
            //Redirige al index
            header("Location: index.php");
        } else { // Si $objetoUsuario no tiene un Usuario
            $_SESSION['vista'] = $vistas['login']; //Se carga en la sesión de vistas, la que queremos
            require_once $vistas["layout"];
        }
    } else {//Si la entradaOK no es correcta
        $_SESSION['vista'] = $vistas['login']; //Se carga en la sesión de vistas, la que queremos
        require_once $vistas["layout"];
    }
} else { //Si no se ha pulsado el botón de iniciar sesion
    $_SESSION['vista'] = $vistas['login']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas["layout"];
}