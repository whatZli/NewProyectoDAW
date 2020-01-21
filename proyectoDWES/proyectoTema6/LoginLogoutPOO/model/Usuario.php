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

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $perfil;

    /* Constructor del objeto Usuario */

    function __construct($codUsuario, $password, $descUsuario, $numAccesos, $fechaHoraUltimaConexion, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAccesos = $numAccesos;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->perfil = $perfil;
    }

    /* Función getCodUsuario()
     * Devuelve el elemento codUsuario del objeto Usuario
     * @return Usuario->codUsuario
     */

    function getCodUsuario() {
        return $this->codUsuario;
    }

    /* Función getPassword()
     * Devuelve el elemento password del objeto Usuario
     * @return Usuario->password
     */

    function getPassword() {
        return $this->password;
    }

    /* Función getDescUsuario()
     * Devuelve el elemento descUsuario del objeto Usuario
     * @return Usuario->descUsuario
     */

    function getDescUsuario() {
        return $this->descUsuario;
    }

    /* Función getNumAccesos()
     * Devuelve el elemento contadorAccesos del objeto Usuario
     * @return Usuario->contadorAccesos
     */

    function getNumAccesos() {
        return $this->numAccesos;
    }

    /* Función getFechaHoraUltimaConexion()
     * Devuelve el elemento ultimaConexion del objeto Usuario
     * @return Usuario->ultimaConexion
     */

    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    /* Función getPerfil()
     * Devuelve el elemento perfil del objeto Usuario
     * @return Usuario->perfil
     */

    function getPerfil() {
        return $this->perfil;
    }

    /* Función setCodUsuario()
     * Modifica el elemento codUsuario del objeto Usuario
     */

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    /* Función setDescUsuario()
     * Modifica el elemento descUsuario del objeto Usuario
     */

    function setPassword($password) {
        $this->password = $password;
    }

    /* Función setPassword()
     * Modifica el elemento password del objeto Usuario
     */

    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    /* Función setPerfil()
     * Modifica el elemento perfil del objeto Usuario
     */

    function setNumAccesos($numAccesos) {
        $this->numAccesos = $numAccesos;
    }

    /* Función setUltimaConexion()
     * Modifica el elemento ultimaConexion del objeto Usuario
     */

    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    /* Función setContadorAccesos()
     * Modifica el elemento contadorAccesos del objeto Usuario
     */

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}
