<article id="a1">
    <form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h1>Formulario de acceso</h1>
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
        <button type="submit" name="volver" class="btn btn-secondary" style="float:right;">Volver atrás</button>
    </form>
</article>