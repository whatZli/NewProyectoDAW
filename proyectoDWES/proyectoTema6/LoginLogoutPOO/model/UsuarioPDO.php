<?php

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
     * @return $arrayUsuarios
     */
    public static function validarUsuario($codUsuario, $password) {
        $consulta = "select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?"; //Creacion de la consulta.
        $arrayUsuarios = [];
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();
            $arrayUsuarios['CodUsuario'] = $resFetch->T01_CodUsuario;
            $arrayUsuarios['Password'] = $resFetch->T01_Password;
            $arrayUsuarios['DescUsuario'] = $resFetch->T01_DescUsuario;
            $arrayUsuarios['NumConexiones'] = $resFetch->T01_NumConexiones;
            $arrayUsuarios['FechaHoraUltimaConexion'] = $resFetch->T01_FechaHoraUltimaConexion;
            $arrayUsuarios['Perfil'] = $resFetch->T01_Perfil;
            $arrayUsuarios['ImagenUsuario'] = $resFetch->T01_ImagenUsuario;
        }
        return $arrayUsuarios;
    }

}
