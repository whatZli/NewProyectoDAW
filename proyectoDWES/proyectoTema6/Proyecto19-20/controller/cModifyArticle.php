<?php

if (isset($_GET['cod'])) {
    if (isset($_POST['btnModifyArticle'])) {

        $entradaOK = true; //Variable que controla el formularo
        //
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

            ArticuloPDO::modificarArticulo($title, $description, $_GET['cod']);

            echo '<div class="correcto">Se ha modificado el artículo correctamente</div>';
        } else {
            echo '<div class="error">Rellene todos los campos correctamente</div>';
        }
    }

    $aArticulos = ArticuloPDO::buscarArticulo($_GET['cod']);
//var_dump($aArticulos);

    $aArticulo[0] = $aArticulos->getCod_articulo();
    $aArticulo[1] = $aArticulos->getTitulo_articulo();
    $aArticulo[2] = $aArticulos->getDescripcion_articulo();
    $aArticulo[3] = $aArticulos->getImagen_articulo();
    $aArticulo[4] = $aArticulos->getFecha_articulo();
    $aArticulo[5] = $aArticulos->getVisitas_articulo();
    $aArticulo[6] = $aArticulos->getCod_usuario();

    $_SESSION['vista'] = $vistas['modifyArticle']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layoutR']; //se incluye la vista que contiene la $_SESSION['vista']
} else {
    header('Locate: index.php');
}