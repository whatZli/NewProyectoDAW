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

    private $codDepartamento;
    private $descDepartamento;
    private $fechaBajaDepartamento;
    private $volumenDeNegocio;

    function __construct($codDepartamento, $descDepartamento, $fechaBajaDepartamento, $volumenDeNegocio) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
        $this->volumenDeNegocio = $volumenDeNegocio;
    }

    function getCodDepartamento() {
        return $this->codDepartamento;
    }

    function getDescDepartamento() {
        return $this->descDepartamento;
    }

    function getVolumenDeNegocio() {
        return $this->volumenDeNegocio;
    }

    function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    function setCodDepartamento($codDepartamento) {
        $this->codDepartamento = $codDepartamento;
    }

    function setDescDepartamento($descDepartamento) {
        $this->descDepartamento = $descDepartamento;
    }

    function setVolumenDeNegocio($volumenDeNegocio) {
        $this->volumenDeNegocio = $volumenDeNegocio;
    }

    function setFechaBajaDepartamento($fechaBajaDepartamento) {
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

}
