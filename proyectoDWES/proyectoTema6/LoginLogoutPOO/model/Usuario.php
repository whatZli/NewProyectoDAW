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
    private $descUsuario;
    private $password;
    private $perfil;
    private $ultimaConexion;
    private $contadorAccesos;

    /* Constructor del objeto Usuario */

    public function __construct($codUsuario, $descUsuario, $password, $perfil, $ultimaConexion, $contadorAccesos) {
        $this->codUsuario = $codUsuario;
        $this->descUsuario = $descUsuario;
        $this->password = $password;
        $this->perfil = $perfil;
        $this->ultimaConexion = $ultimaConexion;
        $this->contadorAccesos = $contadorAccesos;
    }

    /* Función getCodUsuario()
     * Devuelve el elemento codUsuario del objeto Usuario
     * @return Usuario->codUsuario
     */

    function getCodUsuario() {
        return $this->codUsuario;
    }

    /* Función getDescUsuario()
     * Devuelve el elemento descUsuario del objeto Usuario
     * @return Usuario->descUsuario
     */

    function getDescUsuario() {
        return $this->descUsuario;
    }

    /* Función getPassword()
     * Devuelve el elemento password del objeto Usuario
     * @return Usuario->password
     */

    function getPassword() {
        return $this->password;
    }

    /* Función getPerfil()
     * Devuelve el elemento perfil del objeto Usuario
     * @return Usuario->perfil
     */

    function getPerfil() {
        return $this->perfil;
    }

    /* Función getUltimaConexion()
     * Devuelve el elemento ultimaConexion del objeto Usuario
     * @return Usuario->ultimaConexion
     */

    function getUltimaConexion() {
        return $this->ultimaConexion;
    }

    /* Función getContadorAccesos()
     * Devuelve el elemento contadorAccesos del objeto Usuario
     * @return Usuario->contadorAccesos
     */

    function getContadorAccesos() {
        return $this->contadorAccesos;
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

    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    /* Función setPassword()
     * Modifica el elemento password del objeto Usuario
     */

    function setPassword($password) {
        $this->password = $password;
    }

    /* Función setPerfil()
     * Modifica el elemento perfil del objeto Usuario
     */

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    /* Función setUltimaConexion()
     * Modifica el elemento ultimaConexion del objeto Usuario
     */

    function setUltimaConexion($ultimaConexion) {
        $this->ultimaConexion = $ultimaConexion;
    }

    /* Función setContadorAccesos()
     * Modifica el elemento contadorAccesos del objeto Usuario
     */

    function setContadorAccesos($contadorAccesos) {
        $this->contadorAccesos = $contadorAccesos;
    }

}
