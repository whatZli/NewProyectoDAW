<article id="a1">

    <form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <button type="submit" name="iniciarSesion" class="seleccionado btn btn-secondary">Iniciar Sesión</button>
        <button type="submit" name="registro" class="menu btn btn-primary" style="float:right;">Registro</button>

        <h1>Formulario de Registro</h1>
        <article id="a2">
            <form name="registro" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="codUser">Código de usuario</label>
                    <input type="text" name="codUser" style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" id="codUser" aria-describedby="codUser" placeholder="Introduce código de usuario" value="<?php
                    if (isset($_POST['registrar']) && !isset($aErrores['codUserDuplicado']) && !isset($aErrores['codUser'])) {
                        echo $_POST['codUser'];
                    }
                    ?>">

                </div>
                <div class="form-group">
                    <label for="descUser">Descripción</label>
                    <input type="text" name="descUser" style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" id="descUser" aria-describedby="descUser" placeholder="Introduce descripción del usuario" value="<?php
                    if (isset($_POST['registrar']) && !isset($aErrores['descUser']) && !isset($aErrores['codUserDuplicado'])) {
                        echo $_POST['descUser'];
                    }
                    ?>">
                           <?php
                           if (isset($aErrores['descUser'])) {
                               echo '<div class="alert alert-danger" role="alert">';
                               echo 'Introduce una descripción válida';
                               echo '</div>';
                           }
                           ?>
                </div>
                <div class="form-group"> 
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="password" style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" id="exampleInputPassword1" placeholder="Introduce contraseña">
                    <?php
                    if (isset($aErrores['password'])) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo 'Introduce una contraseña válida';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="form-group"> 
                    <label for="exampleInputPassword2">Repita la contraseña</label>
                    <input type="password" name="password" style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" id="exampleInputPassword2" placeholder="Repita la contraseña">
                    <?php
                    if (isset($aErrores['password'])) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo 'Introduce una contraseña válida';
                        echo '</div>';
                    }
                    ?>
                </div>

                <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
                <button type="submit" name="volver" class="btn btn-secondary" onclick="self.close()" style="float:right;">Salir de la aplicación</button>
            </form>
        </article>
    </form>
</article>