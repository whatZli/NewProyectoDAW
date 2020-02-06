<?php

$provincia=303121;
if(isset($_POST['send'])){
    $provincia=$_POST['city'];
    if($_POST['city']!=null){}else{
        $provincia=303121;
    }
}
$apiURL = 'http://dataservice.accuweather.com/forecasts/v1/daily/1day/'.$provincia.'?apikey=NtF8zyS6EmVHu6Pr5EmhEADWYcyssyei&language=es&metric=true';
$content = file_get_contents($apiURL);
$jsonObject = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $content), true);


$fechaEfectiva = $jsonObject['Headline'];
$minima = $jsonObject['DailyForecasts'][0]['Temperature']['Minimum']['Value'];
$maxima = $jsonObject['DailyForecasts'][0]['Temperature']['Maximum']['Value'];
$tiempoHoras=$jsonObject['Headline']['Link'];
$prevision=$jsonObject['Headline']['Text'];


$_SESSION['vista'] = $vistas['rest']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    