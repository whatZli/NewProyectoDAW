<?php
require_once 'ConstDB';

class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $conn->prepare($sentenciaSQL); //Preparamos la consulta.
            $consulta->execute($parametros); //Ejecuta la consulta.
        } catch (PDOException $exception) {
            $consulta = null; //Destruimos la consulta.
            echo $exception->getMessage();
            unset($conn);
        }
        return $consulta;
    }

}