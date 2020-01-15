<?php
include_once 'config/configuracion.php';
include_once 'config/configuracionBD.php';

session_start();
if(isset($_SESSION["DAW205POOusuario"])){
    if(isset($_GET['pagina'])){
        include_once $controladores[$_GET['pagina']];
    }else{
        include_once $controladores[$_GET['inicio']];
    }
}else{
    echo 'Carga index.php';
    include_once $controladores["login"];
}
?>