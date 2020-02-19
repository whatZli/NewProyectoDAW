<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Alex Dominguez Dominguez"/>
        <meta name="generator" content="notepad++"/>
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" type="image/png" href="../../core/images/favicon.png"/>
        <title>Alex Dominguez</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="webroot/css/style.css" rel="stylesheet" type="text/css" title="Default style">
        <link href="webroot/css/about.css" rel="stylesheet" type="text/css" >
        <link href="webroot/css/articles.css" rel="stylesheet" type="text/css" >

        <script src="webroot/js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="webroot/js/script.js" type="text/javascript"></script>
        <script src="webroot/js/validateContactForm.js" type="text/javascript"></script>
        
        	
        <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script><!-- Captcha de google-->
        <style></style>
    </head>
    <body >
        <div class="imagenFondo">
            <picture>
                <source media="(min-width: 1150px)" srcset="https://w.wallhaven.cc/full/j8/wallhaven-j891y5.jpg">
                <source media="(min-width: 750px)" srcset="https://w.wallhaven.cc/full/6k/wallhaven-6kk7o6.jpg">
                <img src="https://w.wallhaven.cc/full/48/wallhaven-4825xo.jpg" alt="Bromo" style="height:400px; width:100%">
            </picture>
        </div>
        <div class="container">
            <div class="contain-top">
                <nav>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=home"; ?>"><li>Home</li></a>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=articles"; ?>"><li>Articles</li></a>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=contact"; ?>"><li>Contact</li></a>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=about"; ?>"><li>About</li></a>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=rest"; ?>"><li>Rest</li></a>
                </nav>
                <div class="title">
                    <h1>Mounts</h1>
                    <h2>on Earth</h2>
                    <h5>by Alex Domínguez</h5>
                </div>
            </div>
            <div class="main">
                <div class="aside-left"></div>
                <div class="content">
                    <?php
                    //Se carga la vista que esté seleccionada en la variable de Session
                    require_once $_SESSION['vista'];
                    ?>
                </div>              

                <div class="aside-right"></div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-top"></div>
            <div class="footer-bottom">
                <div class="footer-bottom-left">&copy 2020. All Rights Reserved.</div>
                <div class="footer-bottom-right">
                    <div class="footer-bottom-right-left">
                        <a href="<?php echo $_SERVER['PHP_SELF'] . "?pag=administrator"; ?>"><li>Admin page</li></a>
                        <li>Role user: <?php if(!isset($_SESSION['user'])){echo 'Invited';} ?></li>
                        <a target="_blank" href="https://github.com/whatZli/NewProyectoDAW/tree/master/proyectoDWES/proyectoTema6/Proyecto19-20"><li>Git hub project</li></a>
                    </div>
                    <div class="footer-bottom-right-center">
                        <li>PHP Doc</li>
                        <a href="doc/documentacion.pdf" target="_blank"><li>Documentación<br> sobre la <br>aplicación</li></a>
                    </div>
                    <div class="footer-bottom-right-right">
                        <a target="_blank" href="http://daw205.sauces.local/"><li>Autor´s Web</li></a>
                        <a href="doc/tema2.pdf" target="_blank"><li>Tools used</li></a>
                        <a target="_blank" href="https://dribbble.com/shots/2973869-Stories/attachments/619158"><li>Imitated Web</li></a>
                        <li>RSS</li>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>