<?php

// Si se pulsa el botón para salir
if (isset($_POST['volver'])) {
    $_SESSION["pagina"] = "inicio"; //Se guarda en la variable de sesión la ventana de registro
    header('Location: index.php'); //Se le redirige al index
    exit;
}
if (isset($_POST['cambiar'])) {
    $_SESSION["pagina"] = "apiRest"; //Se guarda en la variable de sesión la ventana de registro
    if($_POST['predes22']!=null){
        $_SESSION["cod_pueblo"]=$_POST['predes22'];
    }
    header('Location: index.php'); //Se le redirige al index
    exit;
}
/* Método para solicitar los datos a la AEMET */
//En la URL va el municipio concreto con el código postal y la api_key del usuario
$curl = curl_init();

    if(!isset($_SESSION['cod_pueblo'])){
        $url="https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/49021/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhbGV4ZG9taW5ndWV6LmdydXBvYXVkaW9uQGdtYWlsLmNvbSIsImp0aSI6IjBjY2I3MjgzLWJjNjQtNDg3Ny1hZTVjLTY2NDg3ODZjNWE4YSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTgwMjM2MDY3LCJ1c2VySWQiOiIwY2NiNzI4My1iYzY0LTQ4NzctYWU1Yy02NjQ4Nzg2YzVhOGEiLCJyb2xlIjoiIn0.tUR8XOE-mvUzG3kTU-yLvzSDc4zV8he5gSCntosMuBU";
    }else{
        $id=$_SESSION["cod_pueblo"];
        $str = ltrim($id, 'id');
        $url="https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/".$str."/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhbGV4ZG9taW5ndWV6LmdydXBvYXVkaW9uQGdtYWlsLmNvbSIsImp0aSI6IjBjY2I3MjgzLWJjNjQtNDg3Ny1hZTVjLTY2NDg3ODZjNWE4YSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTgwMjM2MDY3LCJ1c2VySWQiOiIwY2NiNzI4My1iYzY0LTQ4NzctYWU1Yy02NjQ4Nzg2YzVhOGEiLCJyb2xlIjoiIn0.tUR8XOE-mvUzG3kTU-yLvzSDc4zV8he5gSCntosMuBU";
    }
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {//Si ha un error
    echo "cURL Error #:" . $err;
    echo "Error en la conexión";
} else {//Si no hay ningún error se coje la URL donde se almacenan todos los datos de la localidad
    $urlGenerica = explode(",", $response);
    $urlValida = explode('"', $urlGenerica[2]);
    $urlMunicipio = $urlValida[3];


    $cadena = file_get_contents($urlMunicipio);

    $info = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $cadena), true);

    //Fecha de la generación de datos
    $fechaDatosGenerados = $info[0]["elaborado"];
    //información correspondiente a la localidad
    $localidad = ($info[0]["nombre"]);

    //Comprueba todas las horas del fichero hasta que la hora del fichero coincide con la hora actual
    //Una vez que coincide guarda los datos correspondeientes a esa hora en un array y sale del bucle
    for ($hora = 0; $hora < 24; $hora++) {
        if (isset($info[0]["prediccion"]["dia"][1]["estadoCielo"][$hora]["periodo"])) {
            if ($info[0]["prediccion"]["dia"][1]["estadoCielo"][$hora]["periodo"] === date("H")) {
                $aDatosActuales = $info[0]["prediccion"]["dia"][1]["estadoCielo"][$hora];
                $temperaturaActual = $info[0]["prediccion"]["dia"][1]["temperatura"][$hora]["value"];
                $sensacionTermicaActual = $info[0]["prediccion"]["dia"][1]["sensTermica"][$hora]["value"];
                
                //Los datos de la velocidad y la direccion del viento sólo están en las horas pares. Por eso se comprueba si existe
                //la variable, y sino existe se le pone la hora anterior
                if(!isset($info[0]["prediccion"]["dia"][1]["vientoAndRachaMax"][$hora]['direccion'])){
                    $hora=($hora*1);
                    $horaAnterior=$hora-1;
                }else{
                    $horaAnterior=$hora;
                }
                $velocidadViento = $info[0]["prediccion"]["dia"][0]["vientoAndRachaMax"][$horaAnterior]['velocidad']['0'];
                $direccionViento = $info[0]["prediccion"]["dia"][0]["vientoAndRachaMax"][$horaAnterior]['direccion']['0'];
                
                $hora=25;//La hora = a 25 para que salga del bucle for directamente
            }
        }
    }

    //Ejemplo JSON a String
    //    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
    //
    //$json2=(json_decode($json));
    //print_r($json2->{"c"});
}


$_SESSION['vista'] = $vistas['apiRest']; //Se carga en la sesión de vistas, la que queremos
require_once $vistas['layout']; //se incluye la vista que contiene la $_SESSION['vista']
    