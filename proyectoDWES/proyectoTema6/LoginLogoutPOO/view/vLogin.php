<form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <button type="submit" name="registro" class="btn-menu btn btn-secondary" style="float:right;">Registro</button>
    <button  type="submit" name="iniciarSesion" class="btn-menu btn btn-primary">Iniciar Sesión</button>


    <div class="contenedor">
        <div class="contenido">
            <div class="titulo">Iniciar sesión</div>
            <div class="form-group">
                <label for="loginUsuario">Usuario</label>
                <input type="text" class="form-control" name="loginUsuario" id="loginUsuario" aria-describedby="loginUsuario" placeholder="Introduce usuario">
            </div>
            <div class="form-group">
                <label for="loginPassword">Contraseña</label>
                <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Introduce contraseña">
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
        </div>

        <div class="imagenes">
            <a href="doc/pdf/CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/images/requisitos.png" alt=""/></a>
            <a href="doc/pdf/casosDeUso.pdf" target="_blank"><img src="webroot/images/casosDeUso.png" alt=""/></a>
            <a href="doc/pdf/DiagramaDeClases.pdf" target="_blank"><img src="webroot/images/clases.png" alt=""/></a>
            <a href="doc/pdf/arbolNavegacion.pdf" target="_blank"><img src="webroot/images/arbolNavegacion.png" alt=""/></a>
            <!--<a href="doc/pdf/" target="_blank"><img src="webroot/images/mapaWeb.png" alt=""/></a>-->
            <a href="doc/pdf/almacenamiento.JPG" target="_blank"><img src="webroot/images/almacenamiento.png" alt=""/></a>
            <a href="doc/pdf/modeloFisicoDeDatos.pdf" target="_blank"><img src="webroot/images/modeloDatos.png" alt=""/></a>
        </div>

    </div>

</form>

<!--<aside>
    <h4>Información sobre el proyecto</h4>
    <a href="doc/pdf/CatalogoDeRequisitos.pdf">Catálogo de requisitos</a>
    <a href="doc/pdf/DiagramaDeClases.pdf">Diagrama de clases</a>
    <a href="doc/pdf/casosDeUso.pdf">Árbol de navegación</a>
    <a href="doc/pdf/">No - Mapa web (Estructura de ficheros)</a>
    <a href="doc/pdf/">No - Árbol de almacenamiento</a>
    <a href="doc/pdf/">No - Módelo físico de datos</a>
    <a href="doc/pdf/">No - Tecnologías utilizadas</a>
    <a href="doc/">PHP Doc</a>
</aside>-->