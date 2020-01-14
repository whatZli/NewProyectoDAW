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
            <?php
            $heredoc = <<< EOD
			Texto que se va a 
			almacenar
EOD;
            ?>
            <a href="https://diego.com.es/heredoc-y-nowdoc-en-php">Definición de heredoc</a><br>
            <p>El contenido de la variable heredoc es: 
                <?php
                echo $heredoc;
                ?>
            </p>
        </div>

    </body>
</html>