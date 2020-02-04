<?php

/* Clase Usuario
 * Clase que se utilizará para representar un objeto Usuario
 * @category model
 * @autor Alex Dominguez
 * @version 1.0   
 */

//Requiere el fichero UsuarioPDO Donde se almacenan las consultas a la BD
//require_once 'UsuarioPDO.php';
//Creación de la clase Usuario

class Usuario {
    /* @access private $codUsuario
     * @access private $descUsuario
     * @access private $password
     * @access private $perfil
     * @access private $ultimaConexion
     * @access private $contadorAccesos
     */

    private $cod_usuario;
    private $tipo_usuario;
    private $nom_usuario;
    private $apell_usuario;
    private $email_usuario;
    private $pass_usuario;
    private $img_usuario;
    
    function __construct($cod_usuario, $tipo_usuario, $nom_usuario, $apell_usuario, $email_usuario, $pass_usuario, $img_usuario) {
        $this->cod_usuario = $cod_usuario;
        $this->tipo_usuario = $tipo_usuario;
        $this->nom_usuario = $nom_usuario;
        $this->apell_usuario = $apell_usuario;
        $this->email_usuario = $email_usuario;
        $this->pass_usuario = $pass_usuario;
        $this->img_usuario = $img_usuario;
    }
    
    function getCod_usuario() {
        return $this->cod_usuario;
    }

    function getTipo_usuario() {
        return $this->tipo_usuario;
    }

    function getNom_usuario() {
        return $this->nom_usuario;
    }

    function getApell_usuario() {
        return $this->apell_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getPass_usuario() {
        return $this->pass_usuario;
    }

    function getImg_usuario() {
        return $this->img_usuario;
    }

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    function setTipo_usuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }

    function setNom_usuario($nom_usuario) {
        $this->nom_usuario = $nom_usuario;
    }

    function setApell_usuario($apell_usuario) {
        $this->apell_usuario = $apell_usuario;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    function setPass_usuario($pass_usuario) {
        $this->pass_usuario = $pass_usuario;
    }

    function setImg_usuario($img_usuario) {
        $this->img_usuario = $img_usuario;
    }
}
