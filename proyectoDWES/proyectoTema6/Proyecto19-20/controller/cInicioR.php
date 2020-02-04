<?php
if(isset($_GET['close'])){
    session_destroy();
    header('Location: index.php');
}

$_SESSION['vista'] = $vistas['inicioR']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layoutR']; //se incluye la vista que contiene la $_SESSION['vista']
    