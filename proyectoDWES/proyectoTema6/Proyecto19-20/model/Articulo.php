<?php

/* Clase Departamento
 * Clase que se utilizará para representar un objeto Usuario
 * @category model
 * @autor Alex Dominguez
 * @version 1.0   
 */

//Requiere el fichero UsuarioPDO Donde se almacenan las consultas a la BD
//require_once 'UsuarioPDO.php';
//Creación de la clase Usuario

class Departamento {

    private $cod_articulo;
    private $titulo_articulo;
    private $descripcion_articulo;
    private $imagen_articulo;
    private $cod_usuario;
    
    function __construct($cod_articulo, $titulo_articulo, $descripcion_articulo, $imagen_articulo, $cod_usuario) {
        $this->cod_articulo = $cod_articulo;
        $this->titulo_articulo = $titulo_articulo;
        $this->descripcion_articulo = $descripcion_articulo;
        $this->imagen_articulo = $imagen_articulo;
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

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }
   
}
