<!-------------------Container Principal------------------------>
<div class="container">
    <div class="container-top">
        <div class="ultimos-contenidos">
            <br>
            <br>
            <div>Últimos contenidos</div>
            <br>
            <br>
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
        <a class="asignatura dwes" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwes"; ?>">
            <div>
                <span>DWES</span>
            </div>
        </a>
        <a class="asignatura dwec" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=dwec"; ?>">
            <div>
                <span>DWEC</span>
            </div>
        </a>
        <a class="asignatura diw" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=diw"; ?>">
            <div>
                <span>DIW</span>
            </div>
        </a>
        <a class="asignatura daw" href="<?php echo $_SERVER['PHP_SELF'] . "?pag=daw"; ?>">
            <div>
                <span>DAW</span>
            </div>
        </a>
    </div>
</div>