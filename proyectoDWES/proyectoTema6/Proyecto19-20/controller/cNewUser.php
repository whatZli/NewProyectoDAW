<?php

if (isset($_POST['btnNewUser'])) {
    
    $entradaOK = true; //Variable que controla el formularo
    //Comprobación de errores en los campos
    $aErrores["codUser"] = validacionFormularios::comprobarAlfaNumerico($_POST["codUser"], 15, 1, 1);
    $aErrores["typeUser"] = validacionFormularios::validarElementoEnLista($_POST["typeUser"], ['admin','registrado'],1);
    $aErrores["name"] = validacionFormularios::comprobarAlfaNumerico($_POST["name"], 30, 1, 1);
    $aErrores["lname"] = validacionFormularios::comprobarAlfaNumerico($_POST["lname"], 60, 1, 1);
    $aErrores["email"] = validacionFormularios::validarEmail($_POST["email"], 50, 5, 1);
    $aErrores["password"] = validacionFormularios::comprobarAlfaNumerico($_POST["password"], 15, 1, 1);

    //Recorrer el Array de errores para poner la entradaOK a false en caso de que haya un error
    foreach ($aErrores as $key => $value) {
        if (!is_null($value)) {
            $entradaOK = false;
        }
    }
    
    //Si la entradaOK es correcta
    if ($entradaOK) {

        $codUser = $_POST["codUser"];
        $typeUser = $_POST["typeUser"];
        $name = $_POST["name"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = hash("SHA256", $codUser . $_POST["password"]);
        $image = $_FILES["fileToUpload"]["name"];//Coger el nombre del archivo subido

        UsuarioPDO::incluirUsuario($codUser, $typeUser, $name, $lname, $email, $password, $image);

        //Subir la imagen al servidor------------------------------
        $target_dir = "storage/img_users/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo '<div class="error">File is not an image.</div>';
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {            
            echo '<div class="warning">Sorry, file already exists.</div>';
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo '<div class="warning">Sorry, your file is too large.</div>';
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo '<div class="warning">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>';
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo '<div class="warning">Sorry, your file was not uploaded.</div>';
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo '<div class="correcto">Se ha creado el usuario correctamente</div>';
                //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo '<div class="warning">Sorry, there was an error uploading your file.</div>';
            }
        }
        
        
    }else{
        echo '<div class="error">Rellene todos los campos correctamente</div>';
    }
}

$_SESSION['vista'] = $vistas['newUser']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layoutA']; //se incluye la vista que contiene la $_SESSION['vista'] 
