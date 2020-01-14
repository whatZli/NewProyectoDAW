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
            <h1> Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante
                la semana. (Array asociativo con los nombres de los días de la semana).</h1>
            <?php
            $salario = 0;
            $arraySueldo = [// Array con los días de la semana y el sueldo
                "Lunes" => 40,
                "Martes" => 10,
                "Miercoles" => 70,
                "Jueves" => 40,
                "Viernes" => 30,
                "Sabsdo" => 50,
                "Domingo" => 20
            ];

            foreach ($arraySueldo as $dia => $sueldoDiario) { //bucle que recorre el array
                echo 'El ' . $dia . ' ha cobrado ' . $sueldoDiario . ' euros' . "<br>"; //mensaje de salida
                $salario += $sueldoDiario; //operacion
            }

            echo 'Sueldo total: ' . $salario; //resultado de la suma de los datos del array
            ?>
        </div>

    </body>
</html> 