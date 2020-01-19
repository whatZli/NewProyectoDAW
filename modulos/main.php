<!-------------------Container Principal------------------------>
<div class="container">
    <div class="container-top">
        <div class="ultimos-contenidos">
            <h4>Contador de visitas</h4> 
            <div>
                <span>DWES:&nbsp;</span>
                <span id="contDwes"></span>
            </div>
            <div>
                <span>DWEC:&nbsp;</span>
                <span id="contDwec"></span>
            </div>
            <div>
                <span>DIW:&nbsp;</span>
                <span id="contDiw"></span>
            </div>
            <div>
                <span>DAW:&nbsp;</span>
                <span id="contDaw"></span>
            </div>
            <br>
            <div>
                <h4>Plantilla</h4>
                <a href="#" id="cambiarFondo">Cambiar Fondo</a>
                <a href="#" id="cambiarLetra">Cambiar Letra</a>
            </div>
        </div>
        <div class="contenido">
            <h1>DAW</h1>
            <h2>Desarrollo de Aplicaciones Web</h2>
            <h3>Alex Dominguez</h3>
        </div>
        <div id="digital">
            <div id="hora">
                <div id="horas">
                    <?php
                    $d = new DateTime;
                    echo $d->format('H');
                    ?>
                </div>
                <div id="minutos"><?php echo $d->format('i') ?></div>
                <div id="segundos"><?php echo $d->format('s') ?></div>
            </div>
        </div>
    </div>
    <div class="container-asignaturas">
        <a id="DWES" class="asignatura dwes" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwes"; ?>">
            <div>
                <span>DWES</span>
            </div>
        </a>
        <a id="DWEC" class="asignatura dwec" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec"; ?>">
            <div>
                <span>DWEC</span>
            </div>
        </a>
        <a id="DIW" class="asignatura diw" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=diw"; ?>">
            <div>
                <span>DIW</span>
            </div>
        </a>
        <a id="DAW" class="asignatura daw" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=daw"; ?>">
            <div>
                <span>DAW</span>
            </div>
        </a>
    </div>
</div>