<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="salir" class="btn-menu btn btn-warning" value="Cerrar Sesión"> 
    <input type="submit" name="perfil" class="btn-menu btn btn-secondary" value="Perfil">


    <div class="contenedor"><br><br>

        <div class="titulo">Hola <?php echo ucfirst($aDatosUsuarioVista['descUsuario']) ?>. </div>
        <h4>Perfil de usuario: <?php echo $aDatosUsuarioVista['perfil'] ?>. </h4>

        <?php if ($aDatosUsuarioVista['contadorAccesos'] != 1) { ?>
            <h4>Última conexión: <?php echo $aDatosUsuarioVista['ultimaConexion']; ?></h4>
            <?php
        }
        echo '<h4>Veces conectado: ' . $aDatosUsuarioVista['contadorAccesos'] . '</h4>';
        ?>
    </div>

</form>