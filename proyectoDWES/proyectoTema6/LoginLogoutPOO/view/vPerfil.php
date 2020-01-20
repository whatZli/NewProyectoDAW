<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>Modificar perfil</h1>
    <form action="<?php echo 'editarPerfil.php' ?>" method="post">
                <div class="form-group">
                    <label for="loginUsuario" style="display: inline-block;">Usuario</label>
                    <input style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" disabled type="text" name="loginUsuario" id="loginUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosUsuarioVista['codigo']; ?>">
                </div>
                <div class="form-group">
                    <label for="descUsuario">Descripción</label>
                    <input style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" type="text" name="descUsuario"  id="descUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosUsuarioVista['descUsuario']; ?>">
                </div>
                <div class="form-group">
                    <label for="sel1">Perfil</label>
                    <select disabled name="perfil" style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" id="sel1">
                        <option value="<?php echo $_SESSION['perfilDAW205AppLogInLogOut']; ?>"><?php echo $aDatosUsuarioVista['perfil']; ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numConUsuario">Veces conectado</label>
                    <input style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" disabled type="text" name="numConUsuario" id="numConUsuario" aria-describedby="numConUsuario" value="<?php echo $aDatosUsuarioVista['contadorAccesos']; ?>">
                </div>
                <div class="form-group">
                    <label for="uConexion">Conexión anterior</label>
                    <input style="display: inline-block; padding: 5px 7px; border-radius: 4px;float: right; width: 300px;" disabled type="text" name="uConexion" id="uConexion" aria-describedby="uConexion" value="<?php echo $aDatosUsuarioVista['ultimaConexion']; ?>">
                </div>
                
                <input type="submit" name="volver" class="btn btn-secondary" value="Volver">
                
            </form>
</form>
<br><br>