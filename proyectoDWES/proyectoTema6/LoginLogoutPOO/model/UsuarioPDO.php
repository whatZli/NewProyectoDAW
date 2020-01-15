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

    public static function altaUsuario($codUsuario, $password, $descripcion) {
        $arrayUsuarios = [];
        $fecha = new DateTime();
        $consulta = "insert into T01_Usuario values (?,?,?,0,?,'Usuario')";
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $password, $descripcion, $fecha->getTimestamp()]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $arrayUsuarios['CodUsuario'] = $codUsuario;
            $arrayUsuarios['Password'] = $password;
            $arrayUsuarios['DescUsuario'] = $descripcion;
            $arrayUsuarios['NumConexiones'] = 1;
            $arrayUsuarios['FechaHoraUltimaConexion'] = $fecha->getTimestamp();
            $arrayUsuarios['Perfil'] = 'Usuario';
            $arrayUsuarios['ImagenUsuario'] = $resFetch->T01_ImagenUsuario;
        }
        return $arrayUsuarios;
    }

    public static function modificarUsuario($codUsuario, $password, $descripcion) {
        $editado = false;
        if ($password != null) {
            $consulta = "update T01_Usuario set T01_Password=?, T01_DescUsuario=? where T01_CodUsuario=?";
            $resConsulta = DBPDO::ejecutaConsulta($consulta, [$password, $descripcion, $codUsuario]); //Ejecutamos la consulta.
        } else {
            $consulta = "update T01_Usuario set T01_DescUsuario=? where T01_CodUsuario=?";
            $resConsulta = DBPDO::ejecutaConsulta($consulta, [$descripcion, $codUsuario]); //Ejecutamos la consulta.
        }
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $editado = true;
        }
        return $editado;
    }

    public static function borrarUsuario($codUsuario) {
        $borrado = false;
        $consulta = "DELETE FROM T01_Usuario WHERE T01_CodUsuario=?";
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $borrado = true;
        }
        return $borrado;
    }

    public static function registrarUltimaConexion($codUsuario) {
        $aFechaAccesos = [];
        $fecha = new DateTime();
        $query = "select * from T01_Usuario where T01_CodUsuario=?";
        $resQuery = DBPDO::ejecutaConsulta($query, [$codUsuario]); //Ejecutamos la consulta.
        if ($resQuery->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $resFetch = $resQuery->fetchObject();
//Metemos los resultados de la consulta en el array
            $aFechaAccesos['NumConexiones'] = $resFetch->T01_NumConexiones;
            $aFechaAccesos['FechaHoraUltimaConexion'] = $resFetch->T01_FechaHoraUltimaConexion;
            $aFechaAccesos['DescUsuario'] = $resFetch->T01_DescUsuario;
        }
        $consulta = "update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=now() where T01_CodUsuario=?";
        DBPDO::ejecutaConsulta($consulta, [$codUsuario]); //Ejecutamos la consulta.
        return $aFechaAccesos;
    }

    public static function validarCodNoExiste($codUsuario) {
        $existe = false;
        $consulta = "select * from T01_Usuario where T01_CodUsuario=?"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); //Ejecutamos la consulta.
        if ($resConsulta->rowCount() == 1) { //Comprobamos si se han obtenido resultados en la consulta.
            $existe = true;
        }
        return $existe;
    }

    public static function buscaUsuariosPorDesc($descripcion) {
        $aUsuarios = [];
        $usuario = [];
        $consulta = "select * from T01_Usuario where T01_DescUsuario like '%?%'";
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$descripcion]); //Ejecutamos la consulta.
        $contador = 0;
        if ($resConsulta->rowCount() > 0) { //Comprobamos si se han obtenido resultados en la consulta.
            while ($resFetch = $resQuery->fetchObject()) {
                $aUsuarios['CodUsuario'] = $resFetch->T01_CodUsuario;
                $aUsuarios['Password'] = $resFetch->T01_Password;
                $aUsuarios['DescUsuario'] = $resFetch->T01_DescUsuario;
                $aUsuarios['NumConexiones'] = $resFetch->T01_NumConexiones;
                $aUsuarios['FechaHoraUltimaConexion'] = $resFetch->T01_FechaHoraUltimaConexion;
                $aUsuarios['Perfil'] = $resFetch->T01_Perfil;
                $aUsuarios['ImagenUsuario'] = $resFetch->T01_ImagenUsuario;
                $usuario[$contador] = $aUsuarios;
                $contador++;
            }
        }
        return $usuario;
    }

}
