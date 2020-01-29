<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="volver" class="btn-menu btn btn-secondary" value="Volver"> 
    <div class="contenedor"><br><br>
        <h1>Api-Rest Aemet</h1>
        <div class="clima">
            <div class="localidad">Localidad: <?php echo $localidad ?></div>
            <div class="periodo">Periodo de prevision: <?php echo $aDatosActuales["periodo"] ?>hs</div>
            <div class="cielo">Estado del cielo: <?php echo $aDatosActuales["descripcion"] ?></div>
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
                }
                ?>
            </div>
        </div>


    </div>

</form>