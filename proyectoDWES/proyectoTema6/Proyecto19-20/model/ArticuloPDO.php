<?php

include_once 'model/Articulo.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor Alex Domínguez
 * @version 1.0   
 */

class ArticuloPDO {
    
    public static function buscarCodArticulos($codArticulo) {
        
        $registros=null;
        
        if($codArticulo===0){
            $consulta = "SELECT * FROM `Articulos`"; //Creacion de la consulta.
            $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.
        }else{
            $consulta = "SELECT * FROM `Articulos` WHERE cod_articulo = ?"; //Creacion de la consulta.
            $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
        }
        
        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);
            $registros[$cont] = $articulo;
            $cont++;
        }
        return $registros;
    }
    
    public static function numArticulos(){
        $num=0;
            $consulta = "SELECT count(*) as 'numero' FROM `Articulos`"; //Creacion de la consulta.
            $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.
            $resFetch=$resConsulta->fetchObject();
            $num=$resFetch->numero;
        return $num;
    }
    
    public static function buscarTodosArticulos($pagina) {
        if($pagina!=0){
            $pagina=$pagina*4-4;
        }
        $registros=null;
        $consulta = "SELECT * FROM `Articulos` LIMIT $pagina,4"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);
            $registros[$cont] = $articulo;
            $cont++;
        }
        return $registros;
    }
    
    public static function buscarTituloArticulos($titulo,$pagina) {
        
        if($pagina!=0){
            $pagina=$pagina*3-3;
        }
        $registros=null;
        $consulta = "SELECT * FROM `Articulos` WHERE `titulo_articulo` LIKE '%$titulo%' LIMIT $pagina,3"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);
            $registros[$cont] = $articulo;
            $cont++;
        }
        return $registros;
    }

    public static function incluirArticulo($titulo, $descripcion, $imagen, $cod_usuario) {
        $consulta = "INSERT INTO `Articulos` (`cod_articulo`, `titulo_articulo`, `descripcion_articulo`, `imagen_articulo`, `fecha_articulo`, `visitas_articulo`, `cod_usuario`) VALUES (NULL, ?, ?, ?, now(), '0', ?);"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo, $descripcion, $imagen, $cod_usuario]); //Ejecutamos la consulta.
    }

    public static function borrarArticulo($codArticulo) {
        $consulta = "DELETE FROM `Articulos` WHERE `Articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

    public static function buscarArticulo($codArticulo) {
        $consulta = "SELECT * FROM `Articulos` WHERE `Articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.

        $resFetch = $resConsulta->fetchObject();
        $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);

        return $articulo;
    }

    public static function modificarArticulo($titulo,$descripcion,$codArticulo) {
        $consulta = "UPDATE `Articulos` SET `titulo_articulo` = ?, `descripcion_articulo` = ? WHERE `cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo,$descripcion,$codArticulo]); //Ejecutamos la consulta.
    }
    
    public static function contadorArticulo($codArticulo) {
        $consulta = "UPDATE `Articulos` SET `visitas_articulo` = `visitas_articulo` + 1 WHERE `Articulos`.`cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

}
