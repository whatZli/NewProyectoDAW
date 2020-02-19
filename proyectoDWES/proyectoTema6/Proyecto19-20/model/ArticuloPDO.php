<?php

include_once 'model/Articulo.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor Alex Domínguez
 * @version 1.0   
 */

class ArticuloPDO {

    /**
     * Buscar Articulos por Código  
     * Función que devuelve un número indeterminado de artículos dependiendo del
     * código que se le pase. En caso de que no se le pase ningún código de artículo, mostrará          * todos los artículos
     * @param string $codArticulo Código del artículo
     * @return Articulo Devuelve un array de Articulos
     *      */

    public static function buscarCodArticulos($codArticulo) {

        $registros = null;

        if ($codArticulo === 0) {
            $consulta = "SELECT * FROM `Articulos`"; //Creacion de la consulta.
            $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.
        } else {
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

    /**
     * Función numArticulos
     * Función que devuelve el número de artículos totales en la base de datos
     * 
     * @return int Devuelve un entero con la cantidad de artículos totales en la bd
     *      */
    
    public static function numArticulos() {
        $num = 0;
        $consulta = "SELECT count(*) as 'numero' FROM `Articulos`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.
        $resFetch = $resConsulta->fetchObject();
        $num = $resFetch->numero;
        return $num;
    }

    /**
     * Buscar buscar todos articulos  
     * Función que devuelve un número indeterminado de artículos dependiendo del
     * número de página que se le pase. 
     * En caso de que no se le pase ningún código de artículo, mostrará          
     * todos los artículos
     * @param string $pagina número correspondiente al número de página que deseemos
     * @return Articulo Devuelve un array de Articulos
     *      */
    
    public static function buscarTodosArticulos($pagina) {
        if ($pagina != 0) {
            $pagina = $pagina * 4 - 4;
        }
        $registros = null;
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

    /**
     * Buscar buscar por el título de articulos  
     * Función que devuelve un número indeterminado de artículos dependiendo del
     * título y página que se le pase.
     * @param string $titulo Título por el que se buscan en la base de datos
     * @param int $pagina número correspondiente al número de página que deseemos
     * @return Articulo Devuelve un array de Articulos
     *      */
    
    public static function buscarTituloArticulos($titulo, $pagina) {

        if ($pagina != 0) {
            $pagina = $pagina * 3 - 3;
        }
        $registros = null;
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

    /*  Functión incluir artículo
     *  Función en la que se le pasan 4 parámetros necesarios para crear un artículo
     *  @param  String $titulo Titulo del artículo
     *  @param  String $descripcion Descripción del artículo
     *  @param  String $imagen Nombre del fichero
     *  @param  String $cod_usuario Código del usuario creador del artículo
     */
    
    public static function incluirArticulo($titulo, $descripcion, $imagen, $cod_usuario) {
        $consulta = "INSERT INTO `Articulos` (`cod_articulo`, `titulo_articulo`, `descripcion_articulo`, `imagen_articulo`, `fecha_articulo`, `visitas_articulo`, `cod_usuario`) VALUES (NULL, ?, ?, ?, now(), '0', ?);"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo, $descripcion, $imagen, $cod_usuario]); //Ejecutamos la consulta.
    }

    /* Función Borrar Artículo
     * Función en la que se le pasa un codigo de artículo para borrarlo
     * @param   String $codArticulo Código del artículo
     * 
     */
    
    public static function borrarArticulo($codArticulo) {
        $consulta = "DELETE FROM `Articulos` WHERE `Articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

    /* Función Buscar Artículo
     * Función en la que se le pasa un codigo de artículo para buscarlo
     * @param String $codArticulo Código del artículo
     * @return Articulo $articulo Devuelve un Articulo
     */
    
    public static function buscarArticulo($codArticulo) {
        $consulta = "SELECT * FROM `Articulos` WHERE `Articulos`.`cod_articulo` = ?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.

        $resFetch = $resConsulta->fetchObject();
        $articulo = new Articulo($resFetch->cod_articulo, $resFetch->titulo_articulo, $resFetch->descripcion_articulo, $resFetch->imagen_articulo, $resFetch->fecha_articulo, $resFetch->visitas_articulo, $resFetch->cod_usuario);

        return $articulo;
    }

    /*
     * Función Modificar Artículo
     * Función en la que se le pasa el código del artículo, el título y la descripción
     * para modificarlo
     * @param String $titulo Titulo del artículo
     * @param String $descripcion Descripción del artículo
     * @param String $codArticulo Código del artículo
     */
    
    public static function modificarArticulo($titulo, $descripcion, $codArticulo) {
        $consulta = "UPDATE `Articulos` SET `titulo_articulo` = ?, `descripcion_articulo` = ? WHERE `cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$titulo, $descripcion, $codArticulo]); //Ejecutamos la consulta.
    }

    /*
     * Función contador de artículos
     * Función que cada vez que se consulta un artículo se suma 1 al contador del artículo
     * @param String $codArticulo Código del artículo
     */
    
    public static function contadorArticulo($codArticulo) {
        $consulta = "UPDATE `Articulos` SET `visitas_articulo` = `visitas_articulo` + 1 WHERE `Articulos`.`cod_articulo` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codArticulo]); //Ejecutamos la consulta.
    }

}
