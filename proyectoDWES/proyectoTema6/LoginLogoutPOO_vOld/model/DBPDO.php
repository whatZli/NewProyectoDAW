<?php

//Fichero que almacena las constantes de configuración de la BD
require_once 'config/configuracionBD.php';

/* Clase DBPDO
 * Clase que realizará conexión a la BD
 * @category model
 * @autor Alex Dominguez
 * @version 1.0   
 */

class DBPDO {
    /* Función ejecutaConsulta
     * Se le pasan la $sentenciaSQL y $parametros, y ejecuta la consulta. Devuelve el resultado de la consulta
     * @access public
     * @param $sentenciaSQL
     * @param $parametros
     * @return $consulta
     */

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $conn->prepare($sentenciaSQL); //Preparamos la consulta.
            $consulta->execute($parametros); //Ejecuta la consulta.
        } catch (PDOException $exception) {
            $consulta = null; //En caso de error vaciamos la consulta
            echo $exception->getMessage(); //Mostramos el mensaje
            unset($conn); //Destruimos la conexión
        }
        return $consulta;
    }

}
