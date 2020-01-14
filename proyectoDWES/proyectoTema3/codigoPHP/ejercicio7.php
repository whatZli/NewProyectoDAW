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
            <h1>Mostrar el nombre del fichero que se está ejecutando.</h1>

            <?php
            //Devuelve el nombre del archivo actual
            $archivo_actual = basename($_SERVER["PHP_SELF"]);

            echo $archivo_actual;
            ?>
        </div>

    </body>
</html> 