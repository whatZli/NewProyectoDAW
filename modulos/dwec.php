<!-------------------Container DWEC------------------------>
<div class="container">
    <div class="contenido-asignatura">
        <h1>DWEC</h1>
        <h2>Desarrollo Web Entorno Cliente</h2>
    </div>
    <div class="contenido-asignaturas">
        <button type="button" class="collapsible tema dwec">Tema 1. Navegadores y HTML CSS</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema1/ej1/navs.pdf" target="_blank">Navegadores (PDF)</a>
            <a class="ejercicio" href="proyectoDWEC/tema1/ej2/index.html" target="_blank">HTML + CSS</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 2. Tipos de datos y bucles</button>
        <div class="lista">
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec2-1"; ?>" target="_blank">Tipos de datos</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec2-2"; ?>" target="_blank">Estructuras de control</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 3. Clases</button>
        <div class="lista">
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-1"; ?>" target="_blank">Array</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-2"; ?>" target="_blank">String</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-3"; ?>" target="_blank">Math</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-4"; ?>" target="_blank">Date</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-5"; ?>" target="_blank">Object</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-6"; ?>" target="_blank">Funciones</a>
            <a class="ejercicio" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec3-7"; ?>" target="_blank">Expresiones regulares</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 4. Formularios</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema4/ej1/ej1/ej.html" target="_blank">Formulario I</a>
            <a class="ejercicio" href="" target="_blank">(Falta) Formulario II</a>
            <a class="ejercicio" href="proyectoDWEC/tema4/ej3/ej1/ej.html" target="_blank">(Falta el 2º) Formulario select y fichero</a>
            <a class="ejercicio" href="proyectoDWEC/tema4/plantillaFormulario/index.html" target="_blank">Plantilla</a>
            <a class="ejercicio" href="proyectoDWEC/tema4/ej4/3enRaya/index.html" target="_blank">Eventos</a>
            <a class="ejercicio" href="" target="_blank">(Falta) Eventos formulario</a>
            <a class="ejercicio" href="proyectoDWEC/tema4/ej4/formularioAlumnoProfesor/index.html" target="_blank">Formulario final</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 5. DOM</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema5/ejemploTema5.html" target="_blank">Ejemplo. Mensaje entre ventanas</a>
            <a class="ejercicio" href="proyectoDWEC/tema5/ejemploFrame/principal.html" target="_blank">Ejemplo. Frames</a>
            <a class="ejercicio" href="proyectoDWEC/tema5/tiempoReloj/tiempo.html" target="_blank">Ejemplo. Tiempo</a>
            <a class="ejercicio" href="proyectoDWEC/tema5/cambioColor/index.html" target="_blank">5.1 Cambiar color ventana</a>
            <a class="ejercicio" href="proyectoDWEC/tema5/cronometro/index.html" target="_blank">5.1 Cronómetro</a>
            <a class="ejercicio" href="proyectoDWEC/tema5/formularioAlumnoProfesor/index.html" target="_blank">DOM I</a>
            <a class="ejercicio" href="" target="_blank">(Falta) DOM II</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 6. jQuery</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema6/ej1/index.html" target="_blank">Formulario Alumno profesor con jQuery</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 7. Almacenamiento</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema7/almacenamiento/index.html" target="_blank">Almacenamiento Cookies</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/proyectoLoginLogoff/codigoPHP/login.php" target="_blank">Almacenar usuario en SessionStorage</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/almacenamientoWEBSQL/index.html" target="_blank">Almacenamiento webSql</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/almacenamientoIndexedDB/index.html" target="_blank">Almacenamiento IndexedDB</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/mtmoDepartIndexedDB/index.html" target="_blank">Ejercicio Mto Departamentos IndexedDB</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/almacenamientoXML/index.html" target="_blank">Ejemplo Transform XML con JS</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/xml/index.html" target="_blank">Ejercicio XML a JS</a>
            <a class="ejercicio" href="proyectoDWEC/tema7/json/index.html" target="_blank">Ejercicio JSON a JS</a>
        </div>
        <button type="button" class="collapsible tema dwec">Tema 8. Ajax</button>
        <div class="lista">
            <a class="ejercicio" href="proyectoDWEC/tema8/ejemploAjax/index.html" target="_blank">Ejemplo Ajax</a>
            <a class="ejercicio" href="proyectoDWEC/tema8/ejemploAjax/index.html" target="_blank">Ejercicio Ajax Alumno/profesor</a>
        </div>
        <script type="text/javascript" src="core/js/collapsible.js"></script>
    </div>
</div> 