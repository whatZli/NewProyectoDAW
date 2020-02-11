<?php

//---Api accuweather
//$provincia = 303121;
//if (isset($_POST['send'])) {
//    $provincia = $_POST['city'];
//    if ($provincia != null) {
//        
//    } else {
//        $provincia = 303121;
//    }
//}
//$apiURL = 'http://dataservice.accuweather.com/forecasts/v1/daily/1day/' . $provincia . '?apikey=N80aDXLfQnfRczkqPgbifxQQ9Vt5z9EX&language=es&metric=true';
//$content = file_get_contents($apiURL);
//
//if ($content) {
//    $jsonObject = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $content), true);
//
////Esta es la unica manera que tengo de sacar la localidad del tiempo del JSON
//    $url = $jsonObject['Headline']['Link'];
//    $cadena = explode("/", $url);
//    $provincia = ucfirst($cadena[5]);
//
//    $fechaEfectiva = $jsonObject['Headline'];
//    $minima = $jsonObject['DailyForecasts'][0]['Temperature']['Minimum']['Value'];
//    $maxima = $jsonObject['DailyForecasts'][0]['Temperature']['Maximum']['Value'];
//    $tiempoHoras = $jsonObject['Headline']['Link'];
//    $prevision = $jsonObject['Headline']['Text'];
//}else{
//    $errorAccuWeather="Se ha alcanzado el máximo de conexiones a esta Api";
//}
$errorAccuWeather="Se ha alcanzado el máximo de conexiones diarias a esta Api";

//---Api propia
$articulo = 0;
if (isset($_POST['send2'])) {
    $articulo = $_POST['article'];
    if ($articulo != null) {
        
    } else {
        $articulo = 0;
    }
}
$articulo = $articulo * 1;
$apiURL2 = "http://daw205.sauces.local/".$_SERVER['PHP_SELF'] . '?pag=ownApi&codArticle='.$articulo;
$content2 = file_get_contents($apiURL2);
$jsonObject2 = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $content2), true);

//var_dump($jsonObject2);
$codigo=$jsonObject2['articulo']['codigo'];
$titulo=$jsonObject2['articulo']['titulo'];


$_SESSION['vista'] = $vistas['rest']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    