<?php

if (isset($_GET['pag'])) {
    $pagina = $_GET['pag'];
    if ($pagina !== "main" &&
            $pagina !== "dwes" &&
            $pagina !== "dwec" &&
            $pagina !== "diw" &&
            $pagina !== "daw" &&
            $pagina !== "dwec2-1" &&
            $pagina !== "dwec2-2" &&
            $pagina !== "dwec3-1" &&
            $pagina !== "dwec3-2" &&
            $pagina !== "dwec3-3" &&
            $pagina !== "dwec3-4" &&
            $pagina !== "dwec3-5" &&
            $pagina !== "dwec3-6" &&
            $pagina !== "dwec3-7") {
        $pagina = "error.php";
    } else {
        $pagina = $_GET['pag'] . ".php";
    }
} else {
    $pagina = "main.php";
}

require 'modulos/cabecera.php';
require 'modulos/menu.php';
require "modulos/" . $pagina;
require 'modulos/pie.php';
require 'modulos/cookies.php';