<form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <button type="submit" name="iniciarSesion" class="btn-menu btn btn-secondary">Iniciar Sesión</button>
    

    <div class="contenedor">
        <div class="contenido">
            <div class="titulo">Registrar usuario</div>
            <div class="form-group">
                <label for="codUser">Código de usuario</label>
                <input type="text" name="codUser" class="form-control" id="codUser" aria-describedby="codUser" placeholder="Introduce código de usuario" value="<?php
                if (isset($_POST['registrar']) && !isset($aErrores['codUserDuplicado']) && !isset($aErrores['codUser'])) {
                    echo $_POST['codUser'];
                }
                ?>">

            </div>
            <div class="form-group">
                <label for="descUser">Descripción</label>
                <input type="text" name="descUser" class="form-control" aria-describedby="descUser" placeholder="Introduce descripción del usuario" value="<?php
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
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Introduce contraseña">
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
                <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Repita la contraseña">
                <?php
                if (isset($aErrores['password2'])) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Introduce una contraseña válida';
                    echo '</div>';
                }
                ?>
            </div>

            <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
            <button type="submit" name="volver" class="btn btn-secondary" onclick="self.close()" style="float:right;">Salir de la aplicación</button>
        </div>
    </div>
</form>