<?php

/* Fichero que realiza las consultas relacionadas con el usuario */

class UsuarioPDO {

    public static function validarUsuario($codUsuario, $password) {
//        $consulta = "select * from Usuario where CodUsuario=? and Password=SHA2(?,256)"; //Creacion de la consulta.
        $consulta = "select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?"; //Creacion de la consulta.
        $arrayUsuarios = [];
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resConsulta->fetchObject();
//Metemos los resultados de la consulta en el array
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
