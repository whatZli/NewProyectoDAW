<?php

if (isset($_GET['cod'])) {
    $aArticulos = ArticuloPDO::buscarArticulo($_GET['cod']);
    ArticuloPDO::contadorArticulo($_GET['cod']);//Actualizar contador de visitas
//var_dump($aArticulos);

        $aArticulo[0] = $aArticulos->getCod_articulo();
        $aArticulo[1] = $aArticulos->getTitulo_articulo();
        $aArticulo[2] = $aArticulos->getDescripcion_articulo();
        $aArticulo[3] = $aArticulos->getImagen_articulo();
        $aArticulo[4] = $aArticulos->getFecha_articulo();
        $aArticulo[5] = $aArticulos->getVisitas_articulo();
        $aArticulo[6] = $aArticulos->getCod_usuario();

    $_SESSION['vista'] = $vistas['article']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
}else{
    $_SESSION['vista'] = $vistas['articles']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    header('Locate: index.php');
}



