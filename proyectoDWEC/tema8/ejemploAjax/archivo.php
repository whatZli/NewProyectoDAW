<?php
/*Primer ejemplo*/
echo 'Se ha cargado el fichero PHP';
echo date('l jS \of F Y h:i:s A')."<br>";

$array= ["lunes","martes","miercoles","jueves","viernes"];

$get=$_POST['num'];

echo $array[$get-1];

