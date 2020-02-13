<?php

$host = "192.168.20.19";
$user = "adminsql";
$password = "paso";
$db = "BD_Maria";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
    die("Conexion fallida");
}else{
    
    $consulta = "SELECT * FROM `asignaturas`";
    $result = mysqli_query($con,$consulta);
    
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $nombre = $row['nombre'];
        
        $devuelve[]=array("id"=> $id,
                        "nombre" => $nombre);
    }
    
    echo json_encode($devuelve);
}