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
        <link href="core/css/style.css" rel="stylesheet" type="text/css" title="Default style">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'><link rel="stylesheet" href="webroot/css/style2.css">

        <style>
            *{
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            body{
                background: linear-gradient(to bottom, #ffffff 0%, #aaa 100%);
                margin: 10px auto;
                color: #000;
            }
            .logo{
                color:black;
                float: left;
                font-size: 30px;
            }
            .btn-menu{
                margin-right: 15px;
                width: 150px;
                float: right;

            }
            .contenedor{
                color:black;
                width: 100%;
            }
            .contenido{
                margin: 80px auto 30px auto;
                width: 370px;
                padding: 10px 20px ;
                background: rgba(230,230,230,0.7);
                box-shadow: 10px 10px 18px -4px rgba(176,176,176,1);
            }
            .titulo{
                font-size:27px ;
                position: relative;
                right: 10px;
                color:black;
            }
            input{
                display:block;
                background:  rgba(240,240,240,0.9);
                padding: 5px 7px;
                border: 0px solid ; 
            }
            .imagenes{
                margin: auto;
            }
            .imagenes img{
                margin: auto;
                transition:0.15s linear;
                filter: grayscale(70%);
                filter: saturate(3);
            }
            .imagenes img:hover{
                filter: grayscale(0%);
                
                filter: saturate(3);
                transform: scale(1.1);
                box-shadow: 10px 10px 18px -4px rgba(176,176,176,1);
                cursor: pointer;
            }
            #topBar{}
            #content{}
            a, a:hover, a:link, a:active{
                text-decoration: none;
                color: black;
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
            .espacioDepartamentos, .espacioUsuarios{
                position: relative;

                font-family: Montserrat, sans-serif;
                width: 70%;
                background: linear-gradient(to bottom, #ffffff 0%, #CCC 100%);
                display: inline-block;
                margin-bottom: 25px;
            }
            .alta{
                background: rgba(140,240,140,0.4);
            }
            .baja{
                background: rgba(240,140,140,0.4);
            }
            table tr td img{
                width: 30px;
            }
            table tr td:nth-child(2){
                text-align: left;
                padding-left: 10px;
            }
            .cuadro{
                width: 25%;
                display: inline-block;
                float: right;
            }
            footer{
                background: rgba(111,111,111,0.2);
                display: block;
                position: static;
                margin: 0;
            }
            footer address a{
                color:black;
            }
            

            footer address a img{
                position: relative;
                width: 35px;
            }
            
        </style>
    </head>
    <body >
        <div class="logo">Login-Logout API-REST</div>
        <div id="content">
            <?php
            //Se carga la vista que esté seleccionada en la variable de Session
            require_once $_SESSION['vista'];
            ?>
        </div>
        <footer>
            <address>
                <a style="margin-left: 10%; float:left;" href="doc/pdf/tema2.pdf" target="_blank">Herramientas utilizadas</a>

                <a style="margin-left: 10%; float:left;" href="doc/pdf/tema2.pdf" target="_blank">PHP Documentor</a>
                <a style="margin-left: 10%; float:left;" href="http://daw205.sauces.local">&copy2019 Alex Dominguez</a>
                <a href="https://github.com/whatZli/NewProyectoDAW/tree/master/proyectoDWES/proyectoTema6/LoginLogoffPooApi" target="_blank"><img style="margin-left: 10%; float:left;"src="core/images/gitlab.png" alt="asd" target="_blank" width="40"/></a>
                <a href="#"><img style="float:left;"src="https://icons-for-free.com/iconfiles/png/512/rss+icon-1320168277470601076.png" alt="rss"></a>
            </address>
        </footer>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script><script  src="webroot/js/script.js"></script>

    </body>
</html>