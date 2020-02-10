<?php

$articulo=0;
if(isset($_GET['codArticle'])){
    $articulo=$_GET['codArticle'];
    if($_GET['codArticle']!=null){}else{
        $articulo=0;
    }
}

$busquedaArticulos=ArticuloPDO::buscarCodArticulos($articulo*1);//Hay que convertir el string de articulos en un entero
if($busquedaArticulos!=null){
//    var_dump(($busquedaArticulos));
    
    for ($i = 0; isset($busquedaArticulos[$i]); $i++) {
        $aArticulo[$i][0] = $busquedaArticulos[$i]->getCod_articulo();
        $aArticulo[$i][1] = $busquedaArticulos[$i]->getTitulo_articulo();
        $aArticulo[$i][2] = $busquedaArticulos[$i]->getDescripcion_articulo();
        $aArticulo[$i][3] = $busquedaArticulos[$i]->getImagen_articulo();
        $aArticulo[$i][4] = $busquedaArticulos[$i]->getFecha_articulo();
        $aArticulo[$i][5] = $busquedaArticulos[$i]->getVisitas_articulo();
        $aArticulo[$i][6] = $busquedaArticulos[$i]->getCod_usuario();
        
        
        echo json_encode(array("articulo"=>array("codigo"=>$aArticulo[$i][0],"titulo"=>$aArticulo[$i][1],"descripcion"=>$aArticulo[$i][2],"imagen"=>"storage/img_articles/".$aArticulo[$i][3],"fecha_creacion"=>$aArticulo[$i][4],"visitas"=>$aArticulo[$i][5],"usuario_creador"=>$aArticulo[$i][6])), JSON_PRETTY_PRINT);
    }
    
//    echo(json_encode($aArticulo, JSON_PRETTY_PRINT));
}else{
    echo 'No se ha encontrado artículos con ese código';
}

