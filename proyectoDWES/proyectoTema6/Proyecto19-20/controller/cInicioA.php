<?php

if (isset($_GET['close'])) {
    session_destroy();
    header('Location: index.php');
}

if (isset($_GET['drop'])) {
    UsuarioPDO::borrarUsuario($_GET['drop']);
    header('Location: index.php');
} else {

    $aUsuarios = UsuarioPDO::buscarTodosUsuarios();
//var_dump($aUsuarios);

    for ($i = 0; isset($aUsuarios[$i]); $i++) {
        $aUsuario[$i][0] = $aUsuarios[$i]->getCod_usuario();
        $aUsuario[$i][1] = $aUsuarios[$i]->getTipo_usuario();
        $aUsuario[$i][2] = $aUsuarios[$i]->getNom_usuario();
        $aUsuario[$i][3] = $aUsuarios[$i]->getApell_usuario();
        $aUsuario[$i][4] = $aUsuarios[$i]->getEmail_usuario();
        $aUsuario[$i][6] = $aUsuarios[$i]->getImg_usuario();
    }

    $_SESSION['vista'] = $vistas['inicioA']; //Se carga en la sesión de vistas, la que queremos
    require_once $vistas['layoutA']; //se incluye la vista que contiene la $_SESSION['vista']
}