<?php

class Usuario {

    private $codUsuario;
    private $descUsuario;
    private $password;
    private $perfil;
    private $ultimaConexion;
    private $contadorAccesos;

    public function __construct($codUsuario,$descUsuario,$password,$perfil,$ultimaConexion,$contadorAccesos) {
        $this->codUsuario = $codUsuario;
        $this->descUsuario = $descUsuario;
        $this->password = $password;
        $this->perfil = $perfil;
        $this->ultimaConexion = $ultimaConexion;
        $this->contadorAccesos = $contadorAccesos;
    }
    
    public static function validarUsuarioEntrada($entrada_codUsuario,$entrada_password){
        
    }
    
}
