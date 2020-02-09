<?php

include_once 'model/Usuario.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor Alex Dominguez
 * @version 1.0   
 */

class UsuarioPDO {
    /* Función validarUsuario
     * Se le pasan el $codUsuario y $password, y si lo encuentra en la BD devuelve un array con todos los datos del usuario
     * @access public
     * @param $codUsuario
     * @param $password
     * @return Usuario $Usuarios
     */

    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $consulta = "select * from Usuarios where cod_usuario=? and pass_usuario=?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password]); //Ejecutamos la consulta.

        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();
            $usuario = new Usuario($resFetch->cod_usuario, $resFetch->tipo_usuario, $resFetch->nom_usuario, $resFetch->apell_usuario, $resFetch->email_usuario, $resFetch->pass_usuario, $resFetch->imagen_usuario);
        }
        return $usuario;
    }

    public static function buscarTodosUsuarios() {
        $registros = null;
        $consulta = "SELECT * FROM `Usuarios`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $usuario = new Usuario($resFetch->cod_usuario, $resFetch->tipo_usuario, $resFetch->nom_usuario, $resFetch->apell_usuario, $resFetch->email_usuario, null, $resFetch->imagen_usuario);
            $registros[$cont] = $usuario;
            $cont++;
        }
        return $registros;
    }

    public static function buscarUsuario($codUsuario) {
        $consulta = "SELECT * FROM `Usuarios` WHERE `Usuarios`.`cod_usuario` = ?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); //Ejecutamos la consulta.

        $resFetch = $resConsulta->fetchObject();
        $usuario = new Usuario($resFetch->cod_usuario, $resFetch->tipo_usuario, $resFetch->nom_usuario, $resFetch->apell_usuario, $resFetch->email_usuario, $resFetch->pass_usuario, $resFetch->imagen_usuario);

        return $usuario;
    }
    
    public static function incluirUsuario($codUser, $typeUser, $name, $lname, $email, $password, $image) {
        if (UsuarioPDO::validarCodNoExiste($codUser)) {
            $consulta = "INSERT INTO `Usuarios`(`cod_usuario`, `tipo_usuario`, `nom_usuario`, `apell_usuario`, `email_usuario`, `pass_usuario`, `imagen_usuario`) VALUES( ? , ? , ? ,? ,?, ?, ?);";
            DBPDO::ejecutaConsulta($consulta, [$codUser, $typeUser, $name, $lname, $email, $password, $image]);
            //Se llama a validar un usuario para que nos devuelva un Usuario
            return UsuarioPDO::validarUsuario($codUser, $password);
        }
    }

    public static function validarCodNoExiste($codUser) {
        $consulta = "SELECT `cod_usuario` FROM `Usuarios` WHERE `cod_usuario` = ?;";
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUser]);
        if ($resConsulta->rowCount() == 1) {
            return false;
        }
        return true;
    }

    public static function borrarUsuario($codUser) {
        $borrar = "DELETE FROM `Usuarios` WHERE `cod_usuario`=?";
        DBPDO::ejecutaConsulta($borrar, [$codUser]);
        return true;
    }

    
    
    public static function modificar1Usuario($codUser, $typeUser, $name, $lname, $email) {
        $usuario = null;

        $actualizacion = "UPDATE `Usuarios` SET `tipo_usuario` = ?, `nom_usuario` = ?, `apell_usuario` = ?, `email_usuario` = ? WHERE `cod_usuario` = ?";
        DBPDO::ejecutaConsulta($actualizacion, [$typeUser, $name, $lname, $email, $codUser]);

        $consulta = "SELECT * FROM Usuarios WHERE cod_usuario = ?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUser]); //Ejecutamos la consulta.

        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();
            $usuario = new Usuario($resFetch->cod_usuario, $resFetch->tipo_usuario, $resFetch->nom_usuario, $resFetch->apell_usuario, $resFetch->email_usuario, $resFetch->pass_usuario, $resFetch->imagen_usuario);
        }

        return $usuario;
    }

}
