<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Alex Dominguez Dominguez"/>
        <meta name="generator" content="notepad++"/>
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <link rel="shortcut icon" type="image/png" href="../../core/images/favicon.png"/>
        <title>Alex Dominguez</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="webroot/css/styleR.css" rel="stylesheet" type="text/css" title="Default style">
        <link href="webroot/css/about.css" rel="stylesheet" type="text/css" >
        <link href="webroot/css/articles.css" rel="stylesheet" type="text/css" >
        <style></style>
    </head>
    <body >

        <div class="container">
            <div class="main">
                
                    <?php
                    //Se carga la vista que esté seleccionada en la variable de Session
                    require_once $_SESSION['vista'];
                    ?>
                
            </div>
        </div>
        <div class="footer">
            <div class="footer-top"></div>
            <div class="footer-bottom">
                <div class="footer-bottom-left">&copy 2020. All Rights Reserved.</div>
                <div class="footer-bottom-right">
                    <div class="footer-bottom-right-left">
                        <li>Role user: <?php if (!isset($_SESSION['usuarioDAW2051920'])) {
                        echo 'Invited';
                    } {
                        echo $_SESSION['usuarioDAW2051920']->getTipo_usuario();
                    } ?></li>
                        <li>Name: <?php echo $_SESSION['usuarioDAW2051920']->getNom_usuario(); ?></li>
                    </div>
                    <div class="footer-bottom-right-center">
                        <li>PHP Doc</li>
                       <a href="doc/documentacion.pdf" target="_blank"><li>Documentación<br> sobre la <br>aplicación</li></a>
                    </div>
                    <div class="footer-bottom-right-right">
                        <a target="_blank" href="http://daw205.sauces.local/"><li>Autor´s Web</li></a>
                        <li>Tools used</li>
                        <a target="_blank" href="https://dribbble.com/shots/2973869-Stories/attachments/619158"><li>Imitated Web</li></a>
                        <li>RSS</li>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>