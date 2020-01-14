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
            /**
              @author: Alex Dominguez Dominguez basado en el de Victor Martinez
             */
            //inicializar el array asociativo
            $salarioSemana = 0;

            $arraySueldo = [// Array con los días de la semana y el sueldo
                "Lunes" => 40,
                "Martes" => 10,
                "Miercoles" => 70,
                "Jueves" => 40,
                "Viernes" => 30,
                "Sabado" => 50,
                "Domingo" => 20
            ];

            echo '<h2>Muestra del Array con EACH</h2>';
            while ($salarioDiario = each($arraySueldo)) { //bucle para recorrer el array $arraySueldo usando each
                echo 'El ' . $salarioDiario[0] . " cobra " . $salarioDiario[1] . ' euros' . '<br>'; //mensaje de salida con el dia y el sueldo de ese dia
                $salarioSemana += $salarioDiario[1]; //sumamos el salario diario de cada dia
            }
            echo 'Sueldo total: ' . $salarioSemana . ' euros'; //muestra el total del salario
            $salarioSemanal = 0; //reiniciamos el acumulador para las posteriores operaciones
            reset($arraySueldo); //reseteamos el array

            echo '<h2>Muestra del Salario con KEY, CURRENT Y NEXT</h2>';
            while (key($arraySueldo) != null) { //bucle para recorrer el array $arraySueldo usando key
                echo 'El ' . key($arraySueldo) . ' cobra ' . current($arraySueldo) . ' euros' . '<br>'; //mensaje de salida usando key y current
                $salarioSemanal += current($arraySueldo); //sumamos el salario diarion de cada dia
                next($arraySueldo); //pasa al siguiente valor 
            }
            echo 'Sueldo total ' . $salarioSemanal . ' euros'; //muestra el total del salario
            $salarioSemana = 0;
            reset($arraySueldo);

            echo '<h2>Muestra del Array con FOR EACH</h2>';
            foreach ($arraySueldo as $dia => $sueldoDiario) { //bucle que recorre el array
                echo 'El ' . $dia . ' ha cobrado ' . $sueldoDiario . ' euros' . "<br>"; //mensaje de salida
                $salarioSemana += $sueldoDiario; //operacion
            }

            echo 'Sueldo total: ' . $salarioSemana; //resultado de la suma de los datos del array
            ?>
        </div>

    </body>
</html> 
