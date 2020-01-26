<?php

include_once 'model/Departamento.php';

/* Clase UsuarioPDO
 * Clase que realizará las consultas relacionadas con el usuario
 * @category model
 * @autor Alex Domínguez
 * @version 1.0   
 */

class DepartamentoPDO {

    public static function buscarTodosDepartamentos() {
        $consulta = "SELECT * FROM `T02_Departamento`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.

        $cont = 0;
        while ($resFetch = $resConsulta->fetchObject()) {
            $departamento = new Departamento($resFetch->T02_CodDepartamento, $resFetch->T02_DescDepartamento, $resFetch->T02_FechaBaja, $resFetch->T02_VolumenNegocio);
            $registros[$cont] = $departamento;
            $cont++;
        }
        return $registros;
    }

    public static function buscaDepartamentosPorCodigo($codDepartamento) {
        $departamento = null;

        $consulta = "SELECT * FROM `T02_Departamento` WHERE `t02_departamento`.`T02_CodDepartamento` = ?;"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, [$codDepartamento]); //Ejecutamos la consulta.

        if ($resConsulta->rowCount() == 1) {
            $resFetch = $resConsulta->fetchObject();
            $departamento = new Departamento($resFetch->T02_CodDepartamento, $resFetch->T02_DescDepartamento, $resFetch->T02_FechaBaja, $resFetch->T02_VolumenNegocio);
        }

        return $departamento;
    }

    public static function rehabilitaDepartamento($codDepartamento) {
        $consulta = "UPDATE `t02_departamento` SET `T02_FechaBaja` = ? WHERE `t02_departamento`.`T02_CodDepartamento` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [null, $codDepartamento]); //Ejecutamos la consulta.
    }

    public static function bajaLogicaDepartamento($codDepartamento) {
        $consulta = "UPDATE `t02_departamento` SET `T02_FechaBaja` = ? WHERE `t02_departamento`.`T02_CodDepartamento` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [date("Y-m-d"), $codDepartamento]); //Ejecutamos la consulta.
    }

    public static function bajaFisicaDepartamento($codDepartamento) {
        $consulta = "DELETE FROM `t02_departamento` WHERE `t02_departamento`.`T02_CodDepartamento` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$codDepartamento]); //Ejecutamos la consulta.
    }

    public static function modificaDepartamento($codDepartamento, $descDepartamento, $vNegocio) {
        $consulta = "UPDATE `t02_departamento` SET `T02_DescDepartamento` = ?, `T02_VolumenNegocio` = ? WHERE `t02_departamento`.`T02_CodDepartamento` = ?;"; //Creacion de la consulta.
        DBPDO::ejecutaConsulta($consulta, [$descDepartamento, $vNegocio, $codDepartamento]); //Ejecutamos la consulta.
    }

}
