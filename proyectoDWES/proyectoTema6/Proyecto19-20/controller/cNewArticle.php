<?php



$_SESSION['vista'] = $vistas['newArticle']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layoutR']; //se incluye la vista que contiene la $_SESSION['vista'] 
