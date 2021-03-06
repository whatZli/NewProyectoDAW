<?php

/* Clase Articulo
 * Clase que se utilizará para representar un objeto Articulo
 * @category model
 * @autor Alex Dominguez
 * @version 1.0   
 */

//Requiere el fichero ArticuloPDO Donde se almacenan las consultas a la BD
//require_once 'ArticuloPDO.php';
//Creación de la clase Articulo

class Articulo {

    private $cod_articulo;
    private $titulo_articulo;
    private $descripcion_articulo;
    private $imagen_articulo;
    private $fecha_articulo;
    private $visitas_articulo;
    private $cod_usuario;
    
    function __construct($cod_articulo, $titulo_articulo, $descripcion_articulo, $imagen_articulo, $fecha_articulo, $visitas_articulo, $cod_usuario) {
        $this->cod_articulo = $cod_articulo;
        $this->titulo_articulo = $titulo_articulo;
        $this->descripcion_articulo = $descripcion_articulo;
        $this->imagen_articulo = $imagen_articulo;
        $this->fecha_articulo = $fecha_articulo;
        $this->visitas_articulo = $visitas_articulo;
        $this->cod_usuario = $cod_usuario;
    }

    function getCod_articulo() {
        return $this->cod_articulo;
    }

    function getTitulo_articulo() {
        return $this->titulo_articulo;
    }

    function getDescripcion_articulo() {
        return $this->descripcion_articulo;
    }

    function getImagen_articulo() {
        return $this->imagen_articulo;
    }

    function getFecha_articulo() {
        return $this->fecha_articulo;
    }

    function getVisitas_articulo() {
        return $this->visitas_articulo;
    }

    function getCod_usuario() {
        return $this->cod_usuario;
    }

    function setCod_articulo($cod_articulo) {
        $this->cod_articulo = $cod_articulo;
    }

    function setTitulo_articulo($titulo_articulo) {
        $this->titulo_articulo = $titulo_articulo;
    }

    function setDescripcion_articulo($descripcion_articulo) {
        $this->descripcion_articulo = $descripcion_articulo;
    }

    function setImagen_articulo($imagen_articulo) {
        $this->imagen_articulo = $imagen_articulo;
    }

    function setFecha_articulo($fecha_articulo) {
        $this->fecha_articulo = $fecha_articulo;
    }

    function setVisitas_articulo($visitas_articulo) {
        $this->visitas_articulo = $visitas_articulo;
    }

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }
}
