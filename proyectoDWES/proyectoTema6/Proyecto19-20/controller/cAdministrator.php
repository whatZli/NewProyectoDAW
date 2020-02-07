<?php

require_once 'model/Usuario.php';

if (isset($_POST['logIn'])) {
    $entradaOK = true; //Variable que controla el formularo
    //Comprobación de errores en los campos
    $aErrores["username"] = validacionFormularios::comprobarAlfaNumerico($_POST["username"], 15, 1, 1);
    $aErrores["password"] = validacionFormularios::comprobarAlfaNumerico($_POST["password"], 50, 4, 1);

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
        $codUsuario = $_POST["username"];
        $password = hash("SHA256", $codUsuario . $_POST["password"]);

        // @param Usuario $objetoUsuario Objeto que almacena el usuario después de validarlo
        $objetoUsuario = UsuarioPDO::validarUsuario($codUsuario, $password);

        // Si $objetoUsuario tiene un Usuario
        if (!is_null($objetoUsuario)) {
            //Se crea una sesión con el objeto Usuario completo
            $_SESSION["usuarioDAW2051920"] = $objetoUsuario; //Carga el usuario en la sesión
            header('Location: index.php'); //Se redirige al index
            exit;
        } else { // Si $objetoUsuario no tiene un Usuario
            $_SESSION['vista'] = $vistas['administrator']; //Se carga en la sesión de vistas, la que queremos
            require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
        }
    } else { // Si $objetoUsuario no tiene un Usuario
        $_SESSION['vista'] = $vistas['administrator']; //Se carga en la sesión de vistas, la que queremos
        require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    }
} else {
    $_SESSION['vista'] = $vistas['administrator']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
}


    