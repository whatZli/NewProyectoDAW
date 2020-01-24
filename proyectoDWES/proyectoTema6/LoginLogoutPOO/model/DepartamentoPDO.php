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
        $aDepartamentos = array();

        $consulta = "SELECT * FROM `T02_Departamento`"; //Creacion de la consulta.
        $resConsulta = DBPDO::ejecutaConsulta($consulta, []); //Ejecutamos la consulta.
        $resFetch = $resConsulta->fetchObject();
//        if ($resConsulta->rowCount() > 1) { //Comprobamos si se han obtenido resultados en la consulta.
//            $resFetch = $resConsulta->fetchObject();
//            
//            $departamento = new Departamento($resFetch->T02_CodDepartamento, $resFetch->T02_DescDepartamento, $resFetch->T02_VolumenNegocio,$resFetch->T02_FechaBaja);
//        }



        $registro = $resConsulta->fetchObject(); //S
        
        $cont=0;
        while ($registro = $resConsulta->fetchObject()) {
            $registros[0][$cont]=$registro;
            $cont++;
        }




        return $registros[0];
    }

}
