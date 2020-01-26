<?php

// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"] = "departamentos"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}

if (isset($_POST['guardar'])) {
    $codDepartamento=$_SESSION['deptEnCurso']->getCodDepartamento();
    $descDepartamento=$_POST['descUsuario'];
    $vNegocioDepartamento=$_POST['vNegocio'];
    echo $vNegocioDepartamento;
    DepartamentoPDO::modificaDepartamento($codDepartamento,$descDepartamento,$vNegocioDepartamento);
    $_SESSION["pagina"] = "departamentos"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}

//@param variable $usuario Usuario Variable que va a contener un objeto Usuario
$departamento = $_SESSION['deptEnCurso'];

$aDatosDepartamentoVista = array(
    "codigo" => $departamento->getCodDepartamento(),
    "descripcion" => $departamento->getDescDepartamento(),
    "fechaBaja" => $departamento->getFechaBajaDepartamento(),
    "vNegocio" => $departamento->getVolumenDeNegocio(),
);

$_SESSION['vista'] = $vistas['deptModificar']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    