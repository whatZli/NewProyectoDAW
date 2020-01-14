console.log("Script iniciado");
function cargar() {
    //Escribir una cookie
    //Por defecto = Sesion
    //Por defecto path = carpeta donde se ejecuta la cookie
    document.cookie = "sitios=DAW01";

    //Cambiar de ruta una cookie
    document.cookie = "sitios=DAW02;path=/";

    //Caduque dentro de 5 minutos
    //Formato UTC
    var fecha = new Date();
    fecha.setTime(fecha.getTime() + 1000 * 60 * 5);
    document.cookie = "sitios=DAW03;expires=" + fecha.toUTCString();

    //Leer una cookie
    console.log(document.cookie);
    var buscarCookie="DAW02";//Valor de la cookie que queremos buscar
    var cookies = document.cookie.split(";");
    sitio2 = cookies[2].split("=");

    for (var i = 0; i < cookies.length; i++) {
        sitio = cookies[i].split("=");
        valor = sitio[1];
        if(valor.trim()===buscarCookie){
            console.log("Nombre de la cookie: "+sitio[0]+" tiene el valor: "+buscarCookie);
        }
    }

    //Para borrar cookie sólo ha que cambiar el tiempo de vida
    fecha.setTime(0)
    document.cookie = "sitios=DAW01;expires="+fecha.toUTCString();
}
window.addEventListener('load', cargar(), false);