<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>Hola <?php echo $aDatosUsuarioVista['descUsuario'] ?>. </h1>
    <h2>Estás registrado como (<?php echo $aDatosUsuarioVista['perfil'] ?>).</h2>
    <h2>Tu última conexión fue el <?php echo $aDatosUsuarioVista['ultimaConexion']; ?></h2>
    <?php if($aDatosUsuarioVista['contadorAccesos']!=null){
        echo '<h2>El número de accesos es de '.$aDatosUsuarioVista['contadorAccesos'].'</h2>';
    }?>
    
    <input type="submit" name="salir" class="btn btn-warning" value="Cerrar Sesión">
</form>
<br><br>