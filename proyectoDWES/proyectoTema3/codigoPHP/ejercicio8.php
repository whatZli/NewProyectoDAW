<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Alex Dominguez Dominguez"/>
        <meta name="generator" content="notepad++"/>
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" type="image/png" href="../../images/favicon.png"/>
        <link href="css/reset.css"   rel="stylesheet"         type="text/css" >
        <title>Alex Dominguez</title>
        <link href="../webroot/css/style.css"  rel="stylesheet"         type="text/css" title="Default style">
    </head>
    <body>

        <div class="content">
            <h1>Mostrar la dirección IP del equipo desde el que estás accediendo</h1>
            <a href="https://norfipc.com/web/como-mostrar-direccion-ip-visitantes-paginas-web.php">Saber más acerca de como mostrar la IP del cliente</a>
            <br>
            <?php
            echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
            ?>
        </div>

    </body>
</html> 