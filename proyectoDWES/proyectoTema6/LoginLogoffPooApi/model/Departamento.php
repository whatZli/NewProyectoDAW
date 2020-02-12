<?php

/**
 * Class Departamento
 *
 * Clase que contiene los metodos para crear consultar y modificar cualquier atributo de un departamento
 *
 * PHP version 7.0
 *
 * @category Departamento
 * @package  Departamento
 * @source Departamento.php
 * @since Versión 1.1 Añadidos getters y setters
 * @copyright 12-02-2020
 * @author Versión 1.1 Alex Dominguez Dominguez
 * @version Versión 1.1 Añadidos getters y setters
 
 */

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
