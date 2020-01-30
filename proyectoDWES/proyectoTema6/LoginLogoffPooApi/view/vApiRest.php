<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="volver" class="btn-menu btn btn-secondary" value="Volver"> 
    <div class="contenedor"><br><br>
        <h1>Api-Rest Aemet</h1>
        <div class="clima">

            <div class="fechaDatos">Datos generados: <?php echo $fechaDatosGenerados ?></div>
            <div class="localidad">Localidad: <?php echo $localidad ?></div>
            <div class="periodo">Periodo de prevision: <?php echo $aDatosActuales["periodo"] ?>:00 hs</div>
            <div class="cielo">Cielo: <?php echo $aDatosActuales["descripcion"] ?></div>
            <div class="cielo">Temperatura: <?php echo $temperaturaActual ?>   ºC</div>
            <div class="cielo">Sensación termica: <?php echo $sensacionTermicaActual ?>   ºC</div>

            <div class="dibujo">
                <?php
                switch ($aDatosActuales["descripcion"]) {
                    case "Cubierto":
                        echo '<div class="icon cloudy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="cloud"></div>';
                        echo '</div>';
                        break;
                    case "Bruma":
                        echo '<div class="icon cloudy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="cloud"></div>';
                        echo '</div>';
                        break;
                    case "Cubierto con lluvia escasa":
                        echo '<div class="icon rainy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="rain"></div>';
                        echo '</div>';
                        break;
                    case "Poco nuboso":
                        echo '<div class="icon sun-shower">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="sun">';
                        echo '<div class="rays"></div>';
                        echo '</div>';
                        echo '</div>';
                        break;
                }
                ?>
            </div>
        </div>


    </div>

</form>