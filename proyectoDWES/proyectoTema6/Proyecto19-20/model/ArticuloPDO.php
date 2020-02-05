<?php

include_once 'model/Articulo.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor Alex Domínguez
 * @version 1.0   
 */

class ArticuloPDO {

    public static function buscarTodosArticulos() {
        $consulta = "SELECT * FROM `Articulos`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);
            $registros[$cont] = $articulo;
            $cont++;
        }
        return $registros;
    }
    
    public static function buscarTituloArticulos($titulo) {
        $registros=null;
        $consulta = "SELECT * FROM `articulos` WHERE `titulo_articulo` LIKE '%$titulo%'"; //Creacion de la consulta.
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
        $consulta = "INSERT INTO `articulos` (`cod_articulo`, `titulo_articulo`, `descripcion_articulo`, `imagen_articulo`, `fecha_articulo`, `visitas_articulo`, `cod_usuario`) VALUES (NULL, ?, ?, ?, now(), '0', ?);"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo, $descripcion, $imagen, $cod_usuario]); //Ejecutamos la consulta.
    }

    public static function borrarArticulo($codArticulo) {
        $consulta = "DELETE FROM `articulos` WHERE `articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

    public static function buscarArticulo($codArticulo) {
        $consulta = "SELECT * FROM `Articulos` WHERE `articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.

        $resFetch = $resConsulta->fetchObject();
        $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);

        return $articulo;
    }

    public static function modificarArticulo($titulo,$descripcion,$codArticulo) {
        $consulta = "UPDATE `articulos` SET `titulo_articulo` = ?, `descripcion_articulo` = ? WHERE `articulos`.`cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo,$descripcion,$codArticulo]); //Ejecutamos la consulta.
    }
    
    public static function contadorArticulo($codArticulo) {
        $consulta = "UPDATE `articulos` SET `visitas_articulo` = `visitas_articulo` + 1 WHERE `articulos`.`cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

}
