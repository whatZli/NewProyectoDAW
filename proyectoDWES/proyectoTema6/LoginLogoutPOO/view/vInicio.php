<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>Hola <?php echo $aDatosUsuarioVista['descUsuario'] ?></h1>
    <input type="submit" name="salir" class="btn btn-warning" value="Cerrar Sesión">
</form>
<br><br>
$aDatosUsuarioVista=array(
    "codigo" => $usuario->getCodUsuario(),
    "descUsuario" => $usuario->getDescUsuario(),
    "password" => $usuario->getPassword(),
    "perfil" => $usuario->getPerfil(),
    "ultimaConexion" => $usuario->getUltimaConexion(),
    "contadorAccesos" => $usuario->getContadorAccesos()
);