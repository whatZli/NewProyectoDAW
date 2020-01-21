<?php

include_once 'model/Usuario.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor David García
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
        $consulta = "select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?"; //Creacion de la consulta.

        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();

            $actualizaFecha = "UPDATE `T01_Usuario` SET `T01_FechaHoraUltimaConexion` = ? WHERE `T01_Usuario`.`T01_CodUsuario` = ?"; //Creacion de la consulta.
            $resActualizaFecha = DBPDO::ejecutaConsulta($actualizaFecha, ["2031-01-17 08:41:38", "alex"]); //Ejecutamos la consulta.

            $usuario = new Usuario($resFetch->T01_CodUsuario, $resFetch->T01_DescUsuario, $resFetch->T01_Password, $resFetch->T01_Perfil, $resFetch->T01_FechaHoraUltimaConexion, 1);
        }
        return $usuario;
    }

}
