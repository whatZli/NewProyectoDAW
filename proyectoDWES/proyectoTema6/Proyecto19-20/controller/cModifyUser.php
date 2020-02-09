<?php

if (isset($_GET['cod'])) {
    if (isset($_POST['btnModifyUser'])) {

        $entradaOK = true; //Variable que controla el formularo
        //
        //Comprobación de errores en los campos
        $aErrores["typeUser"] = validacionFormularios::validarElementoEnLista($_POST["typeUser"], ['admin', 'registrado'], 1);
        $aErrores["name"] = validacionFormularios::comprobarAlfaNumerico($_POST["name"], 30, 1, 1);
        $aErrores["lname"] = validacionFormularios::comprobarAlfaNumerico($_POST["lname"], 60, 1, 1);
        $aErrores["email"] = validacionFormularios::validarEmail($_POST["email"], 50, 5, 1);

        //Recorrer el Array de errores para poner la entradaOK a false en caso de que haya un error
        foreach ($aErrores as $key => $value) {
            if (!is_null($value)) {
                $entradaOK = false;
            }
        }

        //Si la entradaOK es correcta
        if ($entradaOK) {

            $codUser = $_GET["cod"];
            $typeUser = $_POST["typeUser"];
            $name = $_POST["name"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];

            UsuarioPDO::modificar1Usuario($codUser, $typeUser, $name, $lname, $email);


            echo '<div class="correcto">Se ha modificado el usuario correctamente</div>';
            //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo '<div class="error">Rellene todos los campos correctamente</div>';
        }
    }

    $aUsuarios = UsuarioPDO::buscarUsuario($_GET['cod']);
//var_dump($aArticulos);

    $aUsuario[0] = $aUsuarios->getCod_usuario();
    $aUsuario[1] = $aUsuarios->getTipo_usuario();
    $aUsuario[2] = $aUsuarios->getNom_usuario();
    $aUsuario[3] = $aUsuarios->getApell_usuario();
    $aUsuario[4] = $aUsuarios->getEmail_usuario();
    $aUsuario[6] = $aUsuarios->getImg_usuario();

    $_SESSION['vista'] = $vistas['modifyUser']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layoutA']; //se incluye la vista que contiene la $_SESSION['vista']
    
} else {
    header('Locate: index.php');
}