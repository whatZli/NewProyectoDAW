<form name="logIn" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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
            
            <button type="submit" name="iniciarSesion" class="btn btn-primary">Iniciar Sesión</button>
            <button type="submit" name="volver" class="btn btn-secondary" onclick="self.close()" style="float:right;">Salir de la aplicación</button>
            <button type="submit" name="registro" class="btn-menu btn btn-secondary" style="float:right; position: absolute; top: 30px; right:5%;">Registro</button>
        </div>
        
        
 
        <!--        <div class="imagenes">
                    <a href="doc/pdf/CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/images/requisitos.png" alt=""/></a>
                    <a href="doc/pdf/casosDeUso.pdf" target="_blank"><img src="webroot/images/casosDeUso.png" alt=""/></a>
                    <a href="doc/pdf/DiagramaDeClases.pdf" target="_blank"><img src="webroot/images/clases.png" alt=""/></a>
                    <a href="doc/pdf/arbolNavegacion.pdf" target="_blank"><img src="webroot/images/arbolNavegacion.png" alt=""/></a>
                    <a href="doc/pdf/" target="_blank"><img src="webroot/images/mapaWeb.png" alt=""/></a>
                    <a href="doc/pdf/almacenamiento.JPG" target="_blank"><img src="webroot/images/almacenamiento.png" alt=""/></a>
                    <a href="doc/pdf/modeloFisicoDeDatos.pdf" target="_blank"><img src="webroot/images/almacenamiento.png" alt=""/></a>
                </div>-->
        <div class="imagenes">
            <div class="main">
                <div class="slider slider-for">
                    <div><a href="doc/pdf/CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/images/requisitos.png" alt=""/></a></div>
                    <div><a href="doc/pdf/casosDeUso.pdf" target="_blank"><img src="webroot/images/casosDeUso.png" alt=""/></a></div>
                    <div><a href="doc/pdf/dClases.JPG" target="_blank"><img src="webroot/images/clases.png" alt=""/></a></div>
                    <div><a href="doc/pdf/arbolNavegacion.pdf" target="_blank"><img src="webroot/images/arbolNavegacion.png" alt=""/></a></div>
                    <div><a href="doc/pdf/almacenamiento.JPG" target="_blank"><img src="webroot/images/almacenamiento.png" alt=""/></a></div>
                    <div><a href="doc/pdf/modeloFisicoDeDatos.pdf" target="_blank"><img src="webroot/images/modeloDatos.png" alt=""/></a></div>
                </div>
                <div class="slider slider-nav">
                    <div><a href="doc/pdf/CatalogoDeRequisitos.pdf" target="_blank"><img  style="width: 100px;"src="webroot/images/requisitos.png" alt=""/></a></div>
                    <div><a href="doc/pdf/casosDeUso.pdf" target="_blank"><img  style="width: 100px;"src="webroot/images/casosDeUso.png" alt=""/></a></div>
                    <div><a href="doc/pdf/dClases.JPG" target="_blank"><img  style="width: 100px;"src="webroot/images/clases.png" alt=""/></a></div>
                    <div><a href="doc/pdf/arbolNavegacion.pdf" target="_blank"><img  style="width: 100px;"src="webroot/images/arbolNavegacion.png" alt=""/></a></div>
                    <div><a href="doc/pdf/almacenamiento.JPG" target="_blank"><img  style="width: 100px;"src="webroot/images/almacenamiento.png" alt=""/></a></div>
                    <div><a href="doc/pdf/modeloFisicoDeDatos.pdf" target="_blank"><img  style="width: 100px;"src="webroot/images/modeloDatos.png" alt=""/></a></div>
                </div>
                <!--                <div class="action">
                                    <a href="#" data-slide="3">go to slide 3</a>
                                    <a href="#" data-slide="4">go to slide 4</a>
                                    <a href="#" data-slide="5">go to slide 5</a>
                                </div>-->
            </div>
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