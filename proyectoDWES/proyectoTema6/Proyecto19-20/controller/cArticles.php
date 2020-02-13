<?php

if (isset($_POST['search'])) {
    if (!isset($_POST['title'])) {
        $_POST['title'] = "*";
    }
    $_SESSION['articuloActual'] = $_POST['title'];
}

if (isset($_SESSION['articuloActual'])) {

    $numeroArticulos = ArticuloPDO::numArticulos();
    echo $numeroArticulos;
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }

    $aArticulos = ArticuloPDO::buscarTituloArticulos($_SESSION['articuloActual']);
//var_dump($aArticulos);

    for ($i = 0; isset($aArticulos[$i]); $i++) {
        $aArticulo[$i][0] = $aArticulos[$i]->getCod_articulo();
        $aArticulo[$i][1] = $aArticulos[$i]->getTitulo_articulo();
        $aArticulo[$i][2] = $aArticulos[$i]->getDescripcion_articulo();
        $aArticulo[$i][3] = $aArticulos[$i]->getImagen_articulo();
        $aArticulo[$i][4] = $aArticulos[$i]->getFecha_articulo();
        $aArticulo[$i][5] = $aArticulos[$i]->getVisitas_articulo();
        $aArticulo[$i][6] = $aArticulos[$i]->getCod_usuario();
    }

    $numeroArticulos = ArticuloPDO::numArticulos();
    echo $numeroArticulos;
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }
} else {
    $aArticulos = ArticuloPDO::buscarTodosArticulos();
//var_dump($aArticulos);

    for ($i = 0; isset($aArticulos[$i]); $i++) {
        $aArticulo[$i][0] = $aArticulos[$i]->getCod_articulo();
        $aArticulo[$i][1] = $aArticulos[$i]->getTitulo_articulo();
        $aArticulo[$i][2] = $aArticulos[$i]->getDescripcion_articulo();
        $aArticulo[$i][3] = $aArticulos[$i]->getImagen_articulo();
        $aArticulo[$i][4] = $aArticulos[$i]->getFecha_articulo();
        $aArticulo[$i][5] = $aArticulos[$i]->getVisitas_articulo();
        $aArticulo[$i][6] = $aArticulos[$i]->getCod_usuario();
    }

    $numeroArticulos = ArticuloPDO::numArticulos();
    echo $numeroArticulos;
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }
}



$_SESSION['vista'] = $vistas['articles']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    