<?php
if(isset($_GET['close'])){
    session_destroy();
    header('Location: index.php');
}

$_SESSION['vista'] = $vistas['inicioA']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layoutA']; //se incluye la vista que contiene la $_SESSION['vista']
    