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

    public static function buscarTodosUsuarios() {

        $consulta = "SELECT * FROM `T01_Usuario`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;

        while ($resFetch = $resConsulta->fetchObject()) {
            $usuario = new Usuario($resFetch->T01_CodUsuario, $resFetch->T01_Password, $resFetch->T01_DescUsuario, $resFetch->T01_NumAccesos, $resFetch->T01_FechaHoraUltimaConexion, $resFetch->T01_Perfil, null);
            $registros[$cont] = $usuario;
            $cont++;
        }

        return $registros;
    }

    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $consulta = "select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password]); //Ejecutamos la consulta.

        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();

            //Actualizar la fecha a la actual y el número de accesos
            $actualizaFecha = "UPDATE `T01_Usuario` SET `T01_NumAccesos` = `T01_NumAccesos` + 1 , `T01_FechaHoraUltimaConexion` = ? WHERE `T01_CodUsuario` = ?"; //Creacion de la consulta.
            $fechaHoraActual = date("Y-m-d H:i:s");
            $usuarioActual = $resFetch->T01_CodUsuario;
            //Ejecutamos la consulta.
            DBPDO::ejecutaConsulta($actualizaFecha, [$fechaHoraActual, $usuarioActual]);

            $usuario = new Usuario($resFetch->T01_CodUsuario, $resFetch->T01_Password, $resFetch->T01_DescUsuario, $resFetch->T01_NumAccesos + 1, $resFetch->T01_FechaHoraUltimaConexion, $resFetch->T01_Perfil, null);
        }
        return $usuario;
    }

    public static function altaUsuario($codUsuario, $password, $descripcion) {
        $consulta = "INSERT INTO `T01_Usuario`(`T01_CodUsuario`, `T01_Password`, `T01_DescUsuario`) VALUES( ? , ? , ? );";
        DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password, $descripcion]);
        //Se llama a validar un usuario para que nos devuelva un Usuario
        return UsuarioPDO::validarUsuario($codUsuario, $password);
    }

    public static function validarCodNoExiste($codUsuario) {
        $consulta = "SELECT `T01_CodUsuario` FROM `T01_Usuario` WHERE `T01_CodUsuario` = ?;";
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if ($resConsulta->rowCount() == 1) {
            return true;
        }
        return false;
    }

    public static function modificarUsuario($codUsuario, $descripcion) {
        $usuario = null;

        $actualizacion = "UPDATE `T01_Usuario` SET `T01_DescUsuario` = ? WHERE `T01_CodUsuario` = ?;";
        DBPDO::ejecutaConsulta($actualizacion, [$descripcion, $codUsuario]);

        $consulta = "select * from T01_Usuario where T01_CodUsuario=?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); //Ejecutamos la consulta.

        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();
            $usuario = new Usuario($resFetch->T01_CodUsuario, $resFetch->T01_Password, $resFetch->T01_DescUsuario, $resFetch->T01_NumAccesos, $resFetch->T01_FechaHoraUltimaConexion, $resFetch->T01_Perfil, null);
        }

        return $usuario;
    }

    public static function borrarUsuario($codUsuario) {
        $borrar = "DELETE FROM `T01_Usuario` WHERE `T01_CodUsuario`=?";
        DBPDO::ejecutaConsulta($borrar, [$codUsuario]);
        return true;
    }

}
