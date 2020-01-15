<?php
require_once 'UsuarioPDO.php';
class Usuario {

    private $codUsuario;
    private $descUsuario;
    private $password;
    private $perfil;
    private $ultimaConexion;
    private $contadorAccesos;

    public function __construct($codUsuario, $descUsuario, $password, $perfil, $ultimaConexion, $contadorAccesos) {
        $this->codUsuario = $codUsuario;
        $this->descUsuario = $descUsuario;
        $this->password = $password;
        $this->perfil = $perfil;
        $this->ultimaConexion = $ultimaConexion;
        $this->contadorAccesos = $contadorAccesos;
    }

    function getCodUsuario() {
        return $this->codUsuario;
    }

    function getDescUsuario() {
        return $this->descUsuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getUltimaConexion() {
        return $this->ultimaConexion;
    }

    function getContadorAccesos() {
        return $this->contadorAccesos;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setUltimaConexion($ultimaConexion) {
        $this->ultimaConexion = $ultimaConexion;
    }

    function setContadorAccesos($contadorAccesos) {
        $this->contadorAccesos = $contadorAccesos;
    }

    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $aUsuario = UsuarioPDO::validarUsuario($codUsuario, $password);
        if (!empty($aUsuario)) {
            $usuario = new Usuario($codUsuario, $aUsuario["Password"], $aUsuario["DescUsuario"], $aUsuario["NumConexiones"], $aUsuario["FechaHoraUltimaConexion"], $aUsuario["Perfil"], $aUsuario["ImagenUsuario"]);
        }
        return $usuario;
    }

    public static function modificarUsuario() {
        $usuarioEditado = UsuarioPDO::modificarUsuario($this->codUsuario, $this->password, $this->descUsuario);
        return $usuarioEditado;
    }

    public static function borrarUsuario($codUsuario) {
        $borrado = UsuarioPDO::borrarUsuario($codUsuario);
        return $borrado;
    }

    public static function registrarUltimaConexion($codUsuario) {
        setlocale(LC_TIME, 'es_ES.UTF-8'); //Idioma
        date_default_timezone_set('Europe/Madrid');

        return UsuarioPDO::registrarUltimaConexion($codUsuario);
    }

}
