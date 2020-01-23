<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    
    <h1>Hola <?php echo ucfirst($aDatosUsuarioVista['descUsuario']) ?>. </h1>
    <h2>Perfil de usuario: <?php echo $aDatosUsuarioVista['perfil'] ?>. </h2>
    
    <?php if($aDatosUsuarioVista['contadorAccesos']!=1){?>
        <h2>Última conexión: <?php echo $aDatosUsuarioVista['ultimaConexion']; ?></h2>
    <?php } 
        echo '<h2>Veces conectado: '.$aDatosUsuarioVista['contadorAccesos'].'</h2>';
    ?>
    <input type="submit" name="perfil" class="btn btn-secondary" value="Perfil">
    <input type="submit" name="salir" class="btn btn-warning" value="Cerrar Sesión">
</form>
<br><br>