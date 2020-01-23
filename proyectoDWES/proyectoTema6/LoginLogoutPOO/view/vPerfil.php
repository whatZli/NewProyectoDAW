<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="contenedor">
        <div class="contenido">
            <div class="titulo">Modificar perfil</div>

            <div class="form-group">
                <label for="loginUsuario" style="display: inline-block;">Usuario</label>
                <input class="form-control" disabled type="text" name="loginUsuario" id="loginUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosUsuarioVista['codigo']; ?>">
            </div>
            <div class="form-group">
                <label for="descUsuario">Descripción</label>
                <input class="form-control" type="text" name="descUsuario"  id="descUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosUsuarioVista['descUsuario']; ?>">
            </div>
            <div class="form-group">
                <label for="sel1">Perfil</label>
                <select disabled name="perfil" class="form-control" id="sel1">
                    <option value="<?php echo $aDatosUsuarioVista['perfil']; ?>"><?php echo $aDatosUsuarioVista['perfil']; ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="numConUsuario">Veces conectado</label>
                <input class="form-control" disabled type="text" name="numConUsuario" id="numConUsuario" aria-describedby="numConUsuario" value="<?php echo $aDatosUsuarioVista['contadorAccesos']; ?>">
            </div>
            <div class="form-group">
                <label for="uConexion">Conexión anterior</label>
                <input class="form-control" disabled type="text" name="uConexion" id="uConexion" aria-describedby="uConexion" value="<?php echo $aDatosUsuarioVista['ultimaConexion']; ?>">
            </div>

            <input type="submit" name="volver" style="width: 100px;" class="btn btn-secondary" value="Volver">
            <input type="submit" name="guardar" style="width: 100px;" class="btn btn-primary" value="Guardar">
            <input type="submit" name="borrar" style="width: 120px;" class="btn btn-warning" value="Borrar cuenta">
        </div>
    </div>
</form>
<br><br>