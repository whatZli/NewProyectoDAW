<?php
require_once 'config/configuracionBD.php';

class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $conn->prepare($sentenciaSQL); //Preparamos la consulta.
            $consulta->execute($parametros); //Ejecuta la consulta.
        } catch (PDOException $exception) {
            $consulta = null; //En caso de error vaciamos la consulta
            echo $exception->getMessage();//Mostramos el mensaje
            unset($conn);//Destruimos la conexión
        }
        return $consulta;
    }

}