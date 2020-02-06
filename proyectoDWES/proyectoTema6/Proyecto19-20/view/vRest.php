<div class="api">
    <h1>REST AccuWeather</h1>
    <h3>Information service</h3>
    <p>Info about weather of a city on the world</p>
    <form method="post" name="formCity" action="<?php echo $_SERVER['PHP_SELF'] . "?pag=rest" ?>">
        <label for="city">Cod city</label>
        <input type="text" id="city" name="city" placeholder="303121">
        <input type="submit" name="send" value="Search city">
    </form>
    <p>Temp máx: <?php echo $maxima ?> ºC</p>
    <p>Temp mín: <?php echo $minima ?> ºC</p>
    <p><?php echo $prevision ?></p>
    <p>View all data: <a target="_blank" style="color:blue;" href="<?php echo $tiempoHoras ?>">Click here</a></p>
</div>