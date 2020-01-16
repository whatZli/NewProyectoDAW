<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Alex Dominguez Dominguez"/>
        <meta name="generator" content="notepad++"/>
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" type="image/png" href="../../core/images/favicon.png"/>
        <link href="css/reset.css"   rel="stylesheet"         type="text/css" >
        <title>Alex Dominguez</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../webroot/css/style.css"  rel="stylesheet"         type="text/css" title="Default style">
        <style>
            body{
                box-sizing: border-box;
            }
            #content{
                width:600px;
                height: 500px;
                margin: auto;
                margin-top: 70px;
                background: linear-gradient(to right,  hsl(211, 20%, 30%, 85%), hsl(211, 40%, 30%, 45%), hsl(211, 100%, 30% , 20%));
                padding: 50px;
                border-radius: 10px;
                color:white;
            }
            a, a:hover, a:link, a:active{
                text-decoration: none;
                color: white;
            }
            .menu{
                display:inline-block;
                width:49%;
                text-align: center;
                background: #0069D9;
                padding: 15px 20px;
                color:white;
                border-radius: 7px;
                font-family: Montserrat, sans-serif;
                position: relative;
                transition: 0.3s ease;
            }
            .menu:hover{
                background: linear-gradient(to right,  hsl(211, 20%, 30%, 85%), hsl(211, 40%, 30%, 45%), hsl(211, 100%, 30% , 20%));
            }
            .seleccionado{
                display:inline-block;
                width:49%;
                text-align: center;
                background: linear-gradient(to right,  hsl(211, 20%, 30%, 85%), hsl(211, 40%, 30%, 45%), hsl(211, 100%, 30% , 20%));
                padding: 15px 20px;
                color:white;
                border-radius: 7px;
                font-family: Montserrat, sans-serif;
                position: relative;
                transition: 0.3s ease;
            }
            button{
                width:100%;
                margin-bottom: 10px;
            }
            article{
                width:500px;
                height: 400px;
                position:absolute;
                color:white;
            }
            .idioma{
                margin-top: 100px;
                display: block;
                text-align: center;
            }
            .idioma a{
                margin: 0 20px 10px 20px;
            }
        </style>
    </head>
    <body >
        <div id="topBar">Proyecto LogIn-LogOut</div>
        <nav class="idioma">
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idioma=cas">Castellano</a>
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idioma=eng">English</a>
        </nav>
        <div id="content">
            <nav >
                <article id="a1">
                    <?php require_once $vista; ?>
                </article>
            </nav>

        </div>
        <!--<footer>
            <address>
                <a href="../../../indexProyectoTema5.html	">&copy2019 Alex Dominguez</a>
                <a href="http://daw-usgit.sauces.local/Alex/proyectoLogInLogOff/tree/master" target="_blank"><img src="../images/gitlab.png" alt="asd" width="40" style="float:right;"/></a>
            </address>
        </footer>-->
    </body>
</html>