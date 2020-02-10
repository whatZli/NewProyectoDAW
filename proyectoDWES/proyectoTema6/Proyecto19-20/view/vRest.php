<div class="apis">
    <div class="api">
        <h1>REST AccuWeather</h1>
        <h3>Information service</h3>
        <p>Info about weather of a city on the world</p>
        <?php if(!isset($errorAccuWeather)){?>
        <form method="post" name="formCity" action="<?php echo $_SERVER['PHP_SELF'] . "?pag=rest" ?>">
            <label for="city">Cod city</label>
            <input type="text" id="city" name="city" placeholder="303121">
            <input type="submit" name="send" value="Search city">
        </form>
        <h4>Location: <?php if(isset($provincia)){echo $provincia ;}?></h4>
        <p>Temp máx: <?php if(isset($maxima)){echo $maxima ;}?> ºC</p>
        <p>Temp mín: <?php if(isset($minima)){echo $minima ;}?> ºC</p>
        <p><?php if(isset($prevision)){echo $prevision ;}?></p>
        <p>View all data: <a target="_blank" style="color:blue;" href="<?php if(isset($tiempoHoras)){echo $tiempoHoras ;}?>">Click here</a></p>
        <?php }else{echo '<h5 style="background:rgba(220,220,180,0.7);color:orange; padding:10px;">'.$errorAccuWeather.'</h5>';}?>
    </div>
    <div class="api">
        <h1>Uso Api-Rest Propia</h1>
        <h3>Información de uso</h3>
        <p>Le pasamos el código de un artículo y nos devuelve todos los datos referidos a él.</p>
        <form method="post" name="formCity" action="<?php echo $_SERVER['PHP_SELF'] . "?pag=rest" ?>">
            <label for="article">Cod article</label>
            <input type="text" id="article" name="article" placeholder="35">
            <input type="submit" name="send2" value="Buscar articulo">
        </form>
        <?php if(isset($titulo)){?>
        <h4>Datos obtenidos: <?php ?></h4>
        <p>Title: <?php if(isset($titulo)){echo $titulo ;}?> </p>
        
        <p>Ver todos los datos: <a target="_blank" style="color:blue;" href="<?php echo "index.php?pag=ownApi&codArticle=".$codigo ?>">Click here</a></p>
        <?php }?>
    </div>
    <div class="api">
        <h1>Api-Rest propia</h1>
        <h3>Información de uso</h3>
        <p>La url a la que se debe solicitar la información es esta: "index.php?pag=ownApi&codArticle=['numero']". Utilizando el metodo Get pasaremos por la url
        el código (número) del artículo que necesitemos. En caso de querer obtener todos los artículos sustituiremos el número por 0</p>
        <h4>Información devuelta</h4>
        <p>Después de hacer la consulta, el servidor nos proporcionará una página web en formato JSON</p>
        <p>La estructura del fichero será el siguiente:</p>
        <pre>
array{
    artículo{
        "codigo":"num";
        "titulo":"texto";
        "descripcion":"texto";
        "imagen":"ruta de la imagen";
        "fecha_creación":"date";
        "visitas":"num";
        "usuario_creador":"texto";
    }
}</pre>
        <h4>Ejemplos de uso</h4>
        <p>Pasando el código de un artículo: <a href="index.php?pag=ownApi&codArticle=35" target="_blank" style="color:blue;">Buscar artículo</a></p>
        <p>Pasando el código 0: <a href="index.php?pag=ownApi&codArticle=0" target="_blank" style="color:blue;">Buscar todos los artículos</a></p>
    </div>
</div>
