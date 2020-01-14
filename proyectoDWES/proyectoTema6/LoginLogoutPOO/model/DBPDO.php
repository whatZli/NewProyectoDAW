<?php
require_once 'ConstDB';

class DBPDO {

    public static function ejecutaConsulta($entradaSentenciaSQL, $entradaParametros) {
        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo "Error: ".$exc->getMessage()." <br>";
            echo "Codigo del error: ".$exc->getCode()." <br>";
        }
        
        
    }

}
