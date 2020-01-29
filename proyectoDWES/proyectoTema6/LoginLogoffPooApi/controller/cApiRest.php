<?php
// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"] = "inicio"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}

<?php

$request = new HttpRequest();
$request->setUrl('https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/todasestaciones/');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'api_key' => 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhbGV4ZG9taW5ndWV6LmdydXBvYXVkaW9uQGdtYWlsLmNvbSIsImp0aSI6IjU3MjNmMTRiLTY0MDUtNGU3MS1hZmMzLWUzNjliMTY0MGM0YyIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTUzNzgyOTIxLCJ1c2VySWQiOiI1NzIzZjE0Yi02NDA1LTRlNzEtYWZjMy1lMzY5YjE2NDBjNGMiLCJyb2xlIjoiIn0.kBtvrQTUFv6bkcQ24KaSs5UXxK1-Y8QsuDwuaED3sOA'
));

$request->setHeaders(array(  
  'cache-control' => 'no-cache'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

echo $archivoXML;
$_SESSION['vista'] = $vistas['apiRest']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    