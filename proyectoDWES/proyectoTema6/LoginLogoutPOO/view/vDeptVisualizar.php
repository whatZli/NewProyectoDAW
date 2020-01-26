<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="contenedor">
        <div class="contenido">
            <div class="titulo">Datos del Departamento</div>
            <div class="form-group">
                <label for="loginUsuario" style="display: inline-block;">Código</label>
                <input class="form-control" disabled type="text" name="loginUsuario" id="loginUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosDepartamentoVista['codigo']; ?>">
            </div>
            <div class="form-group">
                <label for="descUsuario">Descripción</label>
                <input class="form-control" disabled type="text" name="descUsuario"  id="descUsuario" aria-describedby="loginUsuario" value="<?php echo $aDatosDepartamentoVista['descripcion']; ?>">
            </div>
            <div class="form-group">
                <label for="vNegocio">Volumen de negocio</label>
                <input class="form-control" disabled type="text" name="descUsuario"  id="vNegocio" aria-describedby="loginUsuario" value="<?php echo $aDatosDepartamentoVista['vNegocio']; ?>">
            </div>
            
            <?php if($aDatosDepartamentoVista['fechaBaja']!=null){?>
            <div class="form-group">
                <label for="numConUsuario">Fecha de baja</label>
                <input class="form-control" disabled type="text" name="numConUsuario" id="numConUsuario" aria-describedby="numConUsuario" value="<?php echo $aDatosDepartamentoVista['fechaBaja']; ?>">
            </div>
            <?php } ?>
            <input type="submit" name="volver" style="width: 100px;" class="btn btn-secondary" value="Volver">
        </div>
    </div>
</form>
<br><br>