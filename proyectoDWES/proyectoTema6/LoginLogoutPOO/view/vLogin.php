<article id="a1">

    <form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <button type="submit" name="iniciarSesion" class="menu btn btn-primary">Iniciar Sesión</button>
        <button type="submit" name="registro" class="seleccionado btn btn-secondary" style="float:right;">Registro</button>

        <div class="form-group">
            <label for="loginUsuario">Usuario</label>
            <input type="text" name="loginUsuario" class="form-control" id="loginUsuario" aria-describedby="loginUsuario" placeholder="Introduce usuario">
        </div>
        <div class="form-group">
            <label for="loginPassword">Contraseña</label>
            <input type="password" name="loginPassword" class="form-control" id="loginPassword" placeholder="Introduce contraseña">
        </div>
        <div class="form-group form-check">
        </div>
        <?php
        if (isset($_POST['iniciarSesion']) && isset($aErrores['errorLogin'])) {
            echo '<div class="alert alert-danger" role="alert">';
            echo $aErrores['errorLogin'];
            echo '</div>';
        }
        ?>
        <button type="submit" name="iniciarSesion" class="btn btn-primary">Iniciar Sesión</button>
        <button type="submit" name="volver" class="btn btn-secondary" onclick="self.close()" style="float:right;">Salir de la aplicación</button>
    </form>
</article>