<?php

if (isset($_GET['close'])) {
    session_destroy();
    header('Location: index.php');
}

if (isset($_GET['drop'])) {
        echo 'borrar';
        ArticuloPDO::borrarArticulo($_GET['drop']);
        header('Location: index.php');
} else {
    $numeroArticulos = ArticuloPDO::numArticulos();
    echo $numeroArticulos;
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }
    
        $aArticulos = ArticuloPDO::buscarTodosArticulos($pagina);
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


        $_SESSION['vista'] = $vistas['inicioR']; //Se carga en la sesión de vistas, la que queremos
        require_once $vistas['layoutR']; //se incluye la vista que contiene la $_SESSION['vista']
    }