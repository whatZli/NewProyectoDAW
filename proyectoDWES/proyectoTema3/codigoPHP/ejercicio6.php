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
<h1> Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
</h1>
<a href="https://www.bufa.es/php-sumar-restar-dias-fecha/">Sumar o restar días a una fecha</a><br>
<?php 
	$fecha = date('Y-m-j');
	$nuevafecha = strtotime ( '+60 day' , strtotime ( $fecha ) ) ;
	$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
	echo $nuevafecha;
?>
</div>
        
    </body>
</html> 
