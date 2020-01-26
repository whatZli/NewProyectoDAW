<?php

// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"] = "inicio"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}

if(isset($_GET['bajaCodDept'])){
    DepartamentoPDO::bajaLogicaDepartamento($_GET['bajaCodDept']);
}
if(isset($_GET['altaCodDept'])){
    DepartamentoPDO::rehabilitaDepartamento($_GET['altaCodDept']);
}
if(isset($_GET['borrarCodDept'])){
    DepartamentoPDO::bajaFisicaDepartamento($_GET['borrarCodDept']);
}
if(isset($_GET['visualizarCodDept'])){
    $_SESSION['deptEnCurso']= DepartamentoPDO::buscaDepartamentosPorCodigo($_GET['visualizarCodDept']);
    $_SESSION["pagina"] = "deptVisualizar"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}
if(isset($_GET['modificarCodDept'])){
    $_SESSION['deptEnCurso']= DepartamentoPDO::buscaDepartamentosPorCodigo($_GET['modificarCodDept']);
    $_SESSION["pagina"] = "deptModificar"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}

//@param variable $usuario Usuario Variable que va a contener un objeto Usuario
$usuario = $_SESSION['usuarioDAW205POO'];

$aDatosUsuarioVista = array(
    "codigo" => $usuario->getCodUsuario(),
    "password" => $usuario->getPassword(),
    "descUsuario" => $usuario->getDescUsuario(),
    "contadorAccesos" => $usuario->getNumAccesos(),
    "ultimaConexion" => $usuario->getFechaHoraUltimaConexion(),
    "perfil" => $usuario->getPerfil()
);

if ($aDatosUsuarioVista["perfil"] == 'administrador') {
    $aUsuarios = UsuarioPDO::buscarTodosUsuarios();

    for ($i = 0; isset($aUsuarios[$i]); $i++) {
        $aUsuariosVista[$i][0] = $aUsuarios[$i]->getCodUsuario();
        $aUsuariosVista[$i][1] = $aUsuarios[$i]->getDescUsuario();
        $aUsuariosVista[$i][2] = $aUsuarios[$i]->getNumAccesos();
        $aUsuariosVista[$i][3] = $aUsuarios[$i]->getFechaHoraUltimaConexion();
    }
} else {
    $aDepartamentos = DepartamentoPDO::buscarTodosDepartamentos();

    for ($i = 0; isset($aDepartamentos[$i]); $i++) {
        $aDepartamentosVista[$i][0] = $aDepartamentos[$i]->getCodDepartamento();
        $aDepartamentosVista[$i][1] = $aDepartamentos[$i]->getDescDepartamento();
        $aDepartamentosVista[$i][2] = $aDepartamentos[$i]->getVolumenDeNegocio();
        $aDepartamentosVista[$i][3] = $aDepartamentos[$i]->getFechaBajaDepartamento();
    }
}




$_SESSION['vista'] = $vistas['departamentos']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    