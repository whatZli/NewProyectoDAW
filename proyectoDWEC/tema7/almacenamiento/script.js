console.log("Script iniciado");

//Librería jqcookie para manejar cookies
$(function(){
    $.cookie('jqcookie','ncesita jquery');
    $.cookie('jqcookie','necesita jquery',{expires: 1/24/2020});//hacer que muera una cookie 
    
    var cookies=$.cookie('jqcookie');//Para coger una cookie le pasamos el nombre
    console.log(cookies);
    
    $.removeCookie('jqcookie');
    
});

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
    fecha.setTime(0);
    document.cookie = "sitios=DAW01;expires="+fecha.toUTCString();
    
    
    //Usar la libreria cookie
    Cookies.set('Semanal','Cookie semanal',{expires: 7}); //Cookie que caduca a los 7 días
    console.log(Cookies.get("Semanal"));//Leer una cookie cualquiera con el nombre
    
    Cookies.remove("Semanal");//Eliminar una cookie con el nombre
    
    
    
}
window.addEventListener('load', cargar(), false);