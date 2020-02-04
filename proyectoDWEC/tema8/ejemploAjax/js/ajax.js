console.log('inicio');

var miXHR;

function cargar() {
    //crear el objeto de Ajax
    miXHR = new XMLHttpRequest();

    //iniciar que se haya pulsado el botón
    var boton = document.getElementById("conectar");
    boton.addEventListener('click', conectar, false);
}

function conectar() {
    //Lo primero hay que evaluar que tenemos una instancia del objeto
    if (miXHR) {
        console.log("Conexión correcta");
        //https://www.w3schools.com/js/js_ajax_http_send.asp
        //Abrimos la peticion
        //get o post
        //url del servidor
        //true si es asincrono y false si es sincrono
        var url;
        var valorInput = document.getElementById("numero").value;
        //Para enviar por GET
// url="archivo.php?num="+valorInput;
//miXHR.open('GET', url, true
//        
        miXHR.open('POST','archivo.php',true);
        miXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded")


        //Cada vez que hay un cambio llama a la función cambio
        miXHR.onreadystatechange = cambioAsincrono;

        //que queremos enviar 
        //get envia null
        //post envia los parametros
        //miXHR.send(null);
        miXHR.send("num="+valorInput);
    } else {
        alert("No existe un objeto de tipo XHR");
    }
}

function cambioAsincrono() {
    console.log(this.readyState);
    console.log(this.responseText);//Respuesta del fichero php
    console.log(this.status);

    if (this.readyState == 4 && this.status == 200) {
        console.log("Cargado y devuelto correctamente");
        var p = document.getElementById("respuesta");
        p.innerHTML = "La fecha en el servidor es:" + this.responseText;
        var p2 = document.getElementById("respuesta2");
        p2.innerHTML = "El numero del dia:" + this.responseText;
    }
}


window.addEventListener('load', cargar, false)

