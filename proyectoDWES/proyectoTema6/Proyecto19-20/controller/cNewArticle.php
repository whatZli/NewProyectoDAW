<?php

if (isset($_POST['btnNewArticle'])) {
    
    $entradaOK = true; //Variable que controla el formularo
    //Comprobación de errores en los campos
    $aErrores["title"] = validacionFormularios::comprobarAlfaNumerico($_POST["title"], 130, 1, 1);
    $aErrores["description"] = validacionFormularios::comprobarAlfaNumerico($_POST["description"], 2000, 1, 1);

    //Recorrer el Array de errores para poner la entradaOK a false en caso de que haya un error
    foreach ($aErrores as $key => $value) {
        if (!is_null($value)) {
            $entradaOK = false;
        }
    }
    
    //Si la entradaOK es correcta
    if ($entradaOK) {

        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_FILES["fileToUpload"]["name"];//Coger el nombre del archivo subido

        ArticuloPDO::incluirArticulo($title, $description, $image, $_SESSION['usuarioDAW2051920']->getCod_usuario());

        //Subir la imagen al servidor------------------------------
        $target_dir = "storage/img_articles/";
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
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo '<div class="correcto">Se ha creado el artículo correctamente</div>';
                //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        
    }else{
        echo '<div class="error">Rellene todos los campos correctamente</div>';
    }
}

$_SESSION['vista'] = $vistas['newArticle']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layoutR']; //se incluye la vista que contiene la $_SESSION['vista'] 
